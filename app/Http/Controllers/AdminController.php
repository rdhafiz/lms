<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{

    public function login() {
        return view('admin.pages.login.login');
    }

    public function dashboard() {
        return view('admin.pages.dashboard.dashboard');
    }

    public function profile() {
        return view('admin.pages.profile.profile');
    }

    public function adminManagement() {
        return view('admin.pages.admin.admin');
    }

    public function userManagement() {
        return view('admin.pages.user.user');
    }

}
