@extends('backend.layouts.app')

@section('title','Bootstrap 5 Admin Template')

@section('sidebar')
    @include('backend.layouts.sidebar')

@endsection

@section('navbar')
    @include('backend.layouts.navbar')
@endsection

@section('content')
<div class="container-fluid p-0">

    {{-- <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Multi Selection</h1><a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/" target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a>
    </div>   --}}

    <div class="row">
        <div class="col-12">
            {{-- <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                <div class="alert-message">
                    <h4 class="alert-heading">jQuery required</h4>
                    <p>
                        Unlike all other components included in this template, DataTables requires jQuery as a dependency. If you want to use DataTables in your application, add the following script element to your HTML code. The file includes both jQuery and DataTables.
                    </p>
                    <pre class="h6 text-danger mb-0">&#x3C;script src=&#x22;js/datatables.js&#x22;&#x3E;&#x3C;/script&#x3E;</pre>
                </div>
            </div> --}}
            <div class="card">
                <div class="card-header">
                    {{-- <h5 class="card-title">DataTables with Multi Selection</h5>
                    <h6 class="card-subtitle text-muted">This example shows the multi option. Note how a click on a row will toggle its selected state without effecting other rows, unlike the os and single options shown in other examples. See official documentation <a href="https://datatables.net/extensions/select/examples/initialisation/multi.html"
                            target="_blank" rel="noopener noreferrer nofollow">here</a>.</h6> --}}

                </div>
                <div class="card-body">
                    <div class="row mb-2 mb-xl-3">
                        {{-- <div class="col-auto d-none d-sm-block">
                            <h3><strong>Analytics</strong> Dashboard</h3>
                        </div> --}}

                        <div class="col-auto ms-auto text-end mt-n1">

                            <a href="{{ route('files.create') }}" class="btn btn-primary">Add New</a>
                        </div>
                    </div>
                    <table id="datatables-multi" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>URL</th>
                                {{-- <th>status</th> --}}
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach ($datas as $key=>$data)
                            <tr>
                                <td>{{$key+1}}</td>

                                <td>{{ $data->title }}</td>

                                <td>

                                    <img width="50" class="mr-3" src="{{asset('normal_images/'.$data->image )}}">

                                </td>

                                <td>
                                    <button onclick="copy(this)" class="mr-3">{{ asset("normal_images/".$data->image)}}</button>
                                </td>




                                {{-- <td>
                                    <span class="badge bg-{{$data->status ? 'success' : 'danger'}}">
                                        {{$data->status ? 'Active' : 'Deactive'}}
                                    </span>
                                </td> --}}

                                 <td class="table-action">
                                    <a href="{{ route('files.edit', $data->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" title="Edit" class="feather feather-edit-2 align-middle">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                        </a>

                                    {{-- <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle">
                                            <polyline points="3 6 5 6 21 6">
                                                </polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                        </a> --}}
                                        {{-- <form action="{{ url('admin/page' , $data->id ) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button data-toggle="tooltip" title="Trash"
                                                class="pull-right btn-sm btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form> --}}
                                </td>
                                {{--  --}}
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
{{-- url --}}
<script>
    function copy(that) {
    var inp =document.createElement('input');
    document.body.appendChild(inp);
    inp.value =that.textContent;
    inp.select();
    document.execCommand('copy',false);
    inp.remove();
    alert("URL Copied");
    }
    </script>
{{-- url--}}

@endsection
