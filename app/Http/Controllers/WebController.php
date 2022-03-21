<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class WebController extends Controller
{
    private $subject;
    private $subjects;


    public function index()
    {
        $this->subjects = Subject::where('status', 1)->orderBy('id', 'desc')->get();
        return view('website.home.home',['subjects' => $this->subjects]);
    }

    public function detail()
    {
        return view('website.course.detail');
    }
}
