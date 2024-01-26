<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess()
    {
        $userid = request('userid');
        if (str::contains($userid, '@')) {
            $field = 'email';
        } else {
            $userid = str_replace(" ", "", $userid);
            $strlen = Str::length($userid);
            if ($strlen == 17) {
                $field = 'nip';
            } else {
                $field = 'username';
            }
        }
        $credential = [
            $field => request('userid'),
            'password' => request('password')
        ];

        $req_remember = request('remember');
        $remember = (isset($req_remember)) ? true : false;
        if(auth()->attempt($credential, $remember)){
            $user = auth()->user();
            return $this->manageRedirect($user);
        } else {
            return view('login', ['message' => 'login gagal coba lagi']);
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('login');
    }

    public function manageRedirect($user)
{
    $list_role = $user->role;

    if ($list_role->isNotEmpty()) {
        $firstRole = $list_role->first();

        if ($firstRole->module) {
            $url = $firstRole->module->url;
            return redirect($url);
        }
    }

    
}

}
