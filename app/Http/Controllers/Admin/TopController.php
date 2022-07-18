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
            'password' => 'required|string',
            'keep' => 'required|integer|boolean',
        ]);
        $ret = back();
        $keep = intval($authData['keep']) === 1 ? true : false;
        unset($authData['keep']);
        if (Auth::guard('admins')->attempt($authData, $keep)) {
            $ret = redirect()->route('admin.top.dashbord');
        }

        return $ret;
    }

    public function dashbord(Request $request) : View
    {
        return view('admin.dashbord');
    }
}
