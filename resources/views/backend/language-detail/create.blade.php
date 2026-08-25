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
$action = !empty($item) ? route('language-detail.update', $item->id) : route('language-detail.store');
$course_feature = null;
@endphp

    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Home/</h1>
            <h1 class="h3 d-inline align-middle">Language-Detail/</h1>
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
                {{-- <a href="{{ route('language-detail.index') }}" class="btn btn-primary">SHOW LISTS</a> --}}
                <a href="{{url('admin/language-page/'.$lanid)}}" class="btn btn-primary">SHOW LISTS</a>
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

                            {{-- @csrf --}}


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

                            @if(!empty($item))
                            <input type="hidden" name="_method" value="PATCH">
                            @php
                            $course_feature = json_decode($item->course_feature);
                            @endphp
                        @endif


                            <div class="mb-3">
                                <label class="form-label">Enter Title</label>
                                <input type="text" name="title" value="{{ !empty($item) ? $item->title : old('title') }}"
                                    id="title" class="form-control" placeholder="Enter Title">
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Enter Content Title</label>
                                <textarea name="content" id="summernote"
                                    class="form-control">{{!empty($item) ? $item->content : old('content') }}</textarea>
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Enter Fact</label>
                                <textarea name="fact" id="summernote_2"
                                    class="form-control">{{!empty($item) ? $item->fact : old('fact') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Enter Important_info</label>
                                <textarea name="important_info" id="summernote_3"
                                    class="form-control">{{!empty($item) ? $item->important_info : old('important_info') }}</textarea>
                            </div>
                            {{--  --}}
                            <div class="row">
                                <hr>
                                <h4 style="padding-bottom:20px;" class="text-primary">COURSE FEATURES</h4>

                                <div class="form-group mb-4 col-md-2">
                                    <label>Lectures</label>
                                    <input class="form-control" name="lecture" value="{{ !empty($course_feature) ? $course_feature->lecture : old('lecture') }}" type="text" placeholder="Lectures">
                                </div>

                                <div class="form-group mb-4 col-md-2">
                                    <label>Quizzes</label>
                                    <input class="form-control" name="quiz" value="{{ !empty($course_feature) ? $course_feature->quiz : old('quiz') }}" type="text" placeholder="Quiz">
                                </div>

                                <div class="form-group mb-4 col-md-3">
                                    <label>Duration</label>
                                    <input class="form-control" name="duration" value="{{ !empty($course_feature) ? $course_feature->duration : old('duration') }}" type="text" placeholder="Duration">
                                </div>

                                <div class="form-group mb-4 col-md-3">
                                    <label>Skill Level</label>
                                    <input class="form-control" name="skill" value="{{ !empty($course_feature) ? $course_feature->skill : old('skill') }}" type="text" placeholder="skill">
                                </div>


                                <div class="form-group mb-4 col-md-3">
                                    <label>language</label>
                                    <input class="form-control" name="language" value="{{ !empty($course_feature) ? $course_feature->language : old('language') }}" type="text" placeholder="language">
                                </div>



                                <div class="form-group mb-4 col-md-3">
                                    <label>Students</label>
                                    <input class="form-control" name="student" value="{{  !empty($course_feature && $course_feature->student) ? $course_feature->student : old('student') }}" type="text" placeholder="student">
                                </div>

                                <div class="form-group mb-4 col-md-3">
                                    <label>Assesments</label>
                                    <input class="form-control" name="assesment" value="{{ !empty($course_feature && $course_feature->assesment) ? $course_feature->assesment : old('assesment') }}" type="text" placeholder="Assesment">
                                </div>

                            </div>

                            {{--  --}}



                            <div class="mb-3">
                                <label class="form-label w-100">Upload Logo</label>
                                <input type="file" id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                                @if (!empty($item) && $item->image)
                                    <div class="form-group-inner">
                                        <img src="{{ asset('normal_images/' . $item->image) }}" width="100" height="100">
                                    </div>
                                @endif

                            </div>

                            <div class="mb-3">
                                <label class="form-check m-0">
                                    <input class="form-check-input" type="checkbox" name="status" value="1"
                                        {{ !empty($item) ? ($item->status == 1 ? 'checked' : '') : 'checked' }}>
                                    <span class="form-check-label">Status</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('language-detail.index') }}">
                                <button type="button" class="btn btn-secondary">Cancel</button>
                            </a>
                            {{-- </form> --}}
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-5">
                <div class="card">

                    <div class="card-body">
                        {{-- <form> --}}
                        <div class="mb-3 row">
                            <label class="col-form-label">SEO Title</label>
                            {{-- col-sm-2 text-sm-end --}}
                            <div class="col-sm-10">
                                {{-- <input type="email" class="form-control" placeholder="Email"> --}}
                                <input type="text" class="form-control" name="seo_title"
                                    value="{{ !empty($item) ? $item->seo_title : old('seo_title') }}"
                                    placeholder="Enter SEO Title">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label">SEO Keywords</label>
                            <div class="col-sm-10">
                                {{-- <input type="email" class="form-control" placeholder="Email"> --}}
                                <input class="form-control" name="seo_keyword"
                                    value="{{ !empty($item) ? $item->seo_keyword : old('seo_keyword') }}" type="text"
                                    placeholder="Enter SEO Keywords">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label">SEO Description</label>
                            <div class="col-sm-10">
                                <textarea name="seo_description"
                                    class="form-control">{{ !empty($item) ? $item->seo_description : old('seo_description') }}</textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label">SEO URL</label>
                            <div class="col-sm-10">
                                <textarea name="seo_url"
                                    class="form-control">{{!empty($item) ? $item->slug : old('seo_url') }}</textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label">Upload Banner</label>
                            <div class="col-sm-10">
                            <input type="file" id="photo" name="banner" class="form-control">
                            @if (!empty($item) && $item->banner)
                                    <img class="form-control" src="{{ asset('normal_images/' . $item->banner) }}" style="width: 150px;
                                    height: 80px;">
                            @endif
                        </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label">Upload Aid Banner</label>
                            <div class="col-sm-10">
                            <input type="file" id="photo" name="aid" class="form-control">
                            @if (!empty($item) && $item->aid)
                                <div class="form-control">
                                    <img class="form-control" src="{{ asset('normal_images/'.$item->aid) }}" style="width: 150px;
                                    height: 500px;">
                                </div>
                            @endif
                        </div>
                        </div>


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
            $('#summernote_2').summernote();
            $('#summernote_3').summernote();
            $('#summernote_air').summernote({
                airMode: true
            });
        });
    </script>

@endsection
