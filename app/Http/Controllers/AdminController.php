<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class AdminController extends Controller
{
    public function getAdminDashboard() {
        $users = User::all();
        return view('pages.admin-dashboard')
        ->with('users', $users);
    }



    
}
