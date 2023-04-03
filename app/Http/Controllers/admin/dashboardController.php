<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function showindex() 
    {
        $user = Auth::user();
        // dd($user);
        return view('admin.index');
    }
}
