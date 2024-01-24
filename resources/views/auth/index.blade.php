@extends('sitelayout')
  
@section('content')



<div class="container-fluide" style="margin-left: 20px;margin-right: 20px;">
       <div class="row">
        <div class="col-md-1">
        </div>
   
        <div class="col-md-8">

                <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('users.indexshow') }}" style="color: black;">Show All Employee Report</a>
  </li>
 
  <li class="nav-item">
        <a class="nav-link " href="{{ route('auth.addemp') }}"  style="color:black;">Add Employee</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ route('emps.index') }}"  style="color:black;">Edit & Delete Employee</a>
  </li>
  
</ul>

<br>


      <div class="container">
        
         <table class="table table-bordered data-table">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Department</th>
                  <th>Salary</th>
                  <th>Start date</th>
                  <th>End Date</th>

                </tr>
            </thead>
            <tbody>
            </tbody>
         </table>
      </div>

</div>
</div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      <script type="text/javascript">
         $(function () {
           var table = $('.data-table').DataTable({
               processing: true,
               serverSide: true,
               ajax: "{{ route('users.indexshow') }}",
             
               columns: [
                   {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                   {data: 'name', name: 'name'},
                   {data: 'email', name: 'email'},
                   {data: 'department', name: 'department'},
                   {data: 'salary', name: 'salary'},
                   {data: 'start_date', name: 'start_date'},
                   {data: 'end_date', name: 'end_date'}
               ], 
             
           })
         });
          
      </script>

      
  @endsection