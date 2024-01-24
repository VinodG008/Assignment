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
        <a class="nav-link active" href="{{ route('auth.addemp') }}"  style="color:black;">Add Employee</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ route('emps.index') }}"  style="color:black;">Edit & Delete Employee</a>
  </li>
 </ul>

<br>



 <form action="{{ route('empdata') }}" method="POST">
    @csrf


<div class="row" >
<div class="col-md-12" style="margin: 20px;">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Basic Details
                    </button>
                    </h5>
                </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" >
                <div class="card-body">
                <div style="margin-left:10px;">
                    <div class="form-group row">
                              <label for="name" class="col-md-2 col-form-label ">Full Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                               <label for="mob_num" class="col-md-2 col-form-label ">Mobile Number</label>
                              <div class="col-md-6">
                                  <input type="number" id="mob_num" class="form-control" name="mob_num" required autofocus>
                                  @if ($errors->has('mob_num'))
                                      <span class="text-danger">{{ $errors->first('mob_num') }}</span>
                                  @endif
                              </div>
                          </div>
                            <div class="form-group row">
                               <label for="department" class="col-md-2 col-form-label ">Department</label>
                              <div class="col-md-6">
                                  <input type="text" id="department" class="form-control" name="department" required autofocus>
                                  @if ($errors->has('department'))
                                      <span class="text-danger">{{ $errors->first('department') }}</span>
                                  @endif
                              </div>
                          </div>


                     </div>     
                </div>
              </div>

             </div>
</div>
</div>
<div class="row">

    <div class="col-md-12" style="margin: 20px;">
        <div class="card">
              
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
               Address Details
             </button>
            </h5>
        </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" >
                <div class="card-body">
                     <div style="margin-left:10px;">
                        <div class="form-group row">
                              <label for="addressline1" class="col-md-2 col-form-label text-md-left">Address Line 1</label>
                              <div class="col-md-6">
                                  <input type="text" id="addressline1" class="form-control" name="addressline1" required autofocus>
                                  @if ($errors->has('addressline1'))
                                      <span class="text-danger">{{ $errors->first('addressline1') }}</span>
                                  @endif
                              </div>
                          </div>
                           <div class="form-group row">
                               <label for="addressline2" class="col-md-2 col-form-label ">Address Line 2</label>
                              <div class="col-md-6">
                                  <input type="text" id="addressline2" class="form-control" name="addressline2" required autofocus>
                                  @if ($errors->has('addressline2'))
                                      <span class="text-danger">{{ $errors->first('addressline2') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                               <label for="district" class="col-md-2 col-form-label ">Destrict</label>
                              <div class="col-md-6">
                                  <input type="text" id="district" class="form-control" name="district" required autofocus>
                                  @if ($errors->has('district'))
                                      <span class="text-danger">{{ $errors->first('district') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                               <label for="tahsil" class="col-md-2 col-form-label ">Tahsil</label>
                              <div class="col-md-6">
                                  <input type="text" id="tahsil" class="form-control" name="tahsil" required autofocus>
                                  @if ($errors->has('tahsil'))
                                      <span class="text-danger">{{ $errors->first('tahsil') }}</span>
                                  @endif
                              </div>
                          </div>
                                <div class="form-group row">
                               <label for="city" class="col-md-2 col-form-label ">City/Village</label>
                              <div class="col-md-6">
                                  <input type="text" id="city" class="form-control" name="city" required autofocus>
                                  @if ($errors->has('city'))
                                      <span class="text-danger">{{ $errors->first('city') }}</span>
                                  @endif
                              </div>
                          </div>
                           <div class="form-group row">
                               <label for="pincode" class="col-md-2 col-form-label ">Pin</label>
                              <div class="col-md-6">
                                  <input type="text" id="pincode" class="form-control" name="pincode" required autofocus>
                                  @if ($errors->has('pincode'))
                                      <span class="text-danger">{{ $errors->first('pincode') }}</span>
                                  @endif
                              </div>
                          </div>


                    </div>
                 </div>
            </div>
        </div>
    </div>
   </div>


<div class="row">

    <div class="col-md-12" style="margin: 20px;">
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Employment Details
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" >
      <div class="card-body">
        
        <div style="margin-left:10px;">
                        <div class="form-group row" >
                              <label for="start_date" class="col-md-2 col-form-label text-md-left">Start Date</label>
                              <div class="col-md-9">
                                  <input type="date" id="start_date" class="form-control" name="start_date" required>
                                  @if ($errors->has('start_date'))
                                      <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row" >
                              <label for="end_date" class="col-md-2 col-form-label text-md-left">End Date</label>
                              <div class="col-md-9">
                                  <input type="date" id="end_date" class="form-control" name="end_date" required>
                                  @if ($errors->has('end_date'))
                                      <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row" >
                              <label for="salary" class="col-md-2 col-form-label text-md-left">Salary</label>
                              <div class="col-md-9">
                                  <input type="number" id="salary" class="form-control" name="salary" required>
                                  @if ($errors->has('salary'))
                                      <span class="text-danger">{{ $errors->first('salary') }}</span>
                                  @endif
                              </div>
                          </div>

             </div>

      </div>
    </div>
  </div>
</div>
</div>


<div class="row">

    <div class="col-md-12" style="margin: 20px;">
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Employee login Details
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" >
      <div class="card-body">
                         <div class="form-group row" >
                              <label for="email" class="col-md-2 col-form-label text-md-left">Email</label>
                              <div class="col-md-9">
                                  <input type="email" id="email" class="form-control" name="email" required>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row" >
                              <label for="password" class="col-md-2 col-form-label text-md-left">Password</label>
                              <div class="col-md-9">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
      </div>
    </div>
  </div>
</div>
</div>


<div class="row">

    <div class="col-md-5" >
    </div>
    <div class="col-md-3" >
  
   
                              <button type="submit" class="btn btn-primary">
                                  Submit
                              </button>
                          
                           </form>

       
    </div>
     <div class="col-md-4" >
    </div>
</div>

  </div>
</div>
</div>


</div>


  </div>
  
  
     




            


    </div>
</div>
@endsection