@extends('questions/layout')
 
@section('content')


 
    <section id="banner">
        <div class="container">
            <h1>Questions</h1>
        </div>
    </section>



    <section id="questions">
        <div class="container">

    @foreach($questions as $question)
            <div class="question">
                <div class="question-left">
                    <div class="question-stat">
                        <span>3</span>
                        <label>responses</label>
                    </div>
                    <div class="question-stat">
                        <span>35</span>
                        <label>votes</label>
                    </div>
                </div>
                <div class="question-right">
                
                    <div class="question-name">
                        <a href="#">{{ $question->title }}</a>
                    </div>
                    <div class="question-info">
                        asked at {{ $question->created_at }} <a href="">slavo</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
 {{ $questions->render() }}
@endsection

