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


                <div class="mb-3 col-md-3">
                 
                     <select class="form-control" name="user_id" required>
                         <option value="">Assigned  To</option>
                       @foreach ($user as $trainer)
                       <option value="{{ $trainer->id }}">
                            {{ $trainer->name}}
                        </option>
                        @endforeach
                        </select>
                         </div>
                    <div class="mb-3 col-md-3">      
                          <button type="submit" class="btn btn-primary">Assigned</button>
                    </div>
                <div class="col-auto ms-auto text-end mt-n1">
                   {{ $leads->appends(request()->input())->links() }}
                </div>
            </div>
            
<!--<nav aria-label="Page navigation example">-->
<!--  {!! $leads->links() !!}-->
<!--</nav>-->

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
                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="datatables-reponsive" rowspan="1" colspan="1"
                                                        style="width: 148px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                    Select
                                                    </th>


                                                    <!--<th>  S.No</th>-->
                                                
                                                  
                                                       <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="datatables-reponsive" rowspan="1" colspan="1"
                                                        style="width: 148px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        Assigned
                                                    </th>
                                                   <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="datatables-reponsive" rowspan="1" colspan="1"
                                                        style="width: 148px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                      Ref.id
                                                    </th>
                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="datatables-reponsive" rowspan="1" colspan="1"
                                                        style="width: 148px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        name
                                                    </th>
                                                      <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="datatables-reponsive" rowspan="1" colspan="1"
                                                        style="width: 148px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        email
                                                    </th>
                                                      <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="datatables-reponsive" rowspan="1" colspan="1"
                                                        style="width: 148px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        mobile
                                                    </th>
                                                   
                                                      <th class="sorting" tabindex="0" aria-controls="datatables-reponsive"
                                                        rowspan="1" colspan="1" style="width: 224px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        language
                                                      </th>
                                                  
                                                     <th class="sorting" tabindex="0" aria-controls="datatables-reponsive"
                                                        rowspan="1" colspan="1" style="width: 224px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        Country Name
                                                      </th>
                                                      
                                                  
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-reponsive"
                                                        rowspan="1" colspan="1" style="width: 224px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        Date
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($leads as $key => $product)
                                                    
                                                    
                                                    <tr class="odd">
                                                        <td>
                                                             <label>
                                                             <input type="checkbox" name="id[]"  value="{{ $product->id }}">
                                                             Select 
                                                             </label>
                                                           </td>  
                                                           
                                                           <td>  
                                                           @if ($product->user)
                                                             {{ $product->user->name}}
                                                             @endif
                                                             </td>
                                                        <!--<td>{{ $key + 1 }}</td>-->
                                                        <td>{{ $product->id }}</td>
                                                        <td>{{ $product->name }}</td>
                                                        <td>{{ $product->email }}

                                                        </td>
                                                        <td class="dtr-control sorting_1" tabindex="0">
                                                            {{ $product->mobile }}
                                                        </td>
                                                        <td>{{ $product->language }}</td>
                                                         <td>{{ $product->countryName }}</td>
                                                        <td>{{ $product->created_at }}</td>
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
