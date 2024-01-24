@extends('sitelayout')
   
@section('content')


<div class="container-fluide" style="margin-left: 20px;margin-right: 20px;">
       <div class="row">
        <div class="col-md-1">
                    
    </div>
   
        <div class="col-md-8">

    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " href="{{ route('users.indexshow') }}" style="color: black;">Show All Employee Report</a>
  </li>
 
  <li class="nav-item">
        <a class="nav-link " href="{{ route('auth.addemp') }}"  style="color:black;">Add Employee</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('emps.index') }}"  style="color:black;">Edit & Delete Employee</a>
  </li>
 </ul>

 <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('emps.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('emps.update',$employ->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $employ->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="email" placeholder="email">{{ $employ->email }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection