@include('layouts.backendmaster')
        <div id="content-wrapper">
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
            <!-- Page Content -->
            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header bg-primary text-white">
                <h3><i class="fa fa-table"></i>
                Products <sup>{{count($products)}}</sup></h3>
                <a href="{{route('product.add.product')}}" class="text-white">
                  <span class="float-right">
                    <i class="fa fa-plus"></i>
                    Add New Product
                  </span>
                </a>
              </div>
              <div class="card-body">

                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Serial No</th>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Brand</th>
                        <th>Product Qyantity</th>
                        <th>Product Per Price</th>
                        <th>Amount</th>
                        <th>Product Desciption</th>
                        <th>Creation Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->relationToProductType->product_type}}</td>
                            <td>{{$product->relationToBrand->brand_name}}</td>
                            <td>{{$product->product_quantity}}</td>
                            <td>{{$product->product_price}}</td>
                            <td>{{$product->product_price * $product->product_quantity}}</td>
                            <td>{{$product->product_description}}</td>
                            <td>{{$product->created_at->format('d-m-Y')}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary"><a href="{{url('product/edit')}}/{{$product->id}}" class="text-white" style="text-decoration:none">EDIT</a></button>
                                    <button type="button" class="btn btn-danger"><a href="" class="text-white" style="text-decoration:none">DELETE</a></button>
                                    <button type="button" class="btn btn-warning"><a href="" class="text-white" style="text-decoration:none">PDF Download</a></button>
                                  </div>
                            </td>
                          </tr>
                        @empty

                        @endforelse


                    </tbody>
                  </table>
                </div>
              </div>

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



      <script src="{{asset('assets')}}//js/jquery.min.js"></script>
      <script src="{{asset('assets')}}//js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('assets')}}//js/jquery.easing.min.js"></script>
      <script src="{{asset('assets')}}//js/jquery.dataTables.js"></script>
      <script src="{{asset('assets')}}//js/dataTables.bootstrap4.js"></script>
      <script src="{{asset('assets')}}//js/datatables-demo.js"></script>
      <script src="{{asset('assets')}}//js/rc-pos.min.js"></script>
    </body>
  </html>
