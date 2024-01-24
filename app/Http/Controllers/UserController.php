<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DataTables;
use App\Models\Employee;
 
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) 
        {
            $data = Employee::get();
 
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('auth.index');
    }
}
