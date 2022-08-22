<?php

use App\Http\Controllers\Api\sections\CourseController;
use App\Http\Controllers\ControlPanel\AuthAdminController;
use App\Http\Controllers\ControlPanel\DashBoardController;







Route::controller(AuthAdminController::class)->group(function(){

    Route::get('loginAdmin','loginAdmin')->name('Login');
    Route::post('AuthAdmin','AuthAdmin')->name('AuthAdmin');
    Route::post('editProfile','editProfile')->name('EditProfile');
    Route::get('logoutAdmin','logoutAdmin')->name('LogoutAdmin');
});


Route::controller(DashBoardController::class)->group(function(){

Route::get('DasahBoard','DasahBoardView')->name('DasahBoard');

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

Route::get('Competitions/', function () {
    return view('Competitions.Competitions');
})->name('Competitions');

Route::get('/News', function () {
    return view('News');
})->name('News');

Route::get('/Stores', function () {
    return view('Stores');
})->name('Stores');

Route::get('Articles/', function () {
    return view('Articles.Articles');
})->name('Articles');

Route::get('Researches/', function () {
    return view('Researches.Researches');
})->name('Researches');

Route::get('/Trips&Business', function () {
    return view('Trips&Business');
})->name('Trips&Business');

Route::get('/Chat', function () {
    return view('Chat');
})->name('Chat');

Route::get('/Banners', function () {
    return view('Banners');
})->name('Banners');

Route::get('Researches/ResearchDetails', function () {
    return view('Researches.ResearchDetails');
})->name('ResearchDetails');

Route::get('Articles/ArticleDetails', function () {
    return view('Articles.ArticleDetails');
})->name('ArticleDetails');

Route::get('Competitions/AddCompetition', function () {
    return view('Competition.AddCompetition');
})->name('AddCompetition');

Route::get('Courses/AddCourse', function () {
    return view('Courses.AddCourse');
})->name('AddCourse');

Route::get('Information/PrivacyPolicy', function () {
    return view('Information.PrivacyPolicy');
})->name('PrivacyPolicy');

Route::get('Information/EvacuationResponsibilaty', function () {
    return view('Information.EvacuationResponsibilaty');
})->name('EvacuationResponsibilaty');

Route::get('Information/IntellectualPropertyRights', function () {
    return view('Information.IntellectualPropertyRights');
})->name('IntellectualPropertyRights');

Route::get('Information/BecomeMember', function () {
    return view('Information.BecomeMember');
})->name('BecomeMember');

Route::get('Information/Visions', function () {
    return view('Information.Visions');
})->name('Visions');

Route::get('Information/IFMISMembers', function () {
    return view('Information.IFMISMembers');
})->name('IFMISMembers');

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
