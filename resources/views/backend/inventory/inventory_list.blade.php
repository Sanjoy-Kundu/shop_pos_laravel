@include('layouts.backendmaster')
<div id="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Inventory Reports</li>
      </ol>
      <!-- Page Content -->
      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header bg-primary text-white">
          <i class="fa fa-table"></i>
          Inventory Records
          <a href="#" class="text-white" data-toggle="modal" data-target="#addProductModal">
            <span class="float-right">
              <i class="fa fa-plus"></i>
              Add New Products
            </span>
          </a>
        </div>
        <div class="card-body">
            {{-- {{$products}} --}}
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Invoice</th>
                  <th>Product Nmae</th>
                  <th>Product Brand</th>
                  <th>Quantity</th>
                  <th>Product Price</th>
                  <th>Cost/item</th>
                  <th>Creation Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$product->product_invoice}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->relationToBrand->brand_name}}</td>
                    <td class="text-danger">{{$product->product_quantity}}</td>
                    <td>{{$product->product_quantity * $product->product_price }}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->created_at->format('d-M-Y')}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary"><a href="{{url('inventory/report/pdf')}}/{{$product->id}}"class="text-white" style="text-decoration:none">Details</a></button>
                            <button type="button" class="btn btn-danger"><a href="{{url('inventory/report/delete')}}/{{$product->id}}" class="text-white" style="text-decoration:none" id="">Delete</a></button>

                          </div>
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">
            <button type="button" class="btn btn-info"><a href='{{route("inventory.delete.list")}}'class="text-white" style="text-decoration:none" id="">All Delete Inventories</a></button></div>
      </div>

      <p class="small text-center text-muted my-5">
        <em>More table examples coming soon...</em>
      </p>

    </div>




<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.easing.min.js"></script>
<script src="{{asset('assets')}}/js/chart.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.dataTables.js"></script>
<script src="{{asset('assets')}}/js/dataTables.bootstrap4.js"></script>
<script src="{{asset('assets')}}/js/rc-pos.min.js"></script>
<script src="{{asset('assets')}}/js/datatables-demo.js"></script>
<script src="{{asset('assets')}}/js/chart-area-demo.js"></script>

</body>
</html>
