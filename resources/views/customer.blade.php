@extends('layouts.main')

@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Add Cutomer</h6>
        </div>
        <div class="card-body px-20 pt-0 pb-2">
          <form action="{{route('customer.store')}}" method="POST">
            @csrf
            <div class="form-content ">

              <div class="form-group col-md-6 mt-2">
                <label for="new_client_name">Client Name</label>
                <input type="text" class="form-control" name="Client_Name" id="client_name" placeholder="client name" value="{{old('Client_Name')}}">
                @error('Client_Name')
                <small class="alert text-danger" role="alert">
                  {{$message}}
                </small>
                @enderror
              </div>
            </div>
            <div class="form-group col-md-6 mt-2">
              <label for="new_client_email">Email</label>
              <input type="text" class="form-control" id="new_client_email" name='Email' placeholder="Email" value="{{old('Email')}}">
              @error('Email')
              <small class="alert text-danger" role="alert">
                {{$message}}
              </small>
              @enderror
            </div>
            <div class="form-group col-md-6 mt-2">
              <label for="new_client_phone">Phone</label>
              <input type="tel" class="form-control" id="new_client_phone" name='Phone' placeholder="Phone" value="{{old('Phone')}}">
              @error('Phone')
              <small class="alert text-danger" role="alert">
                {{$message}}
              </small>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="new_client_address mt-2">City </label>
              <input type="text" class="form-control" id="new_client_address" name='Address' placeholder="Client Address" value="{{old('Address')}}">
              @error('Address')
              <small class="alert text-danger" role="alert">
                {{$message}}
              </small>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="new_client_street mt-2">Street Address </label>
              <input type="text" class="form-control" id="new_client_street" name='Street' placeholder="Client Street Address" value="{{old('Street')}}">
              @error('Street')
              <small class="alert text-danger" role="alert">
                {{$message}}
              </small>
              @enderror
            </div>
            <input type="submit" class="btn btn-primary mt-2" value="Save">
            <a href="{{route('customers')}}" class="btn btn-danger mt-2">Back</a>

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