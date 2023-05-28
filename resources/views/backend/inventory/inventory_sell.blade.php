@include('layouts.backendmaster')

        <div id="content-wrapper">
          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active">Product Inventory</li>
            </ol>
            <!-- Page Content -->
            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header bg-primary text-white">
                <i class="fa fa-table"></i>
                 Inventory List
                <a href="{{route('inventory.list')}}" class="text-white">
                  <span class="float-right">
                    <i class="fa fa-list"></i>
                   Inventory List
                  </span>
                </a>
              </div>

              <h4>Product Creation Date: <b class="badge">{{$inventoryProduct->created_at->format('d-m-Y')}}</b></h4>
              <!-- Button trigger modal -->
          </div>
          <div class="mb-3">
            @if (session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif

            <form action="{{route('inventory.store')}}" method="POST" class="w-75 mx-auto">
                @csrf
              <div class="form-group">
                <label for="exampleInputName1">Inventory Product Invoice</label>
                <input type="text" class="form-control" id="exampleInputName1" name="inventory_product_invoice" value="{{$inventoryProduct->product_invoice}}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Inventorty Product Name</label>
                <input type="text" class="form-control" id="exampleInputName1" name="inventory_product_name" value="{{$inventoryProduct->product_name}}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">InventoryProduct Brand</label>
                <input type="text" class="form-control" id="exampleInputName1" name="inventory_brand_name" value="{{$inventoryProduct->relationToBrand->brand_name}}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Inventory Product Type</label>
                <input type="text" class="form-control" id="exampleInputName1" name="inventory_product_type" value="{{$inventoryProduct->relationToProductType->product_type}}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Inventory Product Price</label>
                <input type="number" class="form-control" id="exampleInputName1" name="inventory_product_price" value="{{$inventoryProduct->product_price}}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Inventory Product Quantity</label>
                <input type="number" class="form-control" id="exampleInputName1" name="inventory_product_quantity" value="{{$inventoryProduct->product_quantity}}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Sell Product Input</label>
                <input type="number" class="form-control" id="exampleInputName1" name="inventory_product_sell_quantity">
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


      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/jquery.dataTables.js"></script>
      <script src="js/dataTables.bootstrap4.js"></script>
      <script src="js/datatables-demo.js"></script>
      <script src="js/rc-pos.min.js"></script>
    </body>
  </html>



