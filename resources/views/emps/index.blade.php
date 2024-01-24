@extends('sitelayout')
 
@section('content')

   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


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
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>
               
                 <form action="{{ route('emps.destroy', $employee->id) }}" method="post">
                   
                    <a class="btn btn-primary" href="{{ route('emps.edit', $employee->id) }}">Edit</a>
                  
                   
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
              
                      
               
            </td>
        </tr>
        @endforeach
    </table>
  </div>
</div>


    {!! $employees->links() !!}
      
@endsection