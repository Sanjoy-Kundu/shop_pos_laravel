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
                 Add New Brand
                <a href="{{route('brand.lists')}}" class="text-white">
                  <span class="float-right">
                    <i class="fa fa-list"></i>
                    Brands Lists
                  </span>
                </a>
              </div>
              <!-- Button trigger modal -->
          </div>
          <div class="mb-3">
            @if (session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif

            <form action="{{url('brand/update')}}/{{$brand_info->id}}" method="POST">
                @csrf
              <div class="form-group">
                <label for="exampleInputName1">Product Brand</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter  your brand name" name="update_brand_name" value="{{$brand_info->brand_name}}">
                @error('brand_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="update_brand_description">{{$brand_info->brand_description}}</textarea>
                @error('brand_description')
                <span class="text-danger">{{$message}}</span>
            @enderror
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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
      <!-- Add Sale Modal-->
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
      </div>
      <!-- Add Product Modal-->
      <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-tag"></i>
                Add New Product
              </h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form class="">
              <div class="modal-body">
                <div class="form-group">
                  <label>Product Type</label>
                  <select class="form-control text-primary" required>
                    <option disabled selected><sub>Please select a product type</sub></option>
                    <option>Speakers</option>
                    <option>Card Readers</option>
                    <option>Headphones & MICs</option>
                    <option>Mousepads</option>
                    <option>Mice &amp; Pointing Devices</option>
                    <option>Display Monitors</option>
                    <option>Keyboards</option>
                    <option>Cables & Chargers</option>
                    <option>Power Supplies</option>
                  </select>
                  <small class="float-right">Product type not listed here? <a href="#"data-toggle="modal" data-target="#addProductTypeModal">Add new</a> </small>
                </div>
                <div class="form-group">
                  <label>Product Brand</label>
                  <select class="form-control text-primary" required>
                    <option disabled selected><sub>Please select a product brand</sub></option>
                    <option>Audionic</option>
                    <option>DELL</option>
                    <option>HP</option>
                    <option>Samsung</option>
                    <option>AMB</option>
                    <option>Nokia</option>
                    <option>Razer</option>
                    <option>MSI</option>
                  </select>
                  <small class="float-right">Products brand not listed here? <a href="#"data-toggle="modal" data-target="#addProductBrandModal">Add new</a> </small>
                </div>
                <div class="form-group">
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
                </div>
                <div class="form-group">
                  <label for="">Product Name</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter product name..." required>
                  <small class="text-muted">Be more specific with product names. Make sure its unique.</small>
                </div>
                <div class="form-group">
                  <label for="">Product Price <small class="text-muted">(cost/item)</small> </label>
                  <input type="number" class="form-control" name="" value="" placeholder="Enter cost of product per item..." required>
                </div>
                <div class="form-group">
                  <label for="">Product Stock <small>(How many products are you adding in stock?)</small> </label>
                  <input type="number" class="form-control" name="" value="" placeholder="Enter number of items..." required>
                  <small class="text-muted">This will be used as product quantity in stock keeping unit.</small>
                </div>
                How are you paying for this product?
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    Store Account
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    Other. I don't want to record this epxense.
                  </label>
                </div>
                <br>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="name" class="form-control" cols="80" placeholder="Add some note or description about this product..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Product">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Add Product Type-->
      <div class="modal fade" id="addProductTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-tags"></i>
                Add Product Type
              </h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form class="">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Product Type</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter product type..." required>
                  <small class="text-muted">Example: Mousepads, Headphones or Keyboards etc</small>
                </div>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this product type..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Product Type">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Add Product Brand-->
      <div class="modal fade" id="addProductBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-industry"></i>
                Add Product Brand
              </h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form class="">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Product Brand</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter brand name here..." required>
                  <small class="text-muted">Example: Nokia, AMB or MSI etc</small>
                </div>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Brand">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Add Product Vendor -->
      <div class="modal fade" id="addProductVendorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-user"></i>
                Add Products Vendor
              </h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form class="">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Vendor Name</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter vendor's name here..." required>
                  <small class="text-muted">Example: Anees Ahmad, Faisal Hayat or Shahzaib Khan etc</small>
                </div>
                <div class="form-group">
                  <label for="">Phone Number</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter vendor's phone number here...">
                  <small class="text-muted">Example: 555-665-123</small>
                </div>
                <div class="form-group">
                  <label for="">Email Address</label>
                  <input type="email" class="form-control" name="" value="" placeholder="Enter vendor's email here...">
                  <small class="text-muted">Example: ahmadanees02@gmail.com</small>
                </div>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Vendor">
              </div>
            </form>
          </div>
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
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/jquery.dataTables.js"></script>
      <script src="js/dataTables.bootstrap4.js"></script>
      <script src="js/datatables-demo.js"></script>
      <script src="js/rc-pos.min.js"></script>
    </body>
  </html>



