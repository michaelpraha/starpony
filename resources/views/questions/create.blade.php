@extends('questions/layout')

@section('content')

    <form action="" method="post">

        <div class="form-group">
        {!! Form::label('title', 'Title of the question', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
        {!! Form::label('text', 'Text', ['class' => 'control-label']) !!}
        {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::submit('Save') !!}
        </div>

    </form>

@endsection