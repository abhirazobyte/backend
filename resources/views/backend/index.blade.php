@extends('backend.layouts.app')

@section('title','Bootstrap 5 Admin Template')

@section('sidebar')
    @include('backend.layouts.sidebar')
@endsection

@section('navbar')
    @include('backend.layouts.navbar')
@endsection

@section('content')
    @include('backend.layouts.content')
@endsection

@section('footer')
    @include('backend.layouts.footer')
@endsection

@section('script')
    @include('backend.layouts.script')
@endsection
