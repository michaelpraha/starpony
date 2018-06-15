<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;


class ActorController extends Controller
{
    //
    public function create()
    {
        $view = view('actors/edit');

        $view->actor = new Actor();
 
        return $view;
    }

    public function store($id) 
    {
        if($id)
    {
        $actor = Actor::findOrFail($id);
    }
    else
    {
        $actor = new Actor();
    }
    
    $actor->fill(request()->only([
        'full_name',
        'year_of_birth'
    ]));
    
    $actor->save();
    
    session()->flash('success_message', 'Actor was successfully saved');
    
    return redirect()->action('ActorController@edit', ['id' => $actor->id]);

    }
}
