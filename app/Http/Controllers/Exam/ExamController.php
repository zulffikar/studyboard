<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{

    public function index()
    {

        return view('exam.exam');
    }

    public function discuss()
    {

        return view('exam.discuss');
    }

    public function score()
    {

        return view('exam.score');
    }

    public function confirm()
    {

        return view('exam.confirm');
    }

    public function video()
    {
        return view('exam.video');
    }
}
