@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">


            <div class="row" style="justify-content:center;">
                <div class="col-12 col-lg-10">
                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto ms-auto text-end mt-n1">
                            <a href="{{ url('/home') }}" class="btn btn-primary mb-4">Show Leads List</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <table class="table table-bordered" style="width:100%; background: #ffff;
                            box-shadow: 0px 0px 5px #00000026;">
                                <tbody>
<tr>
    <td class="w-100">
 <a href="tel:{{ $product->mobile }}"><i class="align-middle me-2 fas fa-fw fa-headphones"></i>Call Now</a>
    </td>
</tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-9">
                            <table class="table table-bordered" style="width:100%; background: #ffff;
                            box-shadow: 0px 0px 5px #00000026;">
                                <tbody>

                                    <tr>
                                        <td class="fw-bold">Ref. Code<br></td>
                                        <td>#{{ $product->id }}<br></td>
                                    </tr>


                                    <tr>
                                        <td class="fw-bold">Full Name<br></td>
                                        <td>{{ $product->name }}<br></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Contact #<br></td>
                                        <td>{{ $product->mobile }}<br></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Email<br></td>
                                        <td>{{ $product->email }}<br></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Language<br></td>
                                        <td>{{ $product->language }}<br></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Country Name<br></td>
                                        <td>{{ $product->countryName }}<br></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">City<br></td>
                                        <td>{{ $product->cityName }}<br></td>
                                    </tr>


                                    <form action="{{ url('bdm/' . $product->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                    <tr>
                                        <td class="fw-bold">Status</td>
                                        <td>

                                                <div class="">
                                                    @if ($product->comments)
                                                        @foreach ($product->comments as $product)
                                                        @endforeach
                                                    @else
                                                    @endif
                                                </div>

                                                {{-- <input type="text" name="status" class="form-control" value="{{ $product->status }}"> --}}
                                                <select class="form-select" name="status"
                                                    aria-label="Default select example" required>
                                                    <option selected hidden>Salect Status</option>
                                                    <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>
                                                        Pending/Open </option>
                                                    <option value="2" {{ $product->status == 2 ? 'selected' : '' }}>
                                                        Follow-up </option>
                                                    <option value="3" {{ $product->status == 3 ? 'selected' : '' }}>
                                                        Closed </option>
                                                    <option value="4" {{ $product->status == 4 ? 'selected' : '' }}>
                                                        Admission</option>
                                                </select>


                                            <br>
                                        </td>
                                    </tr>
                                  <tr>
                                 <td class="fw-bold">Description </td>
                                  <td>
                                <textarea class="form-control" name="comment" placeholder="Description" rows="3" required>{{ $product->comment }}</textarea>
                            </td>
                                 </tr>

                                    <tr>
                                        <td><br></td>
                                        <td>
                                         <button class="btn bg-white fw-bold border-1 border" style="border-radius: 16px;" type="submit">Update Status</button>
                                        </td>
                                    </tr>
                                </form>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </main>
@endsection

@section('scripts')
    {{-- <script>
    $(document).ready(function(){
        alert('hello');
    });
</script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}

    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '.updateProductColorBtn', function() {

                var product_id = "{{ $product->id }}";
                var prod_color_id = $(this).val();
                var qty = $(this).closest('.prod-color-tr').find('.productColorQuantity').val();
                //alert(prod_color_id);
                if (qty <= 0) {
                    alert('Quantity is required');
                    return false;
                }

                var data = {
                    'product_id': product_id,
                    'qty': qty
                };
                //   'prod_color_id':prod_color_id,

                $.ajax({
                    type: "POST",
                    url: "/admin/product-color/" + prod_color_id,
                    data: data,
                    success: function(response) {
                        alert(response.message);
                    }
                });

            });
            // qty delete
            $(document).on('click', '.deleteProductColorBtn', function() {
                var prod_color_id = $(this).val();
                var thisClick = $(this);

                $.ajax({
                    type: "GET",
                    url: "/admin/product-color/" + prod_color_id + "/delete",
                    success: function(response) {
                        thisClick.closest('.prod-color-tr').remove();
                        alert(response.message);
                    }
                });


            });
        });
    </script>
@endsection
