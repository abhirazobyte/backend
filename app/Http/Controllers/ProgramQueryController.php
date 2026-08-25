<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProgramQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProgramQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $datas = ProgramQuery::orderBy('id', 'desc')->get();
        // return view('backend/program/app-list', compact('datas'));
        
        $datas = ProgramQuery::orderBy('id', 'desc')->take(5000)->get();
        return view('backend.program.app-list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProgramQueryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgramQueryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProgramQuery  $programQuery
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramQuery $programQuery)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProgramQuery  $programQuery
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramQuery $programQuery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgramQueryRequest  $request
     * @param  \App\Models\ProgramQuery  $programQuery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgramQueryRequest $request, ProgramQuery $programQuery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProgramQuery  $programQuery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        @($id);
         $programQuery = ProgramQuery::find($id);

        // $path = $category->image;
        // if (File::exists($path)) {
        //     File::delete($path);
        // }

        $programQuery->delete();
        return redirect('/admin/program-app')->with('message', 'Lead Deleted Successfully');
    }
}
