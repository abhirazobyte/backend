@extends('backend.layouts.app')

@section('title', 'Bootstrap 5 Admin Template')

@section('sidebar')
@include('backend.layouts.sidebar')

@endsection

@section('navbar')
@include('backend.layouts.navbar')
@endsection

@section('content')
<div class="container-fluid p-0">
    @if(count($datas)==0)
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form method="post" action="{{route('admin_transfer_lead')}}">
                            @csrf
                            <div class="row">
                                <div class="col-4">
                                    <label>User</label>
                                    <select class="form-select" name="fromUserId" required>
                                        <option value="">--Select User --</option>
                                        @foreach($user as $u)
                                        <option value="{{$u->id}}" @if($u->id==$fromUserId)'selected'@endif>{{$u->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-2">
                                    <button type="submit" class="btn btn-outline-primary mx-3 mt-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if (Session::get('error'))
    <div class="alert alert-danger" style="padding: 5px;">
        {{ Session::get('error') }}
    </div>
    @endif

    @if (Session::get('success'))
    <div class="alert alert-success" style="padding: 5px;">
        {{ Session::get('success') }}
    </div>
    @endif

    @if(count($datas)>0)
    <form action="{{route('admin_lead_transfer_to')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <table id="datatables-multi" class="table table-striped table-responsive record_table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Source</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Country/City</th>
                                        <th>Message</th>
                                        <th>Disposition</th>
                                        <th>Created On</th>
                                        <th># <input type="checkbox" id="selectAll" style="width:15px; height:15px" /></th>
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
                                        <td>{{$data->country}}/{{$data->cityName}}</td>
                                        <td>{{$data->message}}</td>
                                        <td>{{$data->disposition}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>
                                            <input type="checkbox" class="" value="{{$data->id}}" name="assign_lead_id[]" style="width:20px; height:20px">
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <label>Transfer To User</label>
                                    <select class="form-select" name="userId" required>
                                        <option value="">--Select User --</option>
                                        @foreach($toUser as $u)
                                        <option value="{{$u->id}}">{{$u->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-outline-primary mx-3 mt-4">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endif
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

        $(document).ready(function() {
            $('.record_table tr').click(function(event) {
                if (event.target.type !== 'checkbox') {
                    $(':checkbox', this).trigger('click');
                }
            });
        });
        $('#selectAll').click(function(e) {
            $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
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