<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\student;

class Admin_controller extends Controller
{
    function admin()
    {
      return view('admin');
    }

    function adminlogin(Request $request)
        {
            $request->validate([
                'roll' => 'required',
                'password' => 'required'
            ]);

            $user=student::where('roll' ,'=', $request->roll)->first();
            if($user)
            {
              if($request->password == $user->password)
              {
                  $request->session()->put('adminauthen',$user->roll);
                  return redirect('adminauthen');
              }
              else {
                return back()->with('fail','Invalid password');
              }
            }
            else {
              return back()->with('fail','No account found');
            }

          }


function adminauthen()
{
  return view('adminauthen');
}


}
