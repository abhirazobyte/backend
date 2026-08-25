@extends('user.layouts.app')

@section('title','Bootstrap 5 Admin Template')

@section('sidebar')
    @include('user.layouts.sidebar')
@endsection

@section('navbar')
    @include('user.layouts.navbar')
@endsection

@section('content')
    @include('user.layouts.content')
@endsection

@section('footer')
    @include('user.layouts.footer')
@endsection

@section('script')
    @include('user.layouts.script')
@endsection
