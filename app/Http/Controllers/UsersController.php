<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File ;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\Facades\Image as InterventionImage;
class UsersController extends Controller
{
    
    public function index(){
    	$users = User::all();
    	return view('back.users.index',compact('users','user'));
    }

    public function create(){
		$user = User::where('id',Auth()->id())->first();

    	return view('back.users.add',compact('user'));
    }

    public function store(Request $request){

	//	dd($request);
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
	
	public function completeInfos(){

		$user = User::where('id',Auth()->id())->first();
		return view('back.users.complete_info',compact('user'));
	}

	public function saveCompleteInfos(Request $request){

		$user = User::where('id',Auth()->id())->first();

		$user->civilite = $request['civilite'];
    	$user->nom = $request['nom'];
    	$user->prenom = $request['prenom'];
    	$user->pays = $request['pays_origine'];
    	$user->phone = $request['telephone'];
    	$user->adresse = $request['adresse'];
    	$user->code_postal = $request['code_postal'];
    	$user->ville = $request['ville'];
    	$user->date_naissance = $request['date_naissance'];
    	$user->secteur_activite = $request['secteur'];
    	$user->poste = $request['poste'];
    	$user->profile_complete = 1;
		
		$request->validate([
            "photo" => "image|max:5000|nullable",
        ]);

        if($request->hasFile('photo')){
            $avatar = $request->file('photo');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $filename = $user->id.'_'.$user->nom.'_'.$filename;
            InterventionImage::make($avatar)->resize(300, 300)->save( public_path('\img\photo_profile\\' . $filename ) );
            
            
            // on supprime l'ancienne photo si elle existe
            if($user->photo) {
                
                $img = public_path('img/photo_profile/'.$user->photo);
              
                if(File::exists($img) ){
                   File::delete($img);
               }
               
            }
			$user->photo = $filename;
		}
		
			$user->update();
		return back()->with('ok',__("Félicitation vos informations sont à jour"));

	}

	public function profil(){

		$user = User::where('id',auth()->id())->firstorfail();

		return view('back.users.profil',compact('user'));
	}
}
