@extends('layout')
  
@section('content')
 
 <br>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header"><strong>EMPLOYEE INFORMATION</strong></div>
                  <div class="card-body">
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $contacts->name }}</h5>
        <p class="card-text">Address : {{ $contacts->address }}</p>
        <p class="card-text">Phone : {{ $contacts->mobile }}</p>
        <p class="card-text">Picture file : {{ $contacts->pic }}</p>
    
        
  </div>
  <div style='text-align:right'>
  <a href="{{ url('/contact/') }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Return</button></a>
  </div>
</div></div></div>
    </div>
</div>


 
@stop