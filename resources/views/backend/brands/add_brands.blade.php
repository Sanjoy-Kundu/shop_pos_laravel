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

            <form action="{{route('brand.upload')}}" method="POST">
                @csrf
              <div class="form-group">
                <label for="exampleInputName1">Product Brand</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter  your brand name" name="brand_name">
                @error('brand_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="brand_description"></textarea>
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

      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/jquery.dataTables.js"></script>
      <script src="js/dataTables.bootstrap4.js"></script>
      <script src="js/datatables-demo.js"></script>
      <script src="js/rc-pos.min.js"></script>
    </body>
  </html>



