
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF DOWNLOAD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
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
           Downloading Time: {{date('g:i a')}}<br>
            Invoices: <b>{{$products->product_invoice}}</b>
          </p>
        </div>
      </div>
      <br>
      <br>
      <h6>Product Creation Date: <b> ({{$products->created_at->format('d-M-Y')}})</b></h6>
      <br>
      <table class="table table-striped border-1">
        <tr>
          <th>Product Uploaded Date & Time</th>
          <td>{{$products->created_at->format('d-M-Y')}}</td>
        </tr>
          <tr>
            <th>Product Name</th>
            <td>{{$products->product_name}}</td>
          </tr>
          <tr>
            <th>Product Brand</th>
            <td>{{$products->relationToBrand->brand_name}}</td>
          </tr>
          <tr>
            <th>Product Type</th>
            <td>{{$products->relationToProductType->product_type}}</td>
          </tr>
          <tr>
            <th>Product Quantity</th>
            <td>{{$products->product_quantity}}</td>
          </tr>
          <tr>
            <th>Prouct per Price</th>
            <td>{{$products->product_price}}BDT.</td>
          </tr>
          <tr>
            <th>Total Amount</th>
            <td class="ms-4">{{$products->product_quantity * $products->product_price}}BDT.</td>
          </tr>
          {{-- <tr>
            <th>Action</th>
            <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-info">
                            <a href="{{route('inventory.pdf', $products->id)}}" class="text-white" style="text-decoration:none">Download PDF</a>
                        </button>
                        <button type="button" class="btn btn-warning"><a href="" class="text-white" style="text-decoration:none">PRINT</a></button>
                      </div>
            </td>
          </tr> --}}
          {{-- <tr>
            <th>Product Name</th>
            <th>Product Brand</th>
            <th>Product Type</th>
            <th>Product Quantity</th>
            <th>Prouct per Price</th>
            <th>Total Amount</th>
          </tr> --}}


          {{-- <tr>
            <td>{{$products->product_name}}</td>
            <td>{{$productBrand->brand_name}}</td>
            <td>{{$productType->product_type}}</td>
            <td>{{$products->product_quantity}}</td>
            <td>{{$products->product_price}}(BDT.)</td>
            <td class="text-right">{{$products->product_quantity * $products->product_price}}(BDT.)</td>
          </tr>

          <tr>
            <td colspan="5">Toatal Amont</td>
            <td class="ms-4">{{$products->product_quantity * $products->product_price}}</td>
          </tr> --}}
        </tbody>
      </table>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
        //let print_button = document.getElementById("print_inventory");
    document.getElementById('print_inventory').addEventListener('click', function(){
        window.print();
    })
</script>
</body>
</html>
