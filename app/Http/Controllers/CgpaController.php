<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class CgpaController extends Controller
{
    function admincgpa()
    {
      return view('admincgpa');
    }


    function getcgpa(Request $req)
    //
   {
    //
    $user=student::where('roll' ,'=', $req->roll)->first();
    if($user)
{
  if($req->roll == $user->roll)
  {
    $user = new student;
    $user->cgpa=$req->input('cgpa');

    $user->save();

    $req->session()->flash('st atus', 'Restaurant enterred Successfully');
    return redirect('admincgpa');
  }
  else {
    return back()->with('fail','The roll doesnt exist');
  }

}
else {
  return back()->with('fail','No account found');
}
    }
}
