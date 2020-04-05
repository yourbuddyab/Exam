<?php

namespace App\Http\Controllers;

use App\exam;
use App\student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalStudent = count(student::all());
        $totalquestion = count(exam::all());
        return view('home', compact('totalStudent', 'totalquestion'));
    }
}
