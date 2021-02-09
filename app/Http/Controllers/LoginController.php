<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function pageLogin(){
        return view('perpus.login');
    }
    public function authLogin(Request $request){

        $validate_admin = User::where('email', $request->input('email'))
                                ->first();

        if($validate_admin){

            if(Hash::check($request->input('password'), $validate_admin->password)){
                Auth::loginUsingId($validate_admin->id);
                $request->session()->put('id', $validate_admin->id);
                if($validate_admin->account_status == '1'){
                    return redirect('/');
                }
                if($validate_admin->account_status  == '4'){
                    return redirect('/member');
                }
            }else{
                return redirect('/login')
                    ->with('status', 2)
                    ->with('message', "Oppsss, Email atau Password salah");
            }

        }else{
            return redirect('/login')
            ->with('status', 2)
            ->with('message', "Oppsss, Email atau Password salah");
        }
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
