@extends('layouts.app')
@section('sidebar')
@include('layouts.inc.sidebar')
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <form action="{{ url('admin/bdm/create') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="row mb-2 mb-xl-3">
                <!--<div class="col-auto d-none d-sm-block">-->
                <!--    <h3>  <strong>Select Bdm Members</strong>   </h3>-->
                <!--</div>-->
            </div>
            

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if (session('message'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                    <div class="alert-message">
                                        <strong> {{ session('message') }}</strong>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div id="datatables-reponsive_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <table id="datatables-reponsive"
                                            class="table table-striped dataTable no-footer dtr-inline" style="width: 100%;"
                                            aria-describedby="datatables-reponsive_info">
                                            <thead>
                                                <tr>
                                                
                                                    <th>  S.No</th>
                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="datatables-reponsive" rowspan="1" colspan="1"
                                                        style="width: 148px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                      Ref.Code
                                                    </th>
                                                  
                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="datatables-reponsive" rowspan="1" colspan="1"
                                                        style="width: 148px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        Name
                                                    </th>
                                                      <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="datatables-reponsive" rowspan="1" colspan="1"
                                                        style="width: 148px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        Email
                                                    </th>
                                                      <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="datatables-reponsive" rowspan="1" colspan="1"
                                                        style="width: 148px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        Mobile
                                                    </th>
                                                   
                                                      <th class="sorting" tabindex="0" aria-controls="datatables-reponsive"
                                                        rowspan="1" colspan="1" style="width: 224px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        Language
                                                      </th>
                                                  
                                                     <th class="sorting" tabindex="0" aria-controls="datatables-reponsive"
                                                        rowspan="1" colspan="1" style="width: 224px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        Country
                                                      </th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables-reponsive"
                                                        rowspan="1" colspan="1" style="width: 224px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                       City
                                                      </th>
                                                  
                                                      <th class="sorting" tabindex="0" aria-controls="datatables-reponsive"
                                                        rowspan="1" colspan="1" style="width: 224px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        Status
                                                  </th>
                                                            <th class="sorting" tabindex="0" aria-controls="datatables-reponsive"
                                                        rowspan="1" colspan="1" style="width: 224px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        Description
                                                  </th>
                                                     <th class="sorting" tabindex="0" aria-controls="datatables-reponsive"
                                                        rowspan="1" colspan="1" style="width: 224px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        Date
                                                  </th>
                                                  
                                          
                                                  
                                                  
                                                     <th class="sorting" tabindex="0" aria-controls="datatables-reponsive"
                                                        rowspan="1" colspan="1" style="width: 224px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        Action                               
                                                </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($category as $key => $product)
                                            
                                                     <tr class="odd">
                                              
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $product->id }}</td>
                                                        <td>{{ $product->name }}</td>
                                                        <td> <a href="mailto:{{$product->email}}"><i class="fa fa-envelope"></i> {{$product->email}}</a>
                                                        </td>
                                                        <td class="dtr-control sorting_1" tabindex="0">
                                                           <a href="tel:{{$product->mobile}}"><i class="fa fa-mobile"></i> {{$product->mobile}}</a> 
                                                        </td>
                                                        <td>{{ $product->language }}</td>
                                                         <td>{{ $product->countryName }}</td>
                                                          <td>{{ $product->cityName }}</td>
                                                                     <td>
                                                    @if ($product->test)    
                                                     <span class="p-1 fw-bold text-white bg-{{ $product->test->status == '1' ? 'primary' : '' }}{{ $product->test->status == '4' ? 'info' : '' }}{{ $product->test->status == '3' ? 'danger' : '' }}{{ $product->test->status == '2' ? 'warning' : '' }} text-{{ $product->test->status == '3' ? 'dark' : '' }}{{ $product->test->status == '4' ? 'dark' : '' }}" style="border-radius: 10px; font-size:12px;">
                                                    {{ $product->test->status == '1' ? 'Pending/Open' : '' }}
                                                    {{ $product->test->status == '2' ? 'Follow-up' : ''}}
                                                    {{ $product->test->status == '3' ? 'Closed' : ''}}
                                                    {{ $product->test->status == '4' ? 'Admission' : ''}}
                                                    </span> 
                                                     @else
                                                     <span  class="p-1 bg-success  text-white" style="border-radius: 10px; font-size:12px;">New
                                                    </span>
                                                      @endif
                                                        </td>
                                                <td>
                                                    @if ($product->test)
                                                     {!! Str::words($product->test->comment, 8, ' ..') !!}
                                                      @endif
                                                </td>        
                                                   <td>{{ $product->created_at->format('d-m-y') }}</td>
                                                
                                                   <td>
                                                        <div class="row g-0">
                                                            <div class="col-6">
                                                            <a href="{{ url('admin/bdm/'.$product->id .'/edit') }}" class="btn bg-light" style="color:#3b7ddd;">
                                                                <i class="align-middle me-2 far fa-fw fa-eye"></i>
                                                               </a>
                                                            </div>
                                                        </div>
                                                        </td>
                                                      
                                                    </tr>
                                                @empty
                                                    <tr class="odd">
                                                        <td valign="top" colspan="8" class="dataTables_empty">No
                                                            data available in table
                                                        </td>
                                                    </tr>
                                                @endforelse


                                            </tbody>
                                        </table>
                                    
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        </div>
    </main>
@endsection


