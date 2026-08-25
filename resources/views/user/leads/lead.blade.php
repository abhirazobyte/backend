@extends('user.layouts.app')

@section('title', 'Bootstrap 5 Admin Template')

@section('sidebar')
@include('user.layouts.sidebar')

@endsection

@section('navbar')
@include('user.layouts.navbar')
@endsection

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <form action="{{route('active_lead')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-4">
                                        <label>Start Date</label>
                                        <input type="date" name="start_date" class="form-control" value="<?php echo date('Y-m-d') ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>End Date</label>
                                        <input type="date" name="end_date" class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-outline-primary mx-3 mt-4">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-4">
                            <form action="{{route('search_lead')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <label>Enter Mobile Number</label>
                                        <input type="text" name="mobile" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-outline-primary mx-3 mt-4">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row mb-2 mb-xl-3">
                            <div class="col-auto ms-auto text-end mt-n1">
                                <a href="{{ route('add_lead') }}" class="btn btn-primary">Add Lead</a>
                            </div>
                        </div>
                        <table id="datatables-multi" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Source</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Language</th>
                                    <th>Country/City</th>
                                    <th>Message</th>
                                    <!--th>Title</th-->
                                    <th>Created On</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $key => $data)
                                <tr>
                                    <td>{{ $key + 1 }}</td>

                                    <td>{{$data->name}}</td>
                                    <td>@php
                                        if($data->type=='f')
                                        $type = 'Facebook';
                                        elseif($data->type=='g')
                                        $type = 'Google';
                                        else
                                        $type = 'Other';

                                        @endphp
                                        {{$type}}
                                    </td>
                                    <td>{{$data->mobile}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->language}}</td>
                                    <td>{{$data->country}}/{{$data->cityName}}</td>
                                    <td>{{$data->message}}</td>
                                    <!--td>{{$data->title}}</td-->
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                        <a href="{{route('add_followup', [$data->id])}}" style="margin-right:10px;"><i class="fa fa-plus"></i></a>
                                        <a href="{{route('followup_list', [$data->id])}}" style="margin-right:10px;"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection

    @section('footer')
    @include('backend.layouts.footer')
    @endsection

    @section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="{{ asset('backend/js/app.js') }}"></script>

    <script src="{{ asset('backend/js/datatables.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables with Multiselect
            var datatablesMulti = $("#datatables-multi").DataTable({
                responsive: true,
                select: {
                    style: "multi"
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            setTimeout(function() {
                if (localStorage.getItem('popState') !== 'shown') {
                    window.notyf.open({
                        type: "success",
                        message: "Get access to all 500+ components and 45+ pages with AdminKit PRO. <u><a class=\"text-white\" href=\"https://adminkit.io/pricing\" target=\"_blank\">More info</a></u> 🚀",
                        duration: 10000,
                        ripple: true,
                        dismissible: false,
                        position: {
                            x: "left",
                            y: "bottom"
                        }
                    });

                    localStorage.setItem('popState', 'shown');
                }
            }, 15000);
        });
    </script>


    @endsection