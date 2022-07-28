<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }


    public function adminlogin()
    {
        return view('adminlogin');
    }
    public function HRlogin()
    {
        return view('HRlogin');
    }
    public function employeelogin()
    {
        return view('employeelogin');
    }


    public function dologin()
    {
        $username=request('adminname');
        $password=request('adminpassword');
        $type=request('type');
        if(auth()->attempt([
            'username'=>$username,
            'password'=>$password,          
        ]))
        {
            return redirect()->route('admindashboard');
        }
        else
        {
            return redirect()->route('adminlogin')->with('message',"Invalid Login");
        }
    }

    public function logout()
    {
   auth()->logout();
   return redirect()->route('adminlogin');
    }


    public function hrdologin()
    {
        $username=request('hrname');
        $password=request('hrpassword');
        $type=request('type');
        if(auth()->attempt([
            'username'=>$username,
            'password'=>$password,          
        ]))
        {
            return redirect()->route('HRdashboard');
        }
        else
        {
            return redirect()->route('HRlogin')->with('message',"Invalid Login");
        }
    }


    public function hrlogout()
    {
   auth()->logout();
   return redirect()->route('HRlogin');
    }


    public function empdologin()
    {
        $username=request('empname');
        $password=request('emppassword');
        $type=request('type');
        if(auth()->attempt([
            'username'=>$username,
            'password'=>$password,          
        ]))
        {
            return redirect()->route('employeedashboard');
        }
        else
        {
            return redirect()->route('employeelogin')->with('message',"Invalid Login");
        }
    }

    public function emplogout()
    {
   auth()->logout();
   return redirect()->route('employeelogin');
    }



    public function admindashboard()
    {
        return view('admindashboard');
    }
    public function HRdashboard()
    {
        return view('HRdashboard');
    }
    public function employeedashboard()
    {
        return view('employeedashboard');
    }
public function addemp()
{

    return view('addemp');
}
public function empsave()
{
    $name=request('na');
    $email=request('em');
    $mobile=request('mo');
    $type=request('ty');
    $address=request('ad');
    $qual=request('qa');
    $username=request('us');
    $password=request('pa');
User::create([
   
    'name' => $name,
    'email' =>$email,
    'mobile'=>$mobile,
    'type'=>$type,
    'address'=>$address,
    'qualification'=>$qual,
    'username'=>$username,
    'password'=>$password,
]);
return redirect()->route('viewemp');
}

public function viewemp()
{
    $emp=User::all();
    return view('viewemp',compact('emp'));
}
}