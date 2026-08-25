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
                <div class="card-body">
                    <form action="{{route('all_planner_list')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-2">
                                <label>Start Date</label>
                                <input type="date" name="start_date" class="form-control" value="<?php echo date('Y-m-d') ?>">
                            </div>
                            <div class="col-2">
                                <label>End Date</label>
                                <input type="date" name="end_date" class="form-control">
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-outline-primary mx-3 mt-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                                    <th>Phone</th>
                                    <th>By</th>
                                    <th>Date</th>
                                    <th>Done By</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $data)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{$data->name_of_cordinator}}</td>
                                    <td>{{$data->phone}}</td>
                                    <td>
                                        {{$data->followupby}}
                                        @if($data->path!='')
                                        <a href="{{ asset('images/followup')}}/{{$data->path}}" download="{{$data->path}}"><i class="fa fa-download"></i></a>
                                        @endif

                                    </td>
                                    <td>{{$data->next_followup_date}}</td>
                                    <td>{{$data->getCreatedUser->name}}</td>
                                    <td>{{$data->description}}</td>
                                    <td><button class="dropdown-item" onclick="updatePlanner(<?php echo $data->id; ?>)"><i class="fa fa-recycle"></i></button></td>
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
        function updatePlanner(id) {
            $(".modal-body #pid").val(id);
            $('#plannermodal').modal('show');
        }
    </script>
    <div id="plannermodal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Planner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{route('update_planner')}}">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="followup_id" id="pid" value="">
                        <input type="hidden" name="type" value="Activity">
                        <div class="form-group row">
                            <div class="col-lg-12 col-md-12 mb-2">
                                <label for="followupDate" class="form-label">Followup Date<sup>*</sup></label>
                                <?php
                                $today = date('Y-m-d H:m');
                                $mindate = date('Y-m-d H:m', strtotime('-2 day', strtotime($today)))
                                ?>
                                <input type="datetime-local" name="followup_date" id="followupDate" min="<?php echo $mindate ?>" max="<?php echo $today; ?>" class="form-control" required>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-2">
                                <label for="followup-by" class="form-label">Followup By<sup>*</sup></label>
                                <select id="formrow-inputState" name="followupby" class="form-select ">
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
                                    <textarea placeholder="description" name="description" class="form-control" spellcheck="false" data-ms-editor="true"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    @endsection