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

        $feedbacks = Feedback::where('user_id',Auth()->id())->get();
        $user = User::where('id',Auth()->id())->first();

    	return view('back.feedback.index',compact('feedbacks','user'));
    }

    public function indexAllFeedback(){

        $feedbacks = Feedback::all();
        $user = User::where('id',Auth()->id())->first();

    	return view('back.feedback.indexAll',compact('feedbacks','user'));
    }

    public function create(){
        $user = User::where('id',Auth()->id())->first();

    	return view('back.feedback.add',compact('user'));
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
        $user = User::where('id',Auth()->id())->first();

        return view('back.feedback.edit',compact('feedback','user'));
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
        $user = User::where('id',Auth()->id())->first();

        return view('back.feedback.detail',compact('feedback','user') );
    }

    public function activeFeed(Feedback $feed){

        $feed->statut = 1;
        $feed->update();
        return back()->with('ok',__("Feedback activé"));
    }

    public function desactiveFeed(Feedback $feed){
        $feed->statut = 0;
        $feed->update();
        return back()->with('ok',__("Feedback désactivé"));
        
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
