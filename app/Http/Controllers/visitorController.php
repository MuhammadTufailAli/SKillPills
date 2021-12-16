<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class visitorController extends Controller
{
    function gotohome()
    {
        return view('home');
    }
    function gotocourses()
    {
        return view('courses');
    }
    function gotonews()
    {
        return view('news');
    }

    function gotohowitworks()
    {
        return view('Howitworks');
    }

    function gotocontactus()
    {
        return view('contactus');
    }

    function gotosignup()
    {
        return view('Signup');
    }

    function gotosignin()
    {
        return view('signin');
    }

    public function gotosignupdatabase(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $pass = $request->input('password');
        DB::unprepared("insert into registeredstudents (firstname,lastname,email,password) values ('$firstname','$lastname','$email','$pass')");
        return redirect('signin');
    }
}
