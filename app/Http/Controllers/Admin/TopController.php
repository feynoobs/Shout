<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use \Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;

class TopController extends Controller
{
    public function index(Request $request) : View
    {
        return view('admin.top');
    }

    public function login(Request $request) : RedirectResponse
    {
        $authData = $request->validate([
            'id' => 'required|integer',
            'password' => 'required|string'
        ]);
        $ret = back();
        if (Auth::guard('admins')->attempt($authData)) {
            $ret = redirect()->route('home');
        }

        return $ret;
    }
}
