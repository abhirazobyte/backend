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

    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Edit User</h1>

    </div>

    <div class="row">
        <div class="col-12 col-xl-7">
            <div class="card">

                <div class="card-body">

                    <form action="{{route('update_user')}}" method="post" enctype="multipart/form-data">

                        <div class="sparkline10-hd" style="padding-bottom:20px;">
                            <div class="main-sparkline10-hd">
                                

                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    <p class="error_item">{{ $error }}</p>
                                    @endforeach
                                </div>
                                @endif

                            </div>
                        </div>

                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                        <input type="hidden" value="{{$userInfo->id}}" name="userId">
                        <div class="mb-3">
                            <label class="form-label">Enter Name</label>
                            <input type="text" name="name" value="{{$userInfo->name}}"
                                id="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" id="email" value="{{$userInfo->email}}" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control" placeholder="Enter Password" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" autocomplete="off" onblur="comparepPassword()">
                            <span id="passmsg" style="color: red;"></span>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('user_list') }}">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>





@endsection

@section('footer')
@include('backend.layouts.footer')
@endsection
<script>
    function comparepPassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        alert(password)
        alert(confirmPassword)
        if (password != confirmPassword) {
            alert('check')
            document.getElementById("passmsg").innerHTML='Password and Confirm Password does not match';
        } else {
            document.getElementById("passmsg").innerHTML='';
        }
    }
</script>
