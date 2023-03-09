@extends('layouts.main')

@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Add Delivery Guy</h6>
        </div>
        <div class="card-body px-20 pt-0 pb-2">
          <form action="{{route('deliveryguy.store')}}" method="POST">
            @csrf
            <div class="form-content ">

              <div class="form-group col-md-6 mt-2">
                <label for="new_name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Meal Name" value="{{old('name')}}">
                @error('name')
                <small class="alert text-danger" role="alert">
                  {{$message}}
                </small>
                @enderror
              </div>
            </div>
            <div class="form-group col-md-6 mt-2">
              <label for="new_price">Price</label>
              <input type="text" class="form-control" id="new_price" name='price' placeholder="Price" value="{{old('price')}}">
              @error('price')
              <small class="alert text-danger" role="alert">
                {{$message}}
              </small>
              @enderror
            </div>
            <input type="submit" class="btn btn-primary mt-2" value="Save">
            <a href="{{route('deliveryguys')}}" class="btn btn-danger mt-2">Back</a>

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

@endsection