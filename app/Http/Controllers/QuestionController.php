<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Answer;
use App\Question;

class QuestionController extends Controller
{
    public function index()
    {

        // $result = DB::table('questions')->latest()->get();

        $result = Question::latest()->get();

        // prepare the view for the list of questions
        $view = view('questions/index');

        // give the array of questions where it will be available as a variable $questions
        $view->questions = $result;
        return $view;
    }

    public function show($question_id)
    {

        $question = Question::find($question_id);

        // fluent "SELECT FROM `answers` WHERE `question_id` = {$question_id}
        // $answers = DB::table('answers')
        //     ->where('question_id', $question_id)
        //     ->latest()
        //     ->get();


        // eloquent, same as above
        // $answers = Answer::where('question_id', $question_id)
        //     ->oldest()
        //     ->get();

        $answers = $question->answers()->oldest()->get();



        // $questions = DB::table('questions')
        //     ->where('id', $question_id)
        //     ->first();

        // eloquent, same as above
        // $question = Question::find($question_id);
        
        // prepare the view for the list of questions
        $view = view('questions/show');
        
        $view->answers = $answers;
        $view->question = $question;

        return $view;
    }

    public function create()
    {
        $view = view('questions/create');

        return $view;
    }

}
