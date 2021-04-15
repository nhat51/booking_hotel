<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login()
    {
        return view('user.login');
    }

    function register()
    {
        return view('user.register');
    }

    function save(Request $request)
    {
        //validate
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|max:20',
            'password_confirm' => 'required|same:password'
        ]);
        // insert data vào localhost
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if ($save){
            return back()->with('success', 'New User has been successfuly added to database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    function check(Request $request){
        // Validate
        $request->validate([
           'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ]);

        $userInfo = Admin::where('email', '=', $request->email)->first();
        if (!$userInfo) {
            return back()->with('fail', 'We do not recognize your email address');
        } else {
            // check password phần login
            if (Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }
    }

    function dashboard() {
        return view('admin.dashboard');
    }
}
