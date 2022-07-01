<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
    public function index(Request $request)
    {
        return view('front.top');
    }
}
