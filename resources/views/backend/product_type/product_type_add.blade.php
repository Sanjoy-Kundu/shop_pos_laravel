@include('layouts.backendmaster')

        <div id="content-wrapper">
          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active">Product Type</li>
            </ol>
            <!-- Page Content -->
            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header bg-primary text-white">
                <i class="fa fa-table"></i>
                 Add New Product Type
              <a href="{{route('product.type.lists')}}" class="text-white">
                  <span class="float-right">
                    <i class="fa fa-list"></i>
                    Proruct Type Lists
                  </span>
                </a>
              </div>
              <!-- Button trigger modal -->
          </div>
          <div class="mb-3">
            @if (session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif

            <form action="{{route('product.type.upload')}}" method="POST">
                @csrf
              <div class="form-group">
                <label for="exampleInputName1">Product Type</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter  your brand name" name="product_type">
                @error('product_type')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Product Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="product_description"></textarea>
                @error('product_description')
                <span class="text-danger">{{$message}}</span>
            @enderror
              </div>
              <button type="submit" class="btn btn-primary">Add Product Type</button>
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


      {{-- <script src="{{asset('assets')}}/{{asset('assets')}}/js"></script> --}}
      <script src="{{asset('assets')}}/jsjquery.min.js"></script>
      <script src="{{asset('assets')}}/jsbootstrap.bundle.min.js"></script>
      <script src="{{asset('assets')}}/jsjquery.easing.min.js"></script>
      <script src="{{asset('assets')}}/jsjquery.dataTables.js"></script>
      <script src="{{asset('assets')}}/jsdataTables.bootstrap4.js"></script>
      <script src="{{asset('assets')}}/jsdatatables-demo.js"></script>
      <script src="{{asset('assets')}}/jsrc-pos.min.js"></script>
    </body>
  </html>

