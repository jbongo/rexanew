<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use App\User;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    
    public function index(){
    	$users = User::all();
    	return view('back.users.index',compact('users'));
    }

    public function create(){

    	return view('back.users.add');
    }

    public function store(Request $request){

    	$request->validate([
            'civilite' => 'required|string|max:25',
            'nom' => 'required|string|max:25',
            'prenom' => 'required|string|max:55',
            'email' => 'required|string|email|max:55|unique:users',
            'password' => 'required|string',
        ]);

    	User::create([

    	"civilite"=> $request->civilite,
    	"nom"=> $request->nom,
    	"prenom"=> $request->prenom,
    	"email"=> $request->email,
    	"confirmed"=> 1,
    	"role"=> "admin",
    	"profile_complete"=> 1,
    	"password"=> Hash::make($request->password)
    	]);

    	return back()->with('ok',__("Nouvel utilisateur crée"));

    }

    public function edit(User $user){
    	return view('back.users.edit',compact('user'));
    }

    public function update(Request $request, User $user){

    	// dd($request);
    	$request->validate([
            'civilite' => 'required|string|max:25',
            'nom' => 'required|string|max:25',
            'prenom' => 'required|string|max:55',
            // 'email' => 'required|string|email|max:55|unique:users',
            'password' => 'required|string',
        ]);

    	$user->civilite = $request['civilite'];
    	$user->nom = $request['nom'];
    	$user->prenom = $request['prenom'];
    	// $user->email = $request['email'];
    	
    	if($user->password != null){
    		$user->password = Hash::make($request->password);
    	}
		
		$user->update();    	
    	return back()->with('ok',__("Utilisateur modifié"));
    }

    public function show(User $user){

    	return view('back.users.detail',compact('user'));
    }

    public function delete(User $user){

    	$user->delete();
    }
}
