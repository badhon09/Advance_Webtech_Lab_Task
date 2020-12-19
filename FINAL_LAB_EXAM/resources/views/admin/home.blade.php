@extends('admin.master')

@section('content')


<div class="card">
    <div class="card-body">
      <h4 class="card-title">All Employes</h4>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                   
                    <th>Name</th>
                    <th>UserName</th>
                   
                    <th>Contact No</th>
                     <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($emp as $e)
                      <tr>
                          <td>{{$e->name}}</td>
                          <td>{{$e->username}}</td>
                          <td>{{$e->contactno}}</td>

                    <td>
                      <a href="" class="btn btn-outline-primary">Edit</a>
                      <a href="{{route('admin.deleteemployee',$e->id)}}" class="btn btn-outline-primary">Delete</a>
                    </td>
                </tr>
                @endforeach
     
             
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
@endsection
