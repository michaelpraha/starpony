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

        $result = Question::latest()->paginate(5);

        // prepare the view for the list of questions
        $view = view('questions/index');

        // give the array of questions where it will be available as a variable $questions
        $view->questions = $result;
        return $view;
    }

    public function show($id)
    {

        $question = Question::find($id);

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

    public function edit()
    {
        // retrieve and existionQuestion from DB or fail with 404
        $question - Question::findOrFail($id);

        $view = view('questions/create');
        $view->question = $question;
        return $view;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:10',
            'text' => 'required'
        ]);

        if ($id) {
            Question::findOrFail($id);
        } else {
            $question = new Question();
        }

        // mass add
        $question->fill([
            'title' => $request->input('title'),
            'text' => $request->input('text')
        ]);

        // or individually 
        // $question->title = $request->input('title');
        // $question->text = $request->input('text');

        $question->save();

        session()->flash('success_message', 'Success!');

        return redirect()->action('QuestionController@edit', ['id' => $question->id]);
    }

}
