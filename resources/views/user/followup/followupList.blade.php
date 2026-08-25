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