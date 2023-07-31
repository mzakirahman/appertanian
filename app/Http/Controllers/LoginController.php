<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $email=$request->email;
        $password=md5($request->password);

        $cek=DB::table('users')
                ->where('email',$email)
                ->where('password',$password);
                
        if($cek->count()>0){
            $qy=$cek->get();
            foreach($qy as $row){
                $level=$row->level;
            }
            $request->session()->put('status','login');
            $request->session()->put('name',$email);
            $request->session()->put('level',$level);
            return redirect('dashboard');
        }else{
            return redirect('/');
        }
       
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}