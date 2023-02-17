@extends('layout')
  
@section('content')
 
<br><br>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
<div class="card">
  <div class="card-header"><strong>ADD NEW EMPLOYEE</strong></div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Employee Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Complete Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile Number</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input class="form-control" name="photo" type="file" id="photo"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>
</div>
</div>
 
@stop