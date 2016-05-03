<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*Route::get('/email', function(){

    Mail::send('emails.test', [name => 'Prageeth'], function($message)
    {
        $message->to('prageethkalhara17@gmail.com' ,'Sameera')->subject('Welcome');
    });

});*/


Route::get('sendMails','MessageController@sendMails');


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


//Prageeth's======================

//Messages----
Route::get('viewAllmessages','MessageController@viewAll');
Route::get('view_Selected_messages{id}','MessageController@view');
Route::get('deleteMessage{id}','MessageController@deleteMessage');
Route::get('temp','MessageController@temp');
Route::get('viewAllSentMessages','MessageController@viewAllSentMessages');
Route::get('message','MessageController@messageSendForm');
Route::get('email','MessageController@emailSendForm');
Route::post('sendemail','MessageController@sendemail');
Route::post('sendmessage','MessageController@sendmessage');
Route:post('ReplyforMessages_{id}','MessageController@ReplyforMessages');
Route::get('mingleMessageView','MessageController@mingleMessageView');
Route::post('mingleSenMessage','MessageController@mingleSenMessage');
Route::get('eleteMessagesB_{id}','MessageController@eleteMessagesB');
Route::get('_BletemessagesB_{id}','MessageController@_BletemessagesB');



//Advertistments---------------------------------------------------
Route::get('test','imagecontroller@test');
Route::post('upload','imagecontroller@upload');
Route::post('viewUploadImage','imagecontroller@viewUpload');
Route::get('editUploadImage','imagecontroller@editUpload');
Route::get('deleteImage{id}','imagecontroller@delete');
Route::post('viewUploadmenu','imagecontroller@menu');//only for displaying the menu

//to upload ADs
Route::get('SetUploadedImageone{id}','imagecontroller@setUploadone');
Route::get('SetUploadedImagetwo{id}','imagecontroller@setUploadtwo');
Route::get('SetUploadedImagethree{id}','imagecontroller@setUploadthree');
Route::get('SetUploadedImagefour{id}','imagecontroller@setUploadfour');


//---------------------------------------------------------------------------------
//Route::get('test','mingleController@test');
Route::get('t','mingleController@t');
Route::post('t','mingleController@t');
Route::get('x','mingleController@x');



//Mingling---------------------------------------------------------------------
Route::get('viewMingle','mingleController@getView');
Route::post('getnext{id}','mingleController@getnext');
Route::get('mingle_fav_view{id}','mingleController@get_nex_fav');
Route::get('viewMingle_table','mingleController@viewMingle');
Route::get('saveMessages{id}','mingleController@savemsg');
Route::get('startmingle','mingleController@start');

//to retrive to the correct page after liking

Route::get('get{id}','mingleController@returnpage');
//Route:get('check','imagecontroller@check');

//Admin Pannel

Route::get('AdminDashBoard','AdminPannelController@AdminDashBoard');
Route::get('userAdmin','AdminPannelController@index');
Route::get('DeleteUsers_{id}','AdminPannelController@DeleteUsers');
Route::get('DeactivateUsers_{id}','AdminPannelController@DeactivateUsers');
Route::get('ActivateUsersByAd_{id}','AdminPannelController@ActivateUsersByAd');
Route::post('SearchUsers','AdminPannelController@SearchUsers');
Route::post('SearchDeletedUsers','AdminPannelController@SearchDeletedUsers');
Route::get('DelteDelUsers_{id}','AdminPannelController@DelteDelUsers');
Route::get('viewAlllogActivities','AdminPannelController@viewAlllogActivities');
Route::get('adminRegistrationForm','AdminPannelController@adminRegistrationForm');
Route::get('replyForAdminEmails_{id}','AdminPannelController@replyForAdminEmails');
Route::post('AdminSentEmail','AdminPannelController@AdminSentEmail');
Route::get('composeForAdminEmails','AdminPannelController@composeForAdminEmails');
Route::post('sendAdminsEmail','AdminPannelController@sendAdminsEmail');


//Account Deactivate Routes
Route::get('DeactivateUser','AccountsController@DeactivateUser');
Route::get('DeleteUserFeedBack','AccountsController@Delete');
Route::post('submitFeedBack','AccountsController@submitFeedBack');




//==================

//pathmila's=============
Route::get('abc', 'AbcController@index');
Route::get('view_story/{id}','StoryController@viewStory');
Route::get('commentFormSubmit','StoryController@commentFormSubmit');
Route::get('submit_story','StoryController@submitStory');
Route::post('storyFormSubmit','StoryController@storyFormSubmit');
Route::get('contact_us','ContactController@contactUs');
Route::post('contactFormSubmit','ContactController@contactFormSubmit');
Route::post('commentAjax','StoryController@commentAjax');
Route::post('showCommentAjax','StoryController@showCommentAjax');
Route::post('showCommentAjax1{id}','StoryController@showCommentAjax1');
Route::post('refreshNotifications','NotificationController@refreshNotifications');
Route::post('sendDateRequest','AbcController@sendDateRequest');
Route::get('loadForgot','StoryController@loadForgot');

Route::get('set_story1/{id}','StoryController@setStory1');
Route::get('set_story2/{id}','StoryController@setStory2');
Route::get('delete_story/{id}','StoryController@deleteStory');

Route::post('showAnswer','AdminController@showAnswer');
Route::post('updateAnswer','AdminController@updateAnswer');

//admin
Route::get('successStoryPanel','AdminController@adminPanel');
Route::get('contactPanel','AdminController@contactPanel');





//====================

//Savidya's
Route::post('search_social','searchController@searchSocial');
Route::post('search_appearance','searchController@searchAppearance');
Route::post('Results','searchController@searchResult');
Route::post('beforeRegister','searchController@beforeRegister');
Route::get('Search','searchController@searchMain2');
Route::get('ResultSession','searchController@ResultSession');

Route::get('uploadProfile','searchController@uploadProfile');
Route::post('sendRequest_{id}','searchController@SendRequest');
Route::post('showInterest_{id}','searchController@showInterest');
Route::get('{id}','searchController@ProfileLoad');
Route::post('editProfile_{id}','searchController@EditProfile');

//Edit Profile routes (Savidya)
Route::post('changeProfilePicture_{id}','EditProfileController@changeProfilePicture');
Route::post('updateBasicInfo','EditProfileController@updateBasicInfo');
Route::post('updateContactInfo','EditProfileController@updateContactInfo');
Route::post('updateAppearance','EditProfileController@updateAppearance');
Route::post('updateEducation','EditProfileController@updateEducation');
Route::post('updateOther','EditProfileController@updateOther');
Route::post('chanePro','EditProfileController@changePro');

//request handling routes(savidya)
Route::get('acceptReq','FriendRequestController@acceptReq');

Route::post('suggestedPartners_{id}','ProfileController@suggestedPartners');
Route::post('addPhoto','ProfileController@addPhoto');
Route::post('addPt','ProfileController@addPt');
Route::post('loadPhoto_{id}','ProfileController@loadPhoto');
Route::post('deletePhotos','ProfileController@deletePhotos');

//privacy setting
Route::get('ShowDetails','ProfileController@ShowDetails');
Route::get('HideDetails','ProfileController@HideDetails');
Route::get('ShowPhotos','ProfileController@ShowPhotos');
Route::get('HidePhotos','ProfileController@HidePhotos');



//==================

//Damindu's=========
// Authentication routes...
Route::get('registerTest', function(){ return view('auth.registerTest'); });
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);




// Registration routes...
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



//profile routes...
Route::get('addMyProfileInformation/{id}', 'UserProfileController@showAddPage');
Route::post('addinfo','UserProfileController@store');
Route::get('profile/{id}', 'UserProfileController@showProfile');
Route::post('profile/upload', function() {
    return view('user.upload');
});

Route::get('manageUsers', 'UserController@showManage');
Route::get('userdelete/{id}', 'UserController@userdelete');





// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');



// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
Route::post('search', 'UserProfileController@search');



//Preview of the blank page
Route::get('blank', function(){
    return view('blank');
});
