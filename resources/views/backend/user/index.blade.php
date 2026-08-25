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
                <div class="card-header">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row mb-2 mb-xl-3">
                            <div class="col-auto ms-auto text-end mt-n1">
                                <a href="{{ route('user_create') }}" class="btn btn-primary">Add New</a>
                            </div>
                        </div>
                        <table id="datatables-multi" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>

                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created On</th>
                                    <td>#</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $row)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="{{route('edit_user',[$row->id])}}" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success me-1"></i> Edit</a></li>
                                            <li><a onclick="return confirm('Are you sure?')" href="{{ route('delete_user',$row->id) }}" class="dropdown-item remove-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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