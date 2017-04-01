<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class AdminController extends Controller
{
    public function getAllSystemUsers() {
        $users = User::all();
        return view('pages.all-system-users')
        ->with('users', $users);
    }



    
}
