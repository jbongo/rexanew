<?php


Route::get('/', function () {
    return view('front.home');
});

Auth::routes();

//###### Les utilisateurs #########"

Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/user/create', 'UsersController@create')->name('addUser');
Route::post('/user/store', 'UsersController@store')->name('storeUser');
Route::get('/user/edit/{user}', 'UsersController@edit')->name('editUser');
Route::post('/user/update/{user}', 'UsersController@update')->name('updateUser');
Route::get('/user/show/{user}', 'UsersController@show')->name('showUser');
Route::post('/user/delete/{user}', 'UsersController@delete')->name('deleteUser');


// Fin Utilisateurs

Route::get('/home', 'HomeController@index')->name('home');

// liste de mes feedsback
Route::get('/mesFeedback', 'FeedbackController@index')->name('mesFeeds');

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


//************** front ******************

// liste de tous les feedsbacks sur le site
Route::get('/feedback', 'FeedbackController@feedback')->name('feedback');

//afficher details d'un feedback
Route::get('/detailFeedback/{feed}','FeedbackController@showfront')->name('showfrontFeed');
