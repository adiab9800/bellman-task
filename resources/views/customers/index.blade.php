@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">all customers</h3>
      <a class="card-tools btn btn-success" href="{{route('customers.create')}}">Add New</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>first name</th>
            <th>last name</th>
            <th>phone</th>
            <th>email</th>
            <th>shop</th>
            <th>edit</th>
            <th>delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customers as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->first_name}}</td>
                <td>{{$customer->last_name}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->shop->name}}</td>
                <td><a class="btn btn-success" href="{{route('customers.edit',$customer)}}">edit</a></td>
                <td> 
                  <form action="{{route('customers.destroy',$customer)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>               
                 </form>
                 </td>
            </tr>    
            
          @endforeach
          
        
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      {{$customers->links()}}
    </div>
  </div>
@endsection