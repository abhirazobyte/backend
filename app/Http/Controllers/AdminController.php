<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Program;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function login(){
        
         return view('auth.sign-in');
     }


     public function register(){
        return view('auth.sign-up');
    }

    public function save(Request $request){
        // return $request->input();

        // $request->validate([
        //     'name' => 'required|max:25',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6'
        // ]);

        //

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            return redirect('auth/register')
                        ->withErrors($validator)
                        ->withInput();
        }
        // Retrieve the validated input...
       // $validated = $validator->validated();

        // return $request->input();

        //  Insert data into database starts here...
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if ($save) {
            # code...
            return back()->with('success', 'New user has been successfully inserted to database');
        }else {
            # code...
            return back()->with('fail', 'Something went wrong try aganin later');
        }
        //  Insert data into database ends here..
    }

    public function check(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            return redirect('auth/login')
                        ->withErrors($validator)
                        ->withInput();
        }
        // return $request->input();
        $userinfo = User::where('email', '=', $request->email)->where('role_as',1)->first();

        if (!$userinfo) {
            return back()->with('fail', 'We do not recognize your email address');

        } else {
            # check password
            if (Hash::check($request->password, $userinfo->password)) {
                $request->session()->put('LoggedUser',$userinfo->id);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail', 'incorrect password');
            }

        }

    }
    public function rand_color() {
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }
    public function dashboard(){
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        $user = User::where('role_as',0)->where('status',1)->orderBy('name')->get();
        $chartData=[];
        foreach($user as $u){
            $lead = Program::where('status',1)->where('user_id', $u->id)->get();
            $chartData[] = array(
                'name'=>$u->name,
                'count'=>count($lead)
            );
        }
        return view('backend/index')->with(compact('data', 'chartData'));
    }


        public function logout(){
            if (session()->has('LoggedUser')){
                session()->pull('LoggedUser');
                return redirect('/auth/login');
            }
        }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
