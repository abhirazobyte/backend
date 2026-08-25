@extends('backend.layouts.app')
@section('title', 'Bootstrap 5 Admin Template')

@section('sidebar')
    @include('backend.layouts.sidebar')
@endsection

@section('navbar')
    @include('backend.layouts.navbar')
@endsection

@section('content')
    @php
        $action = !empty($item) ? route('gallery.update', $item->id) : route('gallery.store');
    @endphp

    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Home/</h1>
            <h1 class="h3 d-inline align-middle">Gallery/</h1>
            <h1 class="h3 d-inline align-middle">{{ !empty($item) ? 'Edit' : 'Add' }}</h1>
            {{-- <a class="badge bg-primary ms-2" href="#">Pro Component
{{-- target="_blank" --}}
            {{-- <i class="fas fa-fw fa-external-link-alt">
</i> --}}
            {{-- </a> --}}
        </div>
        <div class="row mb-2 mb-xl-3">
            {{-- <div class="col-auto d-none d-sm-block">
<h3><strong>Analytics</strong> Dashboard</h3>
</div> --}}

            <div class="col-auto ms-auto text-end mt-n1">
                {{-- <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a> --}}
                <a href="{{ route('gallery.index') }}" class="btn btn-primary">SHOW LISTS</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-7">
                <div class="card">
                    {{-- <div class="card-header">
<h5 class="card-title">Basic form</h5>
<h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
</div> --}}
                    <div class="card-body">

                        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="sparkline10-hd" style="padding-bottom:20px;">
                                <div class="main-sparkline10-hd">
                                    @if (\Session::has('success'))
                                        <h4 class="text-success">{!! \Session::get('success') !!} </h4>
                                    @endif

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

                            @if (!empty($item))
                                <input type="hidden" name="_method" value="PATCH">
                            @endif

                            <div class="mb-3">
                                <label class="form-label">Select Type</label>
                                <select name="type" class="form-select">
                                    <option value="">Select Type</option>
                                    <option value="image" {{ !empty($item) && $item->type == 'image' ? 'selected' : '' }}>Image</option>
                                    <option value="video" {{ !empty($item) && $item->type == 'video' ? 'selected' : '' }}>Video</option>
                                </select>
                            </div>
                            
                             <div class="mb-3">
                                <label class="form-label">Enter data-filter</label>
                                <input class="form-control" name="data_filter" value="{{ !empty($item) ? $item->data_filter : old('data_filter') }}" type="text" placeholder="Enter data-filter">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Enter Title</label>
                                <input class="form-control" name="title" value="{{ !empty($item) ? $item->title : old('title') }}" type="text" placeholder="Enter Title">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Enter YouTube Video URL</label>
                                <input class="form-control" name="url" value="{{ !empty($item) ? $item->image : old('url') }}" type="text" placeholder="Enter url">
                            </div>




                            <div class="mb-3">
                                <label class="form-label w-100">Upload Image</label>
                                <input type="file" id="photo" name="photo" class="form-control col-md-7 col-xs-12">

                                @if (!empty($item) && $item->image)
                                    <div class="form-group-inner">
                                        <img src="{{ asset('normal_images/' . $item->image) }}" width="100"
                                            height="100">
                                    </div>
                                @endif
                                {{-- <small class="form-text text-muted">Example block-level help text here.</small> --}}
                            </div>

                            <div class="mb-3">
                                <label class="form-check m-0">
                                    <input class="form-check-input" type="checkbox" name="status" value="1"
                                        {{ !empty($item) ? ($item->status == 1 ? 'checked' : '') : 'checked' }}>
                                    <span class="form-check-label">Status</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('gallery.index') }}">
                                <button type="button" class="btn btn-secondary">Cancel</button>
                            </a>

                    </div>
                </div>
            </div>


            </form>



        </div>

    </div>



@endsection

@section('footer')
    @include('backend.layouts.footer')
@endsection

@section('script')
    <script src="{{ asset('backend/js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <!-- CSS only -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    {{-- <script>
$(document).ready(function() {
$('#summernote').summernote();
});
</script> --}}
    {{-- <script>
$(document).ready(function() {
$('#summernote').summernote();
});
</script> --}}
    <script>
        $(function() {
            $('#summernote').summernote();
            $('#summernote_air').summernote({
                airMode: true
            });
        });
    </script>

@endsection
