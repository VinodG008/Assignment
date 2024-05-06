<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\officeadmin;
use App\Models\Employee;

use Illuminate\Support\Facades\DB;
use Hash;
use App\DataTables\employeedataDataTable;

  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }  
     
         public function registration()
    {
        return view('auth.registration');
    }
     
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
   $info=DB::table('officeadmin')->where('email',$request->email)->get();
   
    
  
   if($info->isEmpty())
    {
        return redirect("login")->with('message','Oppes! You have entered invalid credentials');

    }
    else{

        $hspw=$info[0]->password;
        $pwd=$request->password;

   
        $credentials = $request->only('email', 'password');
        if (Hash::check($pwd,$hspw)) {
            return redirect('usersshow')->with('info', $info)->with('successmessage','You have Successfully loggedin');
        }
        else
       { return redirect("login")->with('message','Oppes! You have entered invalid credentials');
        }
        }
    }

       public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:officeadmin',
            'password' => 'required|min:6',
        ]);
        
        $data = $request->all();
        
                 $admin = new officeadmin;
            $admin->name       = $request->name;
            $admin->email      = $request->email;
            $admin->password =$request->password;
    
            DB::table('officeadmin')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
            ]);
              return redirect("login")->with('successmessage','You have Successfully Registered');
    }

 public function addemployee()
    {
    
        return \View::make('auth.addnewemployee');
          
    }
    
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }



       public function EmpRegistration(Request $request)
    {  
       
        
           $data = $request->all();
        
            $emp = new Employee;
        
            DB::table('Employee_data')->insert([
            'name' => $request->name,
            'mob_num' => $request->mob_num,
            'department' => $request->department,
            'addressline1' => $request->addressline1,
            'addressline2' => $request->addressline2,
            'district' => $request->district,
            'tahsil' => $request->tahsil,
            'city' => $request->city,
            'pincode' => $request->pincode,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'salary' => $request->salary,
            'email' => $request->email,
            'password' => Hash::make($request->password)
             ]);
            
            return redirect("usersshow")->with('successmessage','Great! You have Successfully Registered');
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
         $info=DB::table('Employee_data')->where('email',$request->email)->get();
       
        if($info->isEmpty())
        {
        return redirect("userlogin")->with('message','Oppes! You have entered invalid credentials');

         }
         else
         {
          $hspw=$info[0]->password;
          $pwd=$request->password;
   
        
        if ( Hash::check($pwd,$hspw)) {
            return redirect('usersshow')->with('info', $info)->with('successmessage','You have Successfully loggedin');
          }
        else
         { 

             return redirect("userlogin")->with('message','Oppes! You have entered invalid credentials');
         }
        }
    }
      public function userloginmethod()
    {
        return view('auth.Employee_login');
    }  

    public function emploginmethod(employeedataDataTable $dataTable)
    {
   
  return $dataTable->render('users.index');

    }

    public function datatables(employeedataDataTable $dataTable)
    {
    return $dataTable->ajax();
    }



}

