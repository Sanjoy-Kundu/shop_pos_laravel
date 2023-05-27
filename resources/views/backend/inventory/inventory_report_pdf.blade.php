
@include('layouts.backendmaster')
<div class="container">
    <div class="invoice">
      <div class="row">
        <div class="col-7">
          {{-- <img src="https://s3.eu-central-1.amazonaws.com/zl-clients-sharings/90Tech.png" class="logo"> --}}
          <h1 class="text-primary">My <span class="text-danger">Computer</span></h1>
        </div>

      </div>
      <div class="row">
        <div class="col-7">
          <p>
            <strong>My Computer Shop</strong><br>
            12/10 Prosonno Podder len<br>
            BANGLABAZAR DHAKA
          </p>
        </div>
        <div class="col-5">
          <br><br><br>
          <p>
            <strong>Product Invoice</strong><br>
           Today Date: <em>{{date('d-M-Y')}}</em><br>
            Time: {{date('g:i a')}}<br>
            Invoices: <b>{{$all_products->product_invoice}}</b>
          </p>
        </div>
      </div>
      <br>
      <br>
      <h6>Product Creation Date: <b> ({{$all_products->created_at->format('d-M-Y')}})</b></h6>
      <br>
      <table class="table table-striped border-1">
        <tr>
          <th>Product Uploaded Date & Time</th>
          <td>{{$all_products->created_at->format('d-M-Y')}}</td>
        </tr>
          <tr>
            <th>Product Name</th>
            <td>{{$all_products->product_name}}</td>
          </tr>
          <tr>
            <th>Product Brand</th>
            <td>{{$all_products->relationToBrand->brand_name}}</td>
          </tr>
          <tr>
            <th>Product Type</th>
            <td>{{$all_products->relationToProductType->product_type}}</td>
          </tr>
          <tr>
            <th>Product Quantity</th>
            <td>{{$all_products->product_quantity}}</td>
          </tr>
          <tr>
            <th>Prouct per Price</th>
            <td>{{$all_products->product_price}}BDT.</td>
          </tr>
          <tr>
            <th>Total Amount</th>
            <td class="ms-4">{{$all_products->product_quantity * $all_products->product_price}}BDT.</td>
          </tr>
          <tr>
            <th>Action</th>
            <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-info">
                            <a href="{{route('inventory.pdf', $all_products->id)}}" class="text-white" style="text-decoration:none">Download PDF</a>
                        </button>
                        <button type="button" class="btn btn-warning" id="print_inventory"><a href="" class="text-white" style="text-decoration:none">PRINT</a></button>
                      </div>
            </td>
          </tr>
          {{-- <tr>
            <th>Product Name</th>
            <th>Product Brand</th>
            <th>Product Type</th>
            <th>Product Quantity</th>
            <th>Prouct per Price</th>
            <th>Total Amount</th>
          </tr> --}}


          {{-- <tr>
            <td>{{$all_products->product_name}}</td>
            <td>{{$productBrand->brand_name}}</td>
            <td>{{$productType->product_type}}</td>
            <td>{{$all_products->product_quantity}}</td>
            <td>{{$all_products->product_price}}(BDT.)</td>
            <td class="text-right">{{$all_products->product_quantity * $all_products->product_price}}(BDT.)</td>
          </tr>

          <tr>
            <td colspan="5">Toatal Amont</td>
            <td class="ms-4">{{$all_products->product_quantity * $all_products->product_price}}</td>
          </tr> --}}
        </tbody>
      </table>
  </div>
<script>
    //let print_button = document.getElementById("print_inventory");
    document.getElementById('print_inventory').addEventListener('click', function(){
        window.print();
    })
</script>
