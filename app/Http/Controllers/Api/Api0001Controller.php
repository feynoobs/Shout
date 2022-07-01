<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Api0001Controller extends Controller
{
    public function index(Request $request) : array
    {
        return [1, 2, 3];
    }
}
