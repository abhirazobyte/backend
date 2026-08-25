<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class LeadController extends Controller
{
    //
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
                        redirect()->route('user_logout')->send();
                    }
                }
            }
        }
    }
    public function ActiveLead(Request $req){
        $uid = Session::get('userSession')['id'];
        $whr = [];
        $whr[] = ['user_id', '=', $uid];
        $whr[] = ['status', '=', 1];
        if(!empty($req->start_date)){
            $whr[] = ['created_at', '>=', $req->start_date.' 00:00:00'];
        }else{
            $today = date('Y-m-d').' 00:00:00';
            $whr[] = ['created_at', '>=', $today];
        }
        if(!empty($req->end_date)){
            $whr[] = ['created_at', '<=', $req->end_date.' 23:59:59'];
        }
        $datas = Program::where($whr)->orderBy('id', 'DESC')->take(300)->get();
        return view('user.leads.lead')->with(compact('datas'));
    }
    public function InActiveLead(){
        $uid = Session::get('userSession')['id'];
        $whr = [];
        $whr[] = ['user_id', '=', $uid];
        $whr[] = ['status', '=', 2];
        $datas = Program::where($whr)->orderBy('id', 'DESC')->take(500)->get();
        return view('user.leads.InactiveLead')->with(compact('datas'));
    }
    public function ArchivedLead(){
        $uid = Session::get('userSession')['id'];
        $whr = [];
        $whr[] = ['user_id', '=', $uid];
        $whr[] = ['status', '=', 3];
        $datas = Program::where($whr)->orderBy('id', 'DESC')->take(500)->get();
        return view('user.leads.ArchivedLead')->with(compact('datas'));
    }

    public function AddLead(){
        return view('user.leads.AddLead');
    }

    public function LeadSubmit(Request $req){
        $req->validate([
            'name' =>'required',
            'email' =>'required|email',
            'mobile' =>'required|numeric',
            'language' =>'required',
            'message' => 'required'
        ]);

        $data = $req->all();
        $data['user_id'] = Session::get('userSession')['id'];
        Program::create($data);
        Session::flash('success', 'Lead added successfully');
        return redirect()->route('active_lead');
    }

    public function AssignLead(){
        $whr = [];
        $whr[] = ['user_id', '=', 0];
        $whr[] = ['status', '=', 1];
        $datas = Program::where($whr)->orderBy('id', 'DESC')->take(100)->get();
        $user = User::where('status',1)->where('role_as',0)->get();
        return view('backend.leads.AssignLead')->with(compact('datas','user'));
    }

    public function AssignLeadSubmit(Request $req){
        try {
            $countlead = count($req->assign_lead_id);
            if($countlead==0){
                throw new Exception("Please select leads to transfer");
            }
            if($req->userId==''){
                throw new Exception("Please select user");
            }
            $lid = '';
            foreach($req->assign_lead_id as $id){
                Program::where('status',1)->where('id', $id)->update([
                    'user_id'=>$req->userId,
                    'modified_date'=>date('Y-m-d H:i:s'),
                    'modified_by'=>Session::get('LoggedUser')
                ]);
            }
            
            return redirect()->route('admin_assign_lead')->with('success', 'Lead assigned successfully');

        } catch (Exception $th) {
            $msg = $th->getMessage().'-'.$th->getLine();
            return back()->with('error', $msg);
        }
    }

    public function TransferLead(Request $req){
        $datas=[];
        $toUser=[];
        $fromUserId = $req->fromUserId;
        $user = User::where('status',1)->where('role_as',0)->get();
        if($req->fromUserId!=''){
            $whr = [];
            $whr[] = ['user_id', '=', $req->fromUserId];
            $whr[] = ['status', '=', 1];
            $datas = Program::where($whr)->orderBy('id', 'DESC')->take(500)->get();
            $toUser = User::where('status',1)->where('id', '!=', $req->fromUserId)->where('role_as',0)->get();
        }
        return view('backend.leads.TransferLead')->with(compact('datas','user','fromUserId','toUser'));
    }

    public function TransferLeadTo(Request $req){
        try {
            $countlead = count($req->assign_lead_id);
            if($countlead==0){
                throw new Exception("Please select leads to transfer");
            }
            if($req->userId==''){
                throw new Exception("Please select user");
            }
            $lid = '';
            foreach($req->assign_lead_id as $id){
                Program::where('status',1)->where('id', $id)->update([
                    'user_id'=>$req->userId,
                    'modified_date'=>date('Y-m-d H:i:s'),
                    'modified_by'=>Session::get('LoggedUser')
                ]);
            }
            
            return redirect()->route('admin_transfer_lead')->with('success', 'Lead assigned successfully');
        } catch (Exception $th) {
            $msg = $th->getMessage().'-'.$th->getLine();
            return back()->with('error', $msg);
        }
    }
}