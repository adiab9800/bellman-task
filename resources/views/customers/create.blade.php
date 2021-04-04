@extends('layouts.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create New customer</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{route('customers.store')}}" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" required id="" value="{{old('first_name')}}" name="first_name" placeholder="Enter First Name">
            @if($errors->has('first_name'))
                 <span class="text-danger" role="alert">
                     {{ $errors->first('first_name') }}
                    </span>
            @endif
          </div>
          <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" required id="" value="{{old('last_name')}}" name="last_name" placeholder="Enter Last Name">
            @if($errors->has('last_name'))
                 <span class="text-danger" role="alert">
                     {{ $errors->first('last_name') }}
                    </span>
            @endif
          </div>
        
        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="number" class="form-control" required id="" value="{{old('phone')}}" name="phone" placeholder="Enter phone">
            @if($errors->has('phone'))
                 <span class="text-danger" role="alert">
                     {{ $errors->first('phone') }}
                    </span>
            @endif
          </div>
          <div class="form-group">
            <label for="">email</label>
            <input type="email" class="form-control" required id="" value="{{old('email')}}" name="email" placeholder="Enter email">
            @if($errors->has('email'))
                 <span class="text-danger" role="alert">
                     {{ $errors->first('email') }}
                    </span>
            @endif
          </div>
          <div class="form-group">
            <label for="">select Shop</label>
            <select class="form-control" required name="shop_id" required>
              @foreach ($shops as $shop)
                  <option value="{{$shop->id}}">{{$shop->name}}</option>
              @endforeach
            </select>
            @if($errors->has('shop_id'))
                 <span class="text-danger" role="alert">
                     {{ $errors->first('shop_id') }}
                    </span>
            @endif
          </div>
      
       
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection