<?php

namespace App\Http\Controllers;

use App\models\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use Hash;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        
        //@dd($request->all());
        
        $validator = Validator::make($request->all(), [
            'name'=>'required|min:2|max:100',
            'email'=>'required|email|unique:users',
            'mobile' => 'required|numeric',
            'password'=>'required|min:6|max:100',
          // 'confirm_password'=>'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message'=>'Validation fails',
                'errors'=>$validator->errors()
            ],400);
        }

        // $user = Api::create([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'mobile'=>$request->mobile,
        //     'pass'=>$request->password,
        //     'password'=>Hash::make($request->password)
        // ]);
        
        $user = new Api;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->mobile = $request->mobile;
                $user->pass = $request->pass;
                $user->password = Hash::make($request->password);
                $save = $user->save();
                
                return response()->json([
                    'message'=>'Registration',
                    'data'=> $user
                ],200);
                // 
        //          if($save){
        //         return response()->json([
        //             'message'=>'Login successful',
        //             'data'=> $user
        //         ],200);
        // }else{
        //     return response()->json([
        //         'message'=>'database problem',
        //     ],500);
        // }
                // 



    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|numeric',
            'password'=>'required|min:6|max:100'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message'=>'Validation fails',
                'errors'=>$validator->errors()
            ],422);
        }
        $user = ApiUser::where('mobile', $request->mobile)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                return response()->json([
                    'message'=>'Login successful',
                    'data'=> $user
                ],200);

            }

        }else{
            return response()->json([
                'message'=>'Incorrect credentials',
            ],400);
        }


    }
}
