<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use App\Http\Controllers\Controller;

class TopController extends Controller
{
    public function index(Request $request) : View
    {
        return view('admin.top');
    }

    public function login(Request $request) : View
    {
        $request->validate([
            'id' => 'required|email|unique:t_users|between:1,255',
            'password' => 'required|string'
        ]);
        return view('admin.top');
    }
}
