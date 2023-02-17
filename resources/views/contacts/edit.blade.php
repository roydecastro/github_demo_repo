@extends('layout')
  
@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><strong>EDIT EMPLOYEE INFORMATION</strong></div>
            <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$contacts->mobile}}" class="form-control"></br>
        <input class="form-control" name="photo" type="file" id="photo"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
        </div>
      </div>
    </div>
  </div>
</div>
 
@stop