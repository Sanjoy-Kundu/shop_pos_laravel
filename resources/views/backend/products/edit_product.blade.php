@include('layouts.backendmaster')

        <div id="content-wrapper">
          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
            <!-- Page Content -->
            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header bg-primary text-white">
                <i class="fa fa-table"></i>
            Add Product <small><sup><b style="font-size: 20px"></b></sup></small>
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
                {{-- {{$productTypes}}
                @foreach ($productTypes as $productType)
                    <ul>
                      <li>  {{$productType->id}}</li>
                        <li>{{$productType->product_type}}</li>
                    </ul>
                @endforeach --}}


                <form class="" method="post" action="{{url('product/update')}}/{{$product->id}}">
                    @csrf

                      <div class="form-group">
                        <label>Product Type</label>
                        <select class="form-control text-primary" name="update_product_type_id">
                          <option value="{{$product->product_type_id}}">{{$product->relationToProductType->product_type}}</option>
                          @foreach ($productTypes as $productType)
                            <option value="{{$productType->id}}">{{$productType->product_type}}</option>
                          @endforeach
                        </select>
                        @error('product_type_id')
                            <b class="text-danger">{{$message}}</b>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label>Product Brand</label>
                        <select class="form-control text-primary" name="update_product_brand_id">
                          <option value="{{$product->product_brand_id}}">{{$product->relationToBrand->brand_name}}</option>
                          @foreach ($brands as $brand )
                          <option value=" {{$brand->id}}">{{$brand->brand_name}}</option>
                          @endforeach
                        </select>
                        @error('product_brand_id')
                        <b class="text-danger">{{$message}}</b>
                    @enderror
                      </div>
                      <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" class="form-control" name="update_product_name" value="{{$product->product_name}}" >

                      </div>
                      <div class="form-group">
                        <label for="">Product Price <small class="text-muted">(cost/item)</small> </label>
                        <input type="number" class="form-control" name="update_product_price" value="{{$product->product_price}}">

                      </div>
                      <div class="form-group">
                        <label for="">Product Stock/Quantity <small>(How many products are you adding in stock?)</small> </label>
                        <input type="number" class="form-control" name="update_product_quantity" value="{{$product->product_quantity}}" >
                      </div>

                      <br>
                      <div class="form-group">
                        <label for="">Description <small class="text-muted">(Optional)</small></label>
                        <textarea name="update_product_description" class="form-control" cols="180">{{$product->product_description}}</textarea>
                      </div>
                    <div class="">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <input type="submit" class="btn btn-primary" value="Update Product">
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
    </body>
  </html>
