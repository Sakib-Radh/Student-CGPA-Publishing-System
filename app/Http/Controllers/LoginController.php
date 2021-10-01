<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{


  function login()
  {
    return view('login');

  }



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


function authentica(Request $request)
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
              $request->session()->put('authenticate',$user->roll);
              return redirect('authenticate');
          }
          else {
            return back()->with('fail','Invalid password');
          }
        }
        else {
          return back()->with('fail','No account found');
        }

      }

      function auth()
      {
        return view('authenticate');

      }
}
