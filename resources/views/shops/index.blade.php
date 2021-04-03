@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Bordered Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>name</th>
            <th>Email</th>
            <th>website</th>
            <th>logo</th>
            <th>edit</th>
            <th>delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($shops as $shop)
            <tr>
                <td>{{$shop->id}}</td>
                <td>{{$shop->name}}</td>
                <td>{{$shop->email}}</td>
                <td>{{$shop->website}}</td>
                <td><img width="20px" height="20px" src="{{asset("storage/$shop->logo")}}"></td>
                <td><a class="btn btn-success" href="{{route('shops.edit',$shop)}}">edit</a></td>
                <td> <a href="#" class="delete-btn btn btn-danger">
                    <form action="{{ route('shops.destroy', $shop->id) }}" method="">
                        @csrf
                        @method('delete')
                    </form>
                    delete
                </a></td>
            </tr>    
            
          @endforeach
          
        
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      {{$shops->links()}}
    </div>
  </div>
@endsection