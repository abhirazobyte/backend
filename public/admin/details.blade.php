@extends('layouts.app')
@section('sidebar')
@include('layouts.inc.sidebar')
@endsection
@section('content')
<div class="mt-4">
<div class="card">
    <div class="card-header">
        <div class="card-actions float-end">
            <div class="dropdown position-relative">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>

    </div>
    <div class="card-body">
        <div id="tasks-completed" style="min-height:50px;">
            <div class="row g-3">
          @forelse ($user as $user)
             <div class="col-lg-6">
                <div class="card mb-3 bg-light cursor-grab border">
                    <div class="card-body p-3">
                        <p>Name: <span class="fw-bold">{{ $user->name}}</span></p>
                        <p>Email: <span class="fw-bold">{{ $user->email}}</span></p>
                        <div class="float-start mt-n1">
                            <img src="https://langmainternational.com/public/leads/public/admin/img/avatars/avatar.jpg" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div>
                       <div class="text-end">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/dashboard/bdm-details/'.$user->id) }}">View</a>
                       </div>
                    </div>
                </div>
             </div>

          @empty


          @endforelse
        </div>
    </div>
    </div>
</div>
</div>
@endsection
