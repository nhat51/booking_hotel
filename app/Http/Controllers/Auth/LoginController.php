<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request) {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Password is required',
            'password.min' => 'Please enter a valid password. Must be a minimum of 8 characters.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);


        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('login')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $email = $request->input('email');
            $password = $request->input('password');

            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                return redirect('index');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email or Password is incorrect.');
                return redirect('login');
            }
        }
    }
}
