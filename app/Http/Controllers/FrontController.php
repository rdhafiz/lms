<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FrontController extends BaseController
{

    public function index() {
        return view('front.pages.home.index');
    }

    public function about() {
        return view('front.pages.about.about');
    }

    public function contact() {
        return view('front.pages.contact.contact');
    }

    public function privacy_policy() {
        return view('front.pages.privacy-policy.privacy-policy');
    }

    public function terms_of_use() {
        return view('front.pages.terms-of-use.terms-of-use');
    }

    public function cookie_policy() {
        return view('front.pages.cookie-policy.cookie-policy');
    }

    public function register() {
        return view('front.pages.register.register');
    }

    public function login() {
        return view('front.pages.login.login');
    }

    public function forget_password() {
        return view('front.pages.forget-password.forget-password');
    }

    public function reset_password() {
        return view('front.pages.reset-password.reset-password');
    }

    public function courses() {
        return view('front.pages.course.course');
    }

}
