@extends('layouts.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create New Shop</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{route('shops.store')}}" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" value="{{old('name')}}" name="name" placeholder="Enter Name">
            @if($errors->has('name'))
                 <span class="text-danger" role="alert">
                     {{ $errors->first('name') }}
                    </span>
            @endif
          </div>
        <div class="form-group">
            <label for="">Email address</label>
            <input type="email" class="form-control" id="" value="{{old('email')}}" name="email" placeholder="Enter email">
            @if($errors->has('email'))
                 <span class="text-danger" role="alert">
                     {{ $errors->first('email') }}
                    </span>
            @endif
          </div>
          <div class="form-group">
            <label for="">Website</label>
            <input type="url" class="form-control" id="" value="{{old('website')}}" name="website" placeholder="Enter Website">
            @if($errors->has('website'))
                 <span class="text-danger" role="alert">
                     {{ $errors->first('website') }}
                    </span>
            @endif
          </div>
        <div class="form-group">
          <label for="exampleInputFile">Logo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" value="{{old('logo')}}" name="logo" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              @if($errors->has('logo'))
                 <span class="text-danger" role="alert">
                     {{ $errors->first('logo') }}
                    </span>
              @endif
            </div>
           
          </div>
        </div>
       
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection