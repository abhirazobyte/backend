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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin_followup_list')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-2">
                                <label>User</label>
                                <select class="form-select" name="userId" require>
                                    <option value="">--Select User --</option>
                                    @foreach($user as $u)
                                    <option value="{{$u->id}}" {{$u->id==$userId ? "selected" : ''}}>{{$u->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2">
                                <label>Start Date</label>
                                <input type="date" name="start_date" class="form-control" value="{{$sdate!='' ? $sdate : date('Y-m-d') }}">
                            </div>
                            <div class="col-2">
                                <label>End Date</label>
                                <input type="date" name="end_date" class="form-control" value="{{$edate!='' ? $edate : '' }}">
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

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row mb-2 mb-xl-3">



                        </div>
                        <table id="datatables-multi" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>By</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $data)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{$data->name_of_cordinator}}</td>
                                    <td>
                                        {{$data->followupby}}
                                        @if($data->path!='')
                                        <a href="{{ asset('images/followup')}}/{{$data->path}}" download="{{$data->path}}"><i class="fa fa-download"></i></a>
                                        @endif

                                    </td>
                                    <td>{{$data->followup_date}}</td>
                                    <td>{{$data->description}}</td>
                                    <td>{{$data->getCreatedUser->name}}</td>
                                    <td>{{$data->created_at}}</td>
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