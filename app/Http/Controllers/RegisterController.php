<?php
namespace App\Http\Controllers;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store() {
        return view('register.store');
    }
}
