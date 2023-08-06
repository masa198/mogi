<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RegisterController;

class RegisterController extends Controller
{
    public function index()
    {
    return view ('register');
    }

    public function store()
    {
    return view ('login');
    }

    public function display()
    {
    return view ('stamp');
    }

    public function work()
    {
    return view ('data');
    }
}