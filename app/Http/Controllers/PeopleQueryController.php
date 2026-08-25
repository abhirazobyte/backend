<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PeopleQuery;
use App\Http\Requests\StorePeopleQueryRequest;
use App\Http\Requests\UpdatePeopleQueryRequest;

class PeopleQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = PeopleQuery::orderBy('id', 'desc')->get();
        return view('backend.program.query-list', compact('datas'));
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
     * @param  \App\Http\Requests\StorePeopleQueryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeopleQueryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PeopleQuery  $peopleQuery
     * @return \Illuminate\Http\Response
     */
    public function show(PeopleQuery $peopleQuery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PeopleQuery  $peopleQuery
     * @return \Illuminate\Http\Response
     */
    public function edit(PeopleQuery $peopleQuery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeopleQueryRequest  $request
     * @param  \App\Models\PeopleQuery  $peopleQuery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeopleQueryRequest $request, PeopleQuery $peopleQuery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeopleQuery  $peopleQuery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeopleQuery $peopleQuery)
    {
        //
    }
}
