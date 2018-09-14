<?php


Route::get('/', function () {
    return view('front.home');
});

Auth::routes();
Route::middleware('auth')->group(function(){
//###### Les utilisateurs #########"

Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/user/create', 'UsersController@create')->name('addUser');
Route::post('/user/store', 'UsersController@store')->name('storeUser');
Route::get('/user/edit/{user}', 'UsersController@edit')->name('editUser');
Route::post('/user/update/{user}', 'UsersController@update')->name('updateUser');
Route::get('/user/show/{user}', 'UsersController@show')->name('showUser');
Route::post('/user/delete/{user}', 'UsersController@delete')->name('deleteUser');

Route::get('/user/complete_infos', 'UsersController@completeInfos')->name('complete_infos');
Route::post('/user/save_complete_infos', 'UsersController@saveCompleteInfos')->name('save_complete_infos');
// profil de l'utilisateur
Route::get('/user/profil', 'UsersController@profil')->name('profil');


// Fin Utilisateurs

Route::get('/home', 'HomeController@index')->name('home');

// liste de mes feedsback
Route::get('/mesFeedback', 'FeedbackController@index')->name('mesFeeds');
// liste des feedsback
Route::get('/lesFeedback', 'FeedbackController@indexAllFeedback')->name('lesFeeds');

// supprimer un feedback
Route::put('/mesFeedback/{feed}/delete', 'FeedbackController@destroy')->name('delFeed');

// affichage du formulaire de modification de feedback
Route::get('/mesFeedback/{feed}/edit', 'FeedbackController@edit')->name('editFeed');

// modification d'un feedback
Route::post('/mesFeedback/{feed}', 'FeedbackController@update')->name('updateFeed');

// affichage du formulaire d'ajout d'un feedback
Route::get('/addFeedback', 'FeedbackController@create')->name('addFeed');

// enregistrement d'un feedback
Route::post('/addFeedback', 'FeedbackController@store')->name('adddFeed');

//afficher details d'un feedback
Route::get('/showFeedback/{feed}', 'FeedbackController@show')->name('showFeed');

// Activer un feedback
Route::get('/activeFeed/{feed}','FeedbackController@activeFeed')->name('activeFeed');

// Désactiver un feedback
Route::get('/desactiveFeed/{feed}','FeedbackController@desactiveFeed')->name('desactiveFeed');

});
//************** front ******************

// liste de tous les feedsbacks sur le site
Route::get('/feedback', 'FeedbackController@feedback')->name('feedback');

//afficher details d'un feedback
Route::get('/detailFeedback/{feed}','FeedbackController@showfront')->name('showfrontFeed');

// renitialisation du mot de passe
Route::get('/password-reset', function () {
    return view('auth.passwords.email');
})->name('password-reset');


// Envoie de mail par le formulaire de contact
Route::post('/contactForm', 'contactFormController@sendMail')->name('contactform');
