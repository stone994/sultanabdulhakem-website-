<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

   public function authenticate(AdminLoginRequest $request) 
{
    // Validation has already passed if execution reaches this line
    if (Auth::guard('admin')->attempt(
        ['email' => $request->email, 'password' => $request->password],
        $request->boolean('remember') // Fixed typo: 'remember' instead of 'remeber'
    )) {
        $user = Auth::guard('admin')->user();

        if ($user->role == 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            Auth::guard('admin')->logout();
            $request->session()->flash('error', 'Either email or password is incorrect');
            return redirect()->route('admin.login');
        }
    } else {
        $request->session()->flash('error', 'Either email or password is incorrect');
        return redirect()->route('admin.login');
    }
}
public function logout(){
    Auth::guard('admin')->logout();
    return redirect()->route('admin.login');
}
}
    

