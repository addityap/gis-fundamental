<?php

namespace App\Http\Controllers\Account;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    //
    public function edit(){
        return view ('edit_profile');
    }
    public function update(){

        request()->validate([
            'oldPassword' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $currentPassword = auth()->user()->password;
        $oldPassword = request('oldPassword');

        if(Hash::check($oldPassword, $currentPassword)){
            auth()->user()->update([
                'name' => request('namalgkp'),
                'password' => bcrypt(request('password')),
            ]);
            return back()->with('success','Your Password has Changed');
        }else{
            return back()->withErrors(['oldPassword' => 'Make sure you fill your current password']);
        }
    }
}
