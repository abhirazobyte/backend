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
                                    <th width="5%">S.No</th>
                                    <th width="15%">Name</th>
                                    <th width="15%">Email</th>
                                    <th width="15%">Mobile</th>
                                    <!--<th width="15%">Subject</th>-->
                                    <!--<th width="5%">Website</th>-->
                                    <th width="20%">language</th>
                                     <th width="10%">Date</th>
                                     <th width="20%">Message</th>
                                     <th width="20%">countryName</th>
                                     <th width="20%">regionName</th>
                                     <th width="20%">cityName</th>
                                     <th width="20%">zipCode</th>
                                     <th width="10%">currenturl</th>
                                     <!--<th width="10%">Action</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $key => $data)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->mobile}}</td>
                                        <!--<td>{{$data->subject}}</td>-->

                                        <!--@if(!empty($data->website))-->

                                        <!--    <td style="color: #0356fc;"><a href="{{$data->website}}" target="_blank">Visit</a></td>-->

                                        <!--@else-->
                                        <!--      <td>NA</td>-->
                                        <!--@endif-->

                                      
                                       
                                    
                                          <td>{{$data->language}}</td>
                                          <td style="width: 15%;">{{ date('d-m-Y, H:i',strtotime($data->created_at)) }}</td>
                                            <td>
                                      {{$data->message}}
                                        </td>
                                   
                                          
                                          <td>{{$data->countryName}}</td>
                                          <td>{{$data->regionName}}</td>
                                          <td>{{$data->cityName}}</td>
                                          <td>{{$data->zipCode}}</td>

                                        
                                         <td>{{$data->currenturl}}</td>
                                         
                                          
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
        $(document).ready(function() {
    $('#datatables-multi').DataTable( {
        "lengthMenu": [[50, 100, 200, -1], [50, 100, 200, "All"]],
        "responsive": true,
    } );
} );
    </script>

    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     // Datatables with Multiselect
        //     var datatablesMulti = $("#datatables-multi").DataTable({
        //         responsive: true,
        //         select: {
        //             style: "multi"
        //         }
        //     });
        // });
    </script>

    <script>
        // document.addEventListener("DOMContentLoaded", function(event) {
        //     setTimeout(function() {
        //         if (localStorage.getItem('popState') !== 'shown') {
        //             window.notyf.open({
        //                 type: "success",
        //                 message: "Get access to all 500+ components and 45+ pages with AdminKit PRO. <u><a class=\"text-white\" href=\"https://adminkit.io/pricing\" target=\"_blank\">More info</a></u> 🚀",
        //                 duration: 10000,
        //                 ripple: true,
        //                 dismissible: false,
        //                 position: {
        //                     x: "left",
        //                     y: "bottom"
        //                 }
        //             });

        //             localStorage.setItem('popState', 'shown');
        //         }
        //     }, 15000);
        // });
    </script>


@endsection
