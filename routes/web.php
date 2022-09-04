<?php

use App\Http\Controllers\Api\sections\CourseController;
use App\Http\Controllers\ControlPanel\AdminNewsController;
use App\Http\Controllers\ControlPanel\AdminRoomController;
use App\Http\Controllers\ControlPanel\AuthAdminController;
use App\Http\Controllers\ControlPanel\DashBoardController;
use App\Http\Controllers\ControlPanel\AdminIfmisController;
use App\Http\Controllers\ControlPanel\AdminResearchController;
use App\Http\Controllers\ControlPanel\AdminSiteInfoController;
use App\Http\Controllers\ControlPanel\AdminCompatitionController;
use App\Http\Controllers\ControlPanel\AdminSuggestionsController;

Route::controller(AuthAdminController::class)->group(function(){

    Route::get('login','loginAdmin')->name('Login');
    Route::post('AuthAdmin','AuthAdmin')->name('AuthAdmin');
    Route::post('editProfile','editProfile')->name('EditProfile');
    Route::get('logoutAdmin','logoutAdmin')->name('LogoutAdmin');
});


Route::controller(AdminNewsController::class)->group(function (){

    Route::get('/{lan}/News','newsView')->name('News');
    Route::post('Create-News','CreateNews')->name('CreateResearch');
    Route::post('delete-news/{newsId}','deleteNews')->name('deleteNews');

});

Route::controller(AdminResearchController::class)->group(function (){

    Route::get('{lan}/Researches','researchView')->name('Researches');
    Route::get('/ResearchDetails/{lan}/{id}/','ResearchDetails')->name('ResearchDetails');
    Route::post('toggleResearch/{id}/{status}','toggleResearch')->name('toggleResearch');
    Route::post('/deleteResearch/{id}','deleteResearch')->name('deleteResearch');

});

Route::controller(AdminSiteInfoController::class)->group(function(){

    ////////// Banner /////////
    Route::get('Banners','getBanersImage')->name('Banners');
    Route::post('deletebannerImage/{id}','deleteBannerImage')->name('deleteBannerImage');
    Route::post('create-Banner','createBannerImage')->name('createBannerImage');

    ////PrivacyPolicy////
    Route::get('Information/PrivacyPolicy','PrivacyPolicy')->name('PrivacyPolicy');
    Route::post('PrivacyPolicy-Edit','PrivacyPolicyEdit')->name('PrivacyPolicyEdit');

    ///////////////
    Route::get('Information/Visions','vision')->name('Visions');
    Route::post('Visions-edit','visinEdit')->name('visinEdit');

    //////////////
    Route::get('Information/BecomeMember','BecomeMember')->name('BecomeMember');
    Route::post('BecomeMember-edit','BecomeMemberEdit')->name('BecomeMemberEdit');

    /////////

    Route::get('Information/IntellectualPropertyRights','IntellectualPropertyRights')->name('IntellectualPropertyRights');
    Route::post('PropertyRights-edit','PropertyRightsEdit')->name('PropertyRightsEdit');

    /////////////
    Route::get('Information/EvacuationResponsibilaty','EvacuationResponsibilaty')->name('EvacuationResponsibilaty');
    Route::post('PropertyRights-edit','ResponsibilatyEdit')->name('ResponsibilatyEdit');


    Route::get('Information/Contact','ContactUs')->name('Contact');
    Route::post('ContactUs-edit','ContactUsEdit')->name('ContactUsEdit');


});


Route::controller(DashBoardController::class)->group(function(){

    Route::get('DashBoard','DasahBoardView')->name('DashBoard');
    Route::get('userCountry','userCountry');
});

Route::controller(AdminIfmisController::class)->group(function (){
    Route::get('Information/IFMISMembers','IFMISMembersView')->name('IFMISMembers');
    Route::post('create-Ifmis','createIfmis')->name('createIfmis');
    Route::post('delete-Member/{id}','deleteIfmisById')->name('deleteIfmisById');
});

Route::controller(AdminRoomController::class)->group(function (){ 
    Route::get('Chat','getRoomsView')->name('Chat');
    Route::post('edit-Room','editRoom');
});

Route::controller(AdminCompatitionController::class)->group(function (){
    Route::get('Competitions','getCompatiton')->name('Competitions');
    Route::get('PostCompetitions/{id}','getPostCompetitions')->name('getPostCompetitions');
    Route::post('create-Compatition','createCompatition')->name('createCompatition');
});

Route::controller(AdminSuggestionsController::class)->group(function (){
    Route::get('getSuggestions','getSuggestions')->name('Suggestions');
  
});






Route::get('Auth/Settings', function () {
    return view('Auth.Settings');
})->name('Settings');



Route::get('/Users', function () {
    return view('Users');
})->name('Users');

Route::get('Courses/', function () {
    return view('Courses.Courses');
})->name('Courses');


Route::get('/Stores', function () {
    return view('Stores.Stores');
})->name('Stores');

Route::get('Articles/', function () {
    return view('Articles.Articles');
})->name('Articles');


Route::get('/Trips&Business', function () {
    return view('Trips&Business');
})->name('Trips&Business');





Route::get('Articles/ArticleDetails', function () {
    return view('Articles.ArticleDetails');
})->name('ArticleDetails');

Route::get('Competitions/AddCompetition', function () {
    return view('Competition.AddCompetition');
})->name('AddCompetition');

Route::get('Courses/AddCourse', function () {
    return view('Courses.AddCourse');
})->name('AddCourse');

Route::get('Courses/CourseDetails', function () {
    return view('Courses.CourseDetails');
})->name('CourseDetails');






Route::get('my', function (Request $request) {
    return  $request->session()->all();
});
Route::get('/changeMode', function (Request $request) {

    $value = $request->session()->get('theme');



    if ($value == "dark-mode") {

        $request->session()->forget(['theme', 'dark-mode']);
        $request->session()->put('theme', 'light-mode');
    } else {
        $request->session()->forget(['theme', 'light-mode']);

        $request->session()->put('theme', 'dark-mode');
    }
    return redirect()->back();
});
