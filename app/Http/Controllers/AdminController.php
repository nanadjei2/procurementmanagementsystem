<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function getAdminDashboard() {
        return view('pages.admin-dashboard');
    }
}
