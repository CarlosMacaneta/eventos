<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function helloWorld()
    {
        return "Hello World!";
    }

    public function hello(string $name="I'm nobody")
    {
        return "Hello, ". $name;
    }
}
