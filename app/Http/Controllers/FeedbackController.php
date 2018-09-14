<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Feedback;

class FeedbackController extends Controller
{
    //

    public function index(){

    	$feedbacks = Feedback::all();
    	return view('back.feedback.index',compact('feedbacks'));
    }

    public function create(){
    	return view('back.feedback.add');
    }

    public function store(Request $request){
    	
    	 //dd(Feedback::all());

    	Feedback::create([
    		"secteur" => $request["secteur"],
    		"titre" => $request["titre"],
    		"description" => $request["feedback"],
    		"pays" => $request["pays"],
            "statut" => 1,
            "user_id" => auth()->id()
    	]);

    	return back()->with('ok',__("Feedback enregistré"));

    }

    public function destroy(Feedback $feed){

        $val = $feed->delete();
       
         return response()->json();
    }

    public function edit(Feedback $feed){
        $feedback = $feed;
        return view('back.feedback.edit',compact('feedback'));
    }

    public function update(Feedback $feed, Request $request){
        
        // dd($request);
         $feed->secteur = $request['secteur'];
         $feed->pays = $request['pays'];
         $feed->titre = $request['titre'];
         $feed->description = $request['feedback'];

         $feed->update();
        return back()->with('ok',__("Feedback modifié"));
    }

    public function show(Feedback $feed){

        $feedback = $feed;
        return view('back.feedback.detail',compact('feedback') );
    }

    // Front

    public function feedback(){

    	$feedbacks = Feedback::where('statut',1)->get();
        return view('front.feedbacks',compact('feedbacks'));
    }

    public function showfront(Feedback $feed){

        $feedback = $feed;
        return view('front.detailFeedback',compact('feedback') );
    }

    
}
