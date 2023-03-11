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
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{old('name')}}">
                @error('name')
                <small class="alert text-danger" role="alert">
                  {{$message}}
                </small>
                @enderror
              </div>
            </div>
            <div class="form-group col-md-6 mt-2">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name='email' placeholder="Email" value="{{old('email')}}">
              @error('email')
              <small class="alert text-danger" role="alert">
                {{$message}}
              </small>
              @enderror
            </div>

            <div class="form-group col-md-6 mt-2">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" id="phone" name='phone' placeholder="Phone" value="{{old('phone')}}">
              @error('phone')
              <small class="alert text-danger" role="alert">
                {{$message}}
              </small>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="motor-num">Motor Cycle Num </label>
              <input type="text" class="form-control" id="motor-num" name='motor-num' placeholder="Motor Cycle Num" value="{{old('motor-num')}}">
              @error('motor-num')
              <small class="alert text-danger" role="alert">
                {{$message}}
              </small>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="username">user name</label>
              <input type="text" class="form-control" id="username" name="user-name" placeholder="user name" value="{{old('user-name')}}">
              @error('user-name')
              <small class="alert text-danger" role="alert">
                {{$message}}
              </small>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="national-id">national ID</label>
              <input type="text" class="form-control" id="national-id" name="national-id" placeholder="national ID" value="{{old('national-id')}}">
              @error('national-id')
              <small class="alert text-danger" role="alert">
                {{$message}}
              </small>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="password">password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{old('password')}}">
              @error('password')
              <small class="alert text-danger" role="alert">
                {{$message}}
              </small>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="new_client_address mt-2">birthdate</label>
              <input type="date" class="form-control" id='birthdate' name='birthdate' placeholder="birthdate" value="{{old('birthdate')}}">
              @error('birthdate')
              <div class="alert alert-danger" role="alert">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="salary">salary</label>
              <input type="number" class="form-control" id="salary" name="salary" placeholder="salary" value="{{old('salary')}}">
              @error('salary')
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