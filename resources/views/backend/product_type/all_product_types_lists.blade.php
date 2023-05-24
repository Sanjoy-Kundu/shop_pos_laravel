@include('layouts.backendmaster')

        <div id="content-wrapper">
          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active">Product Brands</li>
            </ol>
            <!-- Page Content -->
            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header bg-primary text-white">
                <i class="fa fa-table"></i>
                Product Brands <small><sup><b style="font-size: 20px"></b></sup></small>
                <a href="{{route('product.add.type')}}" class="text-white">
                  <span class="float-right">
                    <i class="fa fa-plus"></i>
                    Add New Product Type
                  </span>
                </a>
              </div>
              <!-- Button trigger modal -->

              <div class="card-body">
                @if (session('success'))
                <div class="alert alert-danger">{{session('success')}}</div>
                @endif
                <div class="table-responsive">
                  <table class="table table-bordered" id="product_type" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Srial No</th>
                        <th>Product Type Name</th>
                        <th>Product Type Description</th>
                        <th>Product Creation Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($product_types as $product_type)
                        <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$product_type->product_type}}</td>
                                <td>{{$product_type->product_description}}</td>
                                <td>{{$product_type->created_at->format('d-M-Y')}}</td>
                                <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-danger"><a href='{{url("product/type/delete")}}/{{$product_type->id}}' class="text-white text-decoration-none">Delete</a></button>
                                    <button type="button" class="btn btn-primary"><a href="{{url("product/type/edit")}}/{{$product_type->id}}" class="text-white" style="text-decoration:none">Edit</a></button>
                                </div>
                                </td>
                          </tr>
                        @empty

                        @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
            <br> <br>
{{-- Trashed Brands --}}
<div class="card mb-3">
    <div class="card-header bg-primary text-white">
      <i class="fa fa-table"></i>
      Recycel Bin Brands
      {{-- <a href="" class="text-white">
        <span class="float-right">
          <i class="fa fa-plus"></i>
          Trashed Brand <b class="font-size:30px;"><sup></sup></b>
        </span>
      </a> --}}
    </div>
    <br> <br>
    <!-- Button trigger modal -->

    <div class="card-body">
        @if (session('trashedsuccess'))
        <div class="alert alert-danger">{{session("trashedsuccess")}}</div>
        @endif
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Sr#</th>
              <th>Product Type Name</th>
              <th>Products Type Description</th>
              <th>Deleted Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($trashed_product_type as $trashed_product)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$trashed_product->product_type}}</td>
                <td>{{$trashed_product->product_description}}</td>
                <td>{{$trashed_product->deleted_at->format('d-m-Y')}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-danger"><a href="{{url('product/type/permanent/delete')}}/{{$trashed_product->id}}" class="text-white" style="text-decoration:none">P. Delete</a></button>
                      <button type="button" class="btn btn-primary"><a href="{{url('product/type/restore')}}/{{$trashed_product->id}}" class="text-white" style="text-decoration:none">Restore</a></button>
                    </div>
                  </td>
              </tr>
            @empty

            @endforelse

          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

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
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Modals -->
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-danger text-white">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-danger" href="login.html">Logout</a>
            </div>
          </div>
        </div>
      </div>
      {{-- <!-- Add Sale Modal-->
      <div class="modal fade" id="addSaleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-money"></i>
                Add New Sale
              </h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form class="">
              <div class="modal-body">
                <div class="form-group">
                  <label>Select Product</label>
                  <select class="form-control text-primary" required>
                    <option disabled selected><sub>Please select a product</sub></option>
                    <option disabled><sub>Speakers &amp; MICs</sub></option>
                    <option>Audionic MIC AM-20</option>
                    <option>USB Sound Card</option>
                    <option>Audionic Headphones AHT-11</option>
                    <option disabled><sub>Mice &amp; Accessories</sub></option>
                    <option>Razer Mousepad</option>
                    <option>Blue Mousepad</option>
                    <option>Apple Mouse Wireless A11</option>
                    <option>DELL Mouse Wireless D232</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option disabled><sub>Mice &amp; Accessories</sub></option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option disabled><sub>Mice &amp; Accessories</sub></option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                  </select>
                  <small class="float-right">Product not listed here? <a href="#" data-toggle="modal" data-target="#addProductModal">Add new</a> </small>
                </div>
                <div class="form-group">
                  <label for="">Product Price</label>
                  <input type="number" class="form-control" name="" value="" placeholder="Enter product price here..." required>
                </div>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this sale..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Sale">
              </div>
            </form>
          </div>
        </div>
      </div> --}}

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
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

      <script>
        $(document).ready(function() {
            $('#product_type').DataTable();
            });

      </script>
    </body>
  </html>
