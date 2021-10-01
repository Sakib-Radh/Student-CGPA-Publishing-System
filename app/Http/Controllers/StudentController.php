<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Auth;
// use App\Providers\AuthServiceProvider;
// use App\Http\Controllers\Auth;


class StudentController extends Controller
{
  function index()
  {
    return view('registration');

  }
  function list()
  {
    $data= student::all();

return view('list',["data"=>$data]);

  }



  function add(Request $req)
  //
 {
  //
  //return $req->input();

  $resto = new student;
  $resto->roll=$req->input('roll');
  $resto->name=$req->input('name');
  $resto->email=$req->input('email');
  $resto->password=$req->input('password');
  $resto->save();

  $req->session()->flash('st atus', 'Restaurant enterred Successfully');
  return redirect('login');


  }






//   function login()
//   {
//     return view('login');
//
//   }
//
//
//
//     public function authenticate(Request $request)
//       {
//           $credentials = $request->only('roll', 'password');
//
//           if (Auth::attempt($credentials)) {
//               $request->session()->regenerate();
//
//               return redirect()->intended('authenticate');
//           }
//
//           return back()->withErrors([
//               'roll' => 'The provided credentials do not match our records.',
//           ]);
// }






}
