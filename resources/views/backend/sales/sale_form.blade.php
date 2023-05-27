@include('layouts.backendmaster')
<div id="content-wrapper">
    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Sell Your  Product</li>
      </ol>
      <!-- Page Content -->
      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header bg-primary text-white">
          <i class="fa fa-table"></i>
      Sell Your Product <small><sup><b style="font-size: 20px"></b></sup></small>
          <a href="{{route('product.list')}}" class="text-white">
            <span class="float-right">
              <i class="fa fa-plus"></i>
              Products Lists
            </span>
          </a>
        </div>
        <!-- Button trigger modal -->

        <div class="card-body">
          @if (session('success'))
              <div class="alert alert-success">{{session('success')}}</div>
          @endif

            {{-- <div class="product_details">
                <p id="avail_product">My product</p>
            </div> --}}

          <form class="" method="post" action="">
              @csrf
                <div class="form-group">
                    {{-- <button id="product_type">Prouduct type</button> --}}
                  <label>Product Type</label>
                  <select class="form-control text-primary" name="product_type_id" id="product_type">
                    <option disabled selected><sub>Please select a product type</sub></option>
                    @forelse ($productTypes as $productType)
                      <option value="{{$productType->id}}">{{$productType->product_type}}</option>
                    @empty
                    @endforelse
                  </select>
                  @error('product_type_id')
                      <b class="text-danger">{{$message}}</b>
                  @enderror

                </div>
                <div class="form-group">

                  <label>Product Brand</label>
                  <select class="form-control text-primary" name="product_brand_id" id="brand_dropdown">
                    <option disabled selected><sub>Please select a product brand</sub></option>

                    {{-- @forelse ($brands as $brand)
                    <option value=" {{$brand->id}}">{{$brand->brand_name}}</option>
                    @empty
                    <option>Please Upload Your Brand First</option>
                    @endforelse --}}
                  </select>
                  @error('product_brand_id')
                  <b class="text-danger">{{$message}}</b>
              @enderror

                </div>
                {{-- <div class="form-group">
                  <label>Product Vendor</label>
                  <select class="form-control text-primary" required>
                    <option disabled selected><sub>Please select a product vendor</sub></option>
                    <option>Haider Abbas</option>
                    <option>Muhammad Faisal</option>
                    <option>Nouman Aslam</option>
                    <option>Anees Ahmad Khan</option>
                    <option>Waleed Ahmad</option>
                    <option>Abdul Wahid</option>
                  </select>
                  <small class="float-right">Product vendor not listed here? <a href="#"data-toggle="modal" data-target="#addProductVendorModal">Add new</a> </small>
                </div> --}}
                <div class="form-group">
                    <label>Product Name</label>
                    <select class="form-control text-primary" name="product_name" id="product_name_dropdown">
                      <option disabled selected><sub>Please select a product name</sub></option>

                      {{-- @forelse ($brands as $brand)
                      <option value=" {{$brand->id}}">{{$brand->brand_name}}</option>
                      @empty
                      <option>Please Upload Your Brand First</option>
                      @endforelse --}}
                    </select>
                    @error('product_name')
                    <b class="text-danger">{{$message}}</b>
                @enderror
                  {{-- <label for="">Product Name</label>
                  <input type="text" class="form-control" name="product_name" value="" placeholder="Enter product name...">
                  @error('product_name')
                  <b class="text-danger">{{$message}}</b>
              @enderror --}}
                </div>
                <div class="form-group">
                  <label for="">Product Price <small class="text-muted">(cost/item)</small> </label>
                  <input type="number" class="form-control" name="product_price" value="" placeholder="Enter cost of product per item...">
                  @error('product_price')
                  <b class="text-danger">{{$message}}</b>
              @enderror
                </div>
                <div class="form-group">
                  <label for="">Product Stock/Quantity <small>(How many products are you adding in stock?)</small> </label>
                  <input type="number" class="form-control" name="product_quantity" value="" placeholder="Enter number of items...">
                  @error('product_quantity')
                  <b class="text-danger">{{$message}}</b>
              @enderror
                </div>
                {{-- How are you paying for this product?
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    Store Account
                  </label>
                </div> --}}
                {{-- <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    Other. I don't want to record this epxense.
                  </label>
                </div> --}}
                <br>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="product_description" class="form-control" cols="180" placeholder="Add some note or description about this product..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>

              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Product">
              </div>
            </form>

        </div>
      </div>
      <br> <br>


    </div>
    <br><br><br>
    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto ">
          <br><br><br>
          <small class="text-muted">
            You're using  v1.0 of this software. <a href="#"> <i class="fa fa-external-link"></i> Check for Updates</a>. In order to report a bug, please create an issue <a href="https://github.com/vruqa/rc-pos/issues">here.</a>
            <br><br><br>
            <a href="#">Legal</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="#">Advertisements</a>
          </small>
          <br><br><br>
          <span>Copyright &copy; 2013-2018 <a href="#">Blackrock Digital, LLC.</a>, 2018 <a href="https://vruqa.github.io">Vruqa Designs</a>, 2018 <a href="https://appzaib.github.io">Appzaib</a>. All rights reserved.</span>
          <br><br><br>
        </div>
      </div>
    </footer>
  </div>
</div>




<!-- Add Expense Account Modal -->
<div class="modal fade" id="addExpenseAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel">
          <i class="fa fa-dollar"></i>
          Add Expense Account
        </h5>
        <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form class="">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Account Title</label>
            <input type="text" class="form-control" name="" value="" placeholder="Enter account title here..." required>
            <small class="text-muted">Example: Akhtar Hotel, Mian Tea Stall or My Personal Account etc</small>
          </div>
          <div class="form-group">
            <label for="">How much are you depositing?</label>
            <input type="email" class="form-control" name="" value="" placeholder="Enter the amount you are despositing...">
          </div>
          <div class="form-group">
            <label for="">Description <small class="text-muted">(Optional)</small></label>
            <textarea name="name" class="form-control" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
          </div>
          <small class="text-muted"><em>Please double check information before submitting.</em></small>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input type="submit" class="btn btn-primary" value="Add Account">
        </div>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('assets')}}//js/jquery.min.js"></script>
<script src="{{asset('assets')}}//js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}//js/jquery.easing.min.js"></script>
<script src="{{asset('assets')}}//js/jquery.dataTables.js"></script>
<script src="{{asset('assets')}}//js/dataTables.bootstrap4.js"></script>
<script src="{{asset('assets')}}//js/datatables-demo.js"></script>
<script src="{{asset('assets')}}//js/rc-pos.min.js"></script>
<script>
//  $(document).ready(function(){
//     $('#product_type').click(function(){
//         alert('ghello');
//     });
//  });

$(document).ready(function(){
    $('#product_type').change(function(){
       // alert("hello Bangladesh");
        var productTypeId = $(this).val();

       // alert(productTypeId);
 // =============ajax start=============
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    //type: 'get', first
                    type: 'post',
                    url: '/get/product/details',
                    data:{productTypeIdName : productTypeId},
                    success: function(data){
                       //alert(data);
                        $('#brand_dropdown').html(data);
                    }
                })
 //  ================== ajax end=========
    });
});



//product brand


</script>
</body>
</html>
