@extends('layouts.main')

@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Authors table</h6>
        </div>
        <div class="card-body px-20 pt-0 pb-2">
          <form id="bill" onsubmit="" method="post" action="{{route('invoice.store')}}">
            @csrf
            <!-- MY BILL FIELDS -->
            <input type="text" value="" name="client" id="client" hidden>
            <input type="text" value="" name="product" id="product" hidden>


            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputItem">Items</label>
                <select class="form-select form-control" id="inputItem" aria-label="Default select example" onchange="productSelect(value)">
                  <option value="false">...</option>
                  @foreach ($products as $product)
                  <option value="{{$product}}">{{ $product->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="inputCustomer">Customer</label>
                <select class="form-select form-control" id="inputCustomer" aria-label="Default select example" onchange="clientSelect(value)">
                  <option value="false">...</option>
                  @foreach($customers as $customer)
                  <option value="{{$customer}}">{{$customer->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <table class="table table-striped" id="productTb">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <!-- TABLE PRODUCTS COMES HERE -->
              </table>
            </div>

            <h4>Total price:
              <input type="text" value="0" name="totalPrice" id="formTotalPrice">
            </h4>

            <button type="submit" class="btn btn-success">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="container-fluid py-4">

  <div class="container col-md-12">

  </div>

</div>

@endsection

@section('script')

<script>
  let items = 0;
  let oldPrice = 0;

  function productSelect(product) {
    if (product !== "false") {
      let productField = document.getElementById('product');
      productField.value = product;
      // product is json string so parse it to could access product info
      let productInfo = JSON.parse(product);
      pushProduct(productInfo);
      calculateBillTotalPrice(parseFloat(productInfo.price));
    }
  }

  function pushProduct(product) {
    document.getElementById("productTb").innerHTML += `
      <tbody id="tBody">
        <tr>
          <th scope="row">${++items}</th>
          <td>${product.name}</td>
          <td>1</td>
          <td>${product.price}</td>
        </tr>
      </tbody>`;
  }

  function clientSelect(customer) {
    if (product !== "false") {
      let client = document.getElementById('client');
      client.value = customer;
    }
  }

  function calculateBillTotalPrice(price) {
    let newPrice = oldPrice += price;
    document.getElementById("formTotalPrice").value = newPrice;
    console.log(newPrice);
  }
</script>

@endsection