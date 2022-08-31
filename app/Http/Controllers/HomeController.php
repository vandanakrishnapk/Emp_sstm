<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Salary;
use App\Models\Leave;
use App\Models\Worksheet;
use App\Models\Work;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;


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
public function savecontact()
{
  Contact::create([
    'name'=>request('name'),
    'phonenumber'=>request('ph'),
    'District'=>request('dis'),
    'subject'=>request('su'),
  ]);
  return "we will contact you later";
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
   return redirect()->route('home');
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
   return redirect()->route('home');
    }


    public function empdologin()
    {
        $username=request('empname');
        $password=request('emppassword');
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
   return redirect()->route('home');
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
    'password'=>bcrypt($password),
]);
return redirect()->route('viewemp');
}

public function viewemp()
{
    $emp=User::all();
    return view('viewemp',compact('emp'));
}

public function delete_emp($id)
{
$user=User::find(decrypt($id))->delete();
return redirect()->route('viewemp');
}

public function edit_emp($id)
{
  $emp=User::find(decrypt($id));
return view('edit_emp',compact('emp'));
}

public function update_emp()
{
    $uid=request('u_id');
    $emp=User::find($uid);
    $emp->update([
      'name'=>request('na'),
      'email'=>request('em'),
      'mobile'=>request('mo'),
      'type'=>request('ty'),
      'address'=>request('ad'),
      'qualification'=>request('qa'),
      'username'=>request('us'),
      'password'=>request('pa')
    ]);
    return redirect(route('viewemp'));
  }

  public function addsal()
  {
    $emp=User::all();
    return view('addsal',compact('emp'));
  }

  public function salsave()
  {
    $empid=request('se');
    $date=request('da');
    $salary=request('sa');
    salary::create([
        'emp_id'=>$empid,
        'date'=>$date,
        'salary'=>$salary
    ]);
 return redirect()->route('addsal')->with('message',"salary added");
  }
  public function viewsal()
  {
    $sal=auth()->User();
    $empid=$sal->id;
    $em=User::where('id',$empid)->first();
    $emp=Salary::where('emp_id',$empid)->get();
    // return $emp->emp_id;
    // return $emp[0]->emp_id;
    return view('viewsal',compact('emp','em'));    
  }
  public function viewempsal()
  {
    $usr=User::join('salaries','salaries.emp_id','=','users.id')->get();
    return view('viewsal_emp',compact('usr'));
  }
  public function viewsaladmin()
  {
    $sal=Salary::all();
    return view('viewsaladmin',compact('sal'));
  }
public function deletesal($id)
{ 
Salary::find(decrypt($id))->delete();
return redirect()->route('viewsaladmin');
}
public function editsal($id)
{
  $sal=Salary::find(decrypt($id));
   return view('editsal',compact('sal'));
}
public function updatesal()
{
  
  $uid=request('u_id');
  $emp=Salary::find($uid);
  $emp->update([
    'date'=>request('da'),
    'salary'=>request('sa'),
  ]);
  return redirect()->route('viewsaladmin');
}

  public function editpro($id)
  {
    $pro=auth()->User();
    return view('editpro',compact('pro'));
  }
  public function updatepro()
  {
    $uid=request('u_id');
    $emp=User::find($uid);
    $emp->update([
    'name'=>request('na'),
    'email'=>request('em'),
    'mobile'=>request('mo'),
    'type'=>request('ty'),
    'address'=>request('ad'),
    'qualification'=>request('qa'),
    'username'=>request('us'),
    'password'=>request('pa'),
    ]);
    return redirect(route('viewpro'));
  }

  public function viewpro()
  {
    $us= auth()->User();
    return view('viewpro',compact('us'));
  }

 
 
  public function emp_req()
  {
    $emp=User::all();
    return view('emp_req',compact('emp'));
  }

  public function saveleave()
  {
    $empid=request('se');
    $date=request('da');
    Leave::create([
        'emp_id'=>$empid,
        'date'=>$date,
    ]);
    return redirect()->route('emp_req')->with('message',"leave request added");
  }
  public function viewleave()
  {
    $leave=Leave::all();
    $user=User::all();
    $users=Leave::where('emp_id','id')->get();
    return view('viewleave',compact('leave','users'));
  }
public function hr_req()
{
  $hr=Leave::where('emp_id','2')->get();
  $empid=$hr[0]->emp_id;
  // return $hr;
  // return $empid;
  $emps=User::where('id',$empid)->get();
  // return $emps[0]->id;
  // return $emp;
  // return $emps;
  return view('viewleavehr',compact('hr','emps'));
}




  public function addworksheet()
  {
    $work=Work::all();
    return view('addworksheet',compact('work'));
  }

  public function saveworksheet()
  {
    $emp=auth()->User();
    $emps=$emp->id;
    Worksheet::create([
        'emp_id'=>$emps,
        'date'=>request('da'),
        'work'=>request('sel'),
        'start_time'=>request('st'),
        'end_time'=>request('et'),
        'status'=>request('con'),
    ]); 
    return redirect()->route('viewwork');
  }
  public function viewwork()
  {
    $work=Worksheet::all();
    return view('viewwork',compact('work'));
  }
public function viewwork_emp()
{
  $emp=auth()->User();
  $empid=$emp->id;
  $emps=Worksheet::where('emp_id',$empid)->get();
  return view('viewwork_emp',compact('emps'));
}

public function givework()
{
return view('givework');
}
public function savework()
{
  Work::create([
    'work'=>request('wo'),
  ]);
  return redirect()->route('givework')->with('message',"work submitted");
}  


}

