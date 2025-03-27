<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function showCreateQuestionForm()
    {
        return view("exam.create");
    }
    public function createQuestion(Request $request)
    {
        dd($request);
    }
}
