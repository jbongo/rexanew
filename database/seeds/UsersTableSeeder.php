<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nom" => "admin",
            "prenom" => "admin",
            "email" => "admin1@gmail.com",
            "password" => bcrypt('admin'),
            "civilite" => "Mr",
            "adresse" => "7 rue des champs",
            "phone" => "67 77 77 66 55",
            "date_naissance" => now(),
            "phone" => "67 77 77 66 55",
            "secteur_activite" => "info",
            "poste" => "directeur",
            "code_postal" => "75002",
            "ville" => "Paris",
            "pays" => "France",
            "role" => "admin",
            "profile_complete" => 1,
        ]);
    }
}            
