<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\followups;
use App\Models\Program;
use Session;
use DB;


class UserController extends Controller
{
    function __construct()
    {
        if (Session::has('userSession') != '') {
            $uid = Session::get("userSession")["id"];
            $getUserLogCount = DB::table('userloginlogs')->where('user_id', $uid)->where('type', 'Login')->where('status',1)->get();
            if (count($getUserLogCount) > 0) {
                $session_id = Session::getId();
                $getUserLog = DB::table('userloginlogs')->where('user_id', $uid)->where('type', 'Login')->where('status',1)->orderBy('id', 'desc')->first();
                if ($getUserLog) {
                    $getUserLog->session_id;
                    if ($session_id != $getUserLog->session_id) {
                        Redirect::to('/user/auth/logout')->send();
                    }
                }
            }
        }
    }
    public function Index()
    {
        $users = User::where('status', 1)->get();

        return view('backend.user.index', compact('users'));
    }

    public function UserCreate()
    {
        return view('backend.user.create');
    }

    public function UserSubmit(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password =  Hash::make($req->password);
        $user->status = 1;
        $user->save();

        return redirect()->route('user_list')->with('success', 'User created successfully');
    }

    public function UserEdit($id)
    {
        $userInfo = User::where('id', $id)->first();
        return view('backend.user.edit', compact('userInfo'));
    }

    public function UserUpdate(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        if ($req->password != '') {
            $req->validate([
                'password' => 'required|min:8',
            ]);
        }

        $passtext = '';
        $userInfo = User::where('id', $req->userId)->first();
        if ($req->password != '') {
            $passtext = Hash::make($req->password);
        } else {
            $passtext = $userInfo->password;
        }
        User::where('id', $req->userId)->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $passtext,
        ]);
        return redirect()->route('user_list')->with('success', 'User updated successfully');
    }

    public function UserDelete($id)
    {
        User::where('id', $id)->update(['status' => 0]);
        return redirect()->route('user_list')->with('success', 'User deleted successfully');
    }
    public function Login(){
        return view('user.Login');
    }

    public function AuthCheck(Request $req){
        $req->validate([
            'email' =>'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $req->email)->first();
        if ($user && Hash::check($req->password, $user->password)) {
            $userData = [
                'id'=>$user->id,
                'email'=>$user->email,
                'role'=>$user->role_as,
            ];
            $userSession = json_decode(json_encode($userData), true);
            Session::put("userSession", $userSession);
            $session_id = Session::getId();
            $logform = [
                "user_id" => $user->id,
                "type" => "Login",
                "session_id" => $session_id,
                "ip_address" => \Request::ip(),
                "created_date" => date("Y-m-d H:i:s"),
                "status" => "1",
            ];
            DB::table("userloginlogs")->insert($logform);
            return redirect()->route('user_dashboard');
        } else {
            return redirect()->route('user_login')->with('error', 'Email and Password is invalid');
        }
    }

    public function Dashboard(){
        $uid = Session::get('userSession')['id'];
        $whr = [];
        $whr2 = [];
        $whr[] = ['created_by', $uid];
        $whr[] = ['status', 1];
        $whr2[] = ['type', 'Planner'];
        $whr2[] = ['next_followup_date', '<=', date('Y-m-d').' 23:59:59'];
        $data = followups::where($whr)->where($whr2)->get();
        $activeLead = Program::where('status', 1)->where('user_id', $uid)->get()->count();
        $inActiveLead = Program::where('status', 0)->where('user_id', $uid)->get()->count();
        $admissionDone = Program::where('status', 3)->where('user_id', $uid)->get()->count();

        return view('user.index')->with(compact('data','activeLead','inActiveLead','admissionDone'));
    }

    public function Logout(){
        if (Session::has('userSession') != '') {
        $uid = Session::get('userSession')['id'];
        DB::table('userloginlogs')->where('user_id', $uid)->update(['status'=>0]);
        $session_id = Session::getId();
        $logform = [
            "user_id" => $uid,
            "type" => "Logout",
            "session_id" => $session_id,
            "ip_address" => \Request::ip(),
            "created_date" => date("Y-m-d H:i:s"),
            "status" => "1",
        ];
        DB::table("userloginlogs")->insert($logform);
        }
        Session::forget('userSession');
        return redirect()->route('user_login')->with('success', 'Logout Successfully.');
    }
}
