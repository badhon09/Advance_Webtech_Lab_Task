@extends('admin.master')

@section('content')
<div class="card-body">
    <form method="post" enctype="multipart/form-data">
        @csrf
      <h6 class="heading-small text-muted mb-4">User information</h6>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
             



<div class="alert alert-warning col-md-12" role="alert">

</div>
  </div>
          </div>
          
         
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-first-name">Full name</label>
              <input type="text" name="name"  class="form-control" placeholder="Full name" >
            </div>
          </div>

          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-last-name">Username</label>
              <input type="text" name="username"  class="form-control" placeholder="Phone Number" >
            </div>
          </div>
          

          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-last-name">Password</label>
              <input type="text" name="password"  class="form-control" placeholder="Password" >
            </div>
          </div>
         
      
        
          
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-last-name">Contact</label>
              <input type="text" name="contactno"  class="form-control" placeholder="Phone Number" >
            </div>
          </div>
          
        </div>
      </div>
     
      <input type="submit" placeholder="add" name="submit" class="btn btn-lg btn-success offset-11">
    </form>
  </div>
</div>
</div>
@endsection