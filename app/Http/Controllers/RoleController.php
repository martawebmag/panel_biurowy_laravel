<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function role()
{
    $user = Auth::user();

    if ($user->role == 'superadmin') {
        return view('superadmin.dashboard');
    }

    if ($user->role == 'admin') {
        return view('admin.dashboard');
    }

    return view('koordynator.dashboard');
}

}
