<?php

namespace App\Http\Controllers;

use App\Model\Question;
use Illuminate\Http\Request;
use App\Http\Resources\QuestionResource;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return QuestionResource::collection(Question::latest()->get());
    }


    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //auth()->user()->question()->create($request->all()); //Fill the user_id 
        Question::create($request->all());
        return response('Created', 200);
    }

    public function show(Question $question)
    {
        return new QuestionResource($question);
    }

  
    public function edit(Question $question)
    {
        //
    }

  
    public function update(Request $request, Question $question)
    {
        //
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return response('No content',204);
    }
}
