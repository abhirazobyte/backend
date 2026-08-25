<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\followups;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class FollowupController extends Controller
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
    public function AddFollowup($id){
        $uid = Session::get('userSession')['id'];
        $data = Program::where('id', $id)->first();
        if($data->user_id!=$uid){
            return redirect()->route('user_dashboard');
        }
        $whr = [];
        $whr[] = ['lead_id', $id];
        $whr[] = ['type', 'Activity'];
        $lastFollowup = followups::with(['getLeadDetail', 'getCreatedUser'])->where($whr)->orderBy('id', 'desc')->first();
        return view('user.followup.addFollowup')->with(compact('data','lastFollowup'));

    }

    public function FollowupSubmit(Request $req){ 
        $uid = Session::get('userSession')['id'];
        $req->validate([
            'type' => 'required',
            'followupby' => 'required',
            'description' => 'required',
        ]);
        $data = Program::where('id', $req->lead_id)->first();
        if($data->user_id!=$uid){
            return redirect()->route('user_dashboard');
        }
        if ($req->hasfile("path")) {
            $pic_name = $req->lead_id ."_".date('ymdHis')."_".strtolower(str_replace(" ","_",$req->file("path")->getClientOriginalName()));
            $decpath = "images/followup/";
            $req->file("path")->move($decpath, $pic_name);
        } else {
            $pic_name = "";
        }
        $disposition = $req->disposition!='' ?  $req->disposition.' - ' : '';
        $form = [
            'lead_id' => $req->lead_id,
            'followupby'=>$req->followupby,
            'name_of_cordinator'=>$req->followup_with,
            'type'=>$req->type,
            'followup_date' => $req->followup_date,
            'next_followup_date' => $req->next_followup_date,
            'email'=>$data->email,
            'phone'=>$data->mobile,
            'description' => $disposition.''.$req->description,
            'path'=>$pic_name,
            'created_by' => $uid,
            'created_at' => date('Y-m-d H:i:s'),
            'status'=>1,
        ];
        DB::table('followups')->insertGetId($form);

        $activeDisposition = ['Ringing No Response','Call back','Not picked'];
        $inactiveDisposition = ['Not Interested','Join Some Where else','Had word with some one else','By mistake enquiry','Wrong number','Invalid no'];
        if($req->disposition=='Admission Done'){
            DB::table('program_query')->where('id',$req->lead_id)->update([
                'status'=>3,
                'disposition'=>$req->disposition,
                'modified_date'=>date('Y-m-d H:i:s'),
                'modified_by'=>$uid
            ]);
        }
        if(in_array($req->disposition, $activeDisposition)){
            DB::table('program_query')->where('id',$req->lead_id)->update([
                'status'=>1,
                'disposition'=>$req->disposition,
                'modified_date'=>date('Y-m-d H:i:s'),
                'modified_by'=>$uid
            ]);
        }
        if(in_array($req->disposition, $inactiveDisposition)){
            DB::table('program_query')->where('id',$req->lead_id)->update([
                'status'=>2,
                'disposition'=>$req->disposition,
                'modified_date'=>date('Y-m-d H:i:s'),
                'modified_by'=>$uid
            ]);
        }



        return redirect()->route('active_lead')->with('message', 'Followup added successfully');
    }

    public function FollowupList($id){
        $whr = [];
        $whr[] = ['lead_id', $id];
        $whr[] = ['type', 'Activity'];
        $data = followups::with(['getLeadDetail'])->where($whr)->get();
        return view('user.followup.followupList')->with(compact('data'));
    }

    public function AllFollowupList(Request $req){
        $uid = Session::get('userSession')['id'];
        $user = User::where('status',1)->where('role_as',0)->get();
        $whr = [];
        $whr[] = ['type', 'Activity'];
        $whr[] = ['status', 1];
        $whr[] = ['created_by', $uid];
        
        if(!empty($req->start_date)){
            $whr[] = ['created_at', '>=', $req->start_date.' 00:00:00'];
        }
        if(!empty($req->end_date)){
            $whr[] = ['created_at', '<=', $req->end_date.' 23:59:59'];
        }
        
        $data = followups::with(['getLeadDetail'])->where($whr)->orderBy('id', 'desc')->get();
        return view('user.followup.AllFollowupList')->with(compact('data','user'));
    }

    public function AllPlannerList(Request $req){
        $uid = Session::get('userSession')['id'];
        $user = User::where('status',1)->where('role_as',0)->get();
        $whr = [];
        $whr[] = ['type', 'Planner'];
        $whr[] = ['status', 1];
        $whr[] = ['created_by', $uid];
        
        if(!empty($req->start_date)){
            $whr[] = ['created_at', '>=', $req->start_date.' 00:00:00'];
        }
        if(!empty($req->end_date)){
            $whr[] = ['created_at', '<=', $req->end_date.' 23:59:59'];
        }
        
        $data = followups::with(['getLeadDetail'])->where($whr)->orderBy('id', 'desc')->get();
        return view('user.followup.AllPlannerList')->with(compact('data','user'));
    }

    public function UpdatePlanner(Request $req){
        $uid = Session::get('userSession')['id'];
        $req->validate([
            'type' => 'required',
            'followup_id' => 'required',
            'followup_date' => 'required',
            'followupby' => 'required',
            'description' => 'required',
        ]);
        $data = followups::where('id', $req->followup_id)->first();
        if($req->type!='Activity'){
            return redirect()->route('user_dashboard');
        }

        followups::where('id', $req->followup_id)->update([
            'status'=>0,
            'updated_at'=>date('Y-m-d H:i:s'),
            'updated_by'=>$uid
        ]);
        $disposition = $req->disposition!='' ?  $req->disposition.' - ' : '';
        $form = [
            'lead_id' => $data->lead_id,
            'followupby'=>$req->followupby,
            'name_of_cordinator'=>$data->name_of_cordinator,
            'type'=>$req->type,
            'followup_date' => $req->followup_date,
            'email'=>$data->email,
            'phone'=>$data->phone,
            'description' => $disposition.''.$req->description,
            'followup_id'=>$req->followup_id,
            'created_by' => $uid,
            'created_at' => date('Y-m-d H:i:s'),
            'status'=>1,
        ];
        DB::table('followups')->insertGetId($form);
        $activeDisposition = ['Ringing No Response','Call back','Not picked'];
        $inactiveDisposition = ['Not Interested','Join Some Where else','Had word with some one else','By mistake enquiry','Wrong number','Invalid no'];
        if($req->disposition=='Admission Done'){
            DB::table('program_query')->where('id',$data->lead_id)->update([
                'status'=>3,
                'disposition'=>$req->disposition,
                'modified_date'=>date('Y-m-d H:i:s'),
                'modified_by'=>$uid
            ]);
        }
        if(in_array($req->disposition, $activeDisposition)){
            DB::table('program_query')->where('id',$data->lead_id)->update([
                'status'=>1,
                'disposition'=>$req->disposition,
                'modified_date'=>date('Y-m-d H:i:s'),
                'modified_by'=>$uid
            ]);
        }
        if(in_array($req->disposition, $inactiveDisposition)){
            DB::table('program_query')->where('id',$data->lead_id)->update([
                'status'=>2,
                'disposition'=>$req->disposition,
                'modified_date'=>date('Y-m-d H:i:s'),
                'modified_by'=>$uid
            ]);
        }
        return Redirect::back()->with('success', 'Planner updated successfully');
    }

    public function AdminFollowupList(Request $req){
        $userId = $req->userId;
        $sdate='';
        $edate='';
        $user = User::where('status',1)->where('role_as',0)->get();
        $whr = [];
        $whr[] = ['type', 'Activity'];
        if(!empty($userId)){
            $whr[] = ['created_by', '=', $userId];
        }
        if(!empty($req->start_date)){
            $sdate=$req->start_date;
            $whr[] = ['created_at', '>=', $req->start_date.' 00:00:00'];
        }
        if(!empty($req->end_date)){
            $edate=$req->end_date;
            $whr[] = ['created_at', '<=', $req->end_date.' 23:59:59'];
        }
        
        $data = followups::with(['getLeadDetail'])->where($whr)->orderBy('id', 'desc')->get();
        return view('backend.followup.AllFollowupList')->with(compact('data','user','userId','sdate','edate'));
    }

    public function AdminPlannerList(Request $req){
        $user = User::where('status',1)->where('role_as',0)->get();
        $whr = [];
        $whr[] = ['type', 'Planner'];
        $whr[] = ['status', 1];
        if(!empty($req->userId)){
            $whr[] = ['created_by', '=', $req->userId];
        }
        if(!empty($req->start_date)){
            $whr[] = ['created_at', '>=', $req->start_date.' 00:00:00'];
        }
        if(!empty($req->end_date)){
            $whr[] = ['created_at', '<=', $req->end_date.' 23:59:59'];
        }
        
        $data = followups::with(['getLeadDetail'])->where($whr)->orderBy('id', 'desc')->get();
        return view('backend.followup.AllPlannerList')->with(compact('data','user'));
    }

    public function SearchLead(Request $req){
        try{
            if($req->mobile==''){
                throw new Exception('Mobile number must not blank');
            }

            $data = followups::with(['getLeadDetail','getCreatedUser'])->where('phone', 'like', '%'.$req->mobile.'%')->where('status', '!=', 0)->orderBy('id', 'desc')->get();
            return view('user.leads.leadSearch')->with(compact('data'));
        } catch (Exception $th) {
            $msg = $th->getMessage().'-'.$th->getLine();
            return back()->with('error', $msg);
        }
    }
}
