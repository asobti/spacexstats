<?php
// Route to handle redirect if no intended URL from login
Route::get('/user', 'UsersController@get')->before('authenticate');

Route::group(array('prefix' => 'users'), function() {

    Route::group(array('middleware' => 'mustBe:Yourself'), function() {

        // Main edit functionality
        Route::get('/{username}/edit', 'UsersController@getEdit');
        Route::post('/{username}/edit', 'UsersController@postEditProfile');

        // Individual edit functionality
        Route::patch('/{username}/edit/emailnotifications', 'UsersController@editEmailNotifications');
        Route::patch('/{username}/edit/smsnotifications', 'UsersController@editSMSNotifications')->before('mustBe:Subscriber');
        Route::patch('/{username}/edit/redditnotifications', 'UsersController@editRedditNotifications')->before('mustBe:Subscriber');

        Route::get('/{username}/notes', 'UsersController@notes');
    });

    Route::get('/{username}/uploads', 'UsersController@uploads');
    Route::get('/{username}/comments', 'UsersController@comments');
    Route::get('/{username}/favorites', 'UsersController@favorites');

    Route::get('/{username}', 'UsersController@get');
});