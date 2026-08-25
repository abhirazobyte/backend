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
    @if($lastFollowup!=null)
    <div class="row mb-3">
        <div class="col-12">
            <span>Last Discussion - </span>{{$lastFollowup->description}}<br>
            <span>Last Discussion With - </span>{{$lastFollowup->getCreatedUser->name}}<br>
            <span>Last Discussion Date - </span>{{$lastFollowup->created_at}}<br>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <h2>Add Followup ({{$data->name}}) - {{$data->language}}</h2>
            <div class="card">
                <div class="card-header">
                    <div class="card-header">
                    </div>

                    <div class="card-body">
                        <form action="{{route('followup_submit')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="lead_id" value="{{$data->id}}">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 mb-2"><label for="followup-date" class="form-label">Type<sup>*</sup></label>
                                        <select class="form-select" id="followupType" name="type" required>
                                            <option value="">--Please Select Followup Type --</option>
                                            <option value="Activity">Activity</option>
                                            <option value="Planner">Planner</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2" id="followupDateDiv">
                                        <label for="followupDate" class="form-label">Followup Date<sup>*</sup></label>
                                        <?php
                                        $today = date('Y-m-d H:m');
                                        $mindate = date('Y-m-d H:m', strtotime('-2 day', strtotime($today)))
                                        ?>
                                        <input type="datetime-local" name="followup_date" id="followupDate" min="<?php echo $mindate ?>" max="<?php echo $today; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2" id="nextFollowupDateDiv" style="display: none;">
                                        <label for="nextFollowupDate" class="form-label"> Next Followup Date</label>
                                        <?php
                                        $nextMindate = date('Y-m-d H:m', strtotime('+0 day', strtotime($today)))
                                        ?>
                                        <input type="datetime-local" name="next_followup_date" id="nextFollowupDate" class="form-control" min="<?php echo $nextMindate; ?>">
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2">
                                        <label for="followup-by" class="form-label">Followup By<sup>*</sup></label>
                                        <select id="formrow-inputState" name="followupby" class="form-select" required>
                                            <option value="" selected="selected">
                                                --Please Select Followup By --
                                            </option>
                                            <option value="Phone Call">Phone Call</option>
                                            <option value="SMS">SMS</option>
                                            <option value="eMail">eMail</option>
                                            <option value="Whatsapp">Whatsapp</option>
                                            <option value="Visit">Visit</option>
                                            <option value="Virtual Meeting">Virtual Meeting</option>
                                            <option value="Client Visited">Client Visited</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2">
                                        <label for="followup-date" class="form-label">Followup With</label>
                                        <input type="text" name="followup_with" class="form-control" value="{{$data->name}}" readonly>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <label for="description" class="form-label">Disposition<sup>*</sup></label>
                                        <div class="input-group">
                                            <select id="formrow-inputState" name="disposition" class="form-select">
                                                <option value="" selected="selected">
                                                    --Please Select--
                                                </option>
                                                <option value="Admission Done">Admission Done</option>
                                                <option value="By mistake enquiry">By mistake enquiry</option>
                                                <option value="Call back">Call back</option>
                                                <option value="Had word with some one else">Had word with some one else</option>
                                                <option value="Invalid no">Invalid no</option>
                                                <option value="Join Some Where else">Join Some Where else</option>
                                                <option value="Not Interested">Not Interested</option>
                                                <option value="Not picked">Not picked</option>
                                                <option value="Ringing No Response">Ringing No Response</option>
                                                <option value="Wrong number">Wrong number</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <label for="description" class="form-label">Description<sup>*</sup></label>
                                        <div class="input-group">
                                            <textarea placeholder="description" name="description" class="form-control" spellcheck="false" data-ms-editor="true" minlength="20" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <label for="description" class="form-label"> File <sup>*</sup></label>
                                        <div class="input-group">
                                            <input type="file" id="inputFileUpload" name="path" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 mt-2">
                                        <button type="submit" class="btn btn-primary btn-sm rounded-end float-start btn-text"> Add Follow Up </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
    $(document).ready(function() {
        $('#followupType').on('change', function() {
            let followupType = $('#followupType').val()
            if (followupType == 'Planner') {
                $('#followupDateDiv').hide()
                $('#nextFollowupDateDiv').show()
                $('#followupDate').prop('required', false);
                $('#nextFollowupDate').prop('required', true);
            } else {
                $('#followupDateDiv').show()
                $('#nextFollowupDateDiv').hide()
                $('#nextFollowupDate').prop('required', false);
                $('#followupDate').prop('required', true);
            }
        })
    })
</script>


@endsection