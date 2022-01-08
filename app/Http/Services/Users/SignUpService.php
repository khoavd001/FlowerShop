<?php

namespace App\Http\Services\Users;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class SignUpService
{
    public function create($request)
    {
        try{
            User::create([
                'name'=>(string) $request->input('name'),
                'email'=>(string) $request->input('email'),
                'password'=>bcrypt($request->input('password')),
                'address'=>(string) $request->input('address'),
                'tel'=>(string) $request->input('tel'),
            ]);
            Session::flash('success', 'Đăng ký tài khoản thành công :))');
        }
        catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
}
