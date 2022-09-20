<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Stevebauman\Location\Facades\Location;
use App\Http\Controllers\Api\sections\CourseController;
use App\Http\Controllers\Adminn\StatusProjectController;
use App\Http\Controllers\ControlPanel\AdminNewsController;
use App\Http\Controllers\ControlPanel\AdminRoomController;
use App\Http\Controllers\ControlPanel\AuthAdminController;
use App\Http\Controllers\ControlPanel\DashBoardController;
use App\Http\Controllers\ControlPanel\AdminIfmisController;
use App\Http\Controllers\ControlPanel\AdminCourseController;
use App\Http\Controllers\ControlPanel\AdminAdsNewsController;
use App\Http\Controllers\ControlPanel\AdminResearchController;
use App\Http\Controllers\ControlPanel\AdminSiteInfoController;
use App\Http\Controllers\ControlPanel\AdminCompatitionController;
use App\Http\Controllers\ControlPanel\AdminSuggestionsController;

Route::get('/test', function () {
    Artisan::call('optimize:clear');
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


Route::group([

    'middleware' => 'auroraTeam',


], function () {



    Route::controller(AuthAdminController::class)->group(function () {

        Route::get('/', 'loginAdmin')->name('Login')->middleware('guest');
        Route::post('AuthAdmin', 'AuthAdmin')->name('AuthAdmin');
        Route::post('editProfile', 'editProfile')->name('EditProfile')->middleware('auth:admin');
        Route::get('logoutAdmin', 'logoutAdmin')->name('LogoutAdmin')->middleware('auth:admin');
    });


    Route::group([

        'middleware' => 'auth:admin',


    ], function () {




        Route::controller(AdminResearchController::class)->group(function () {

            Route::get('{lan}/Researches', 'researchView')->name('Researches');
            Route::post('/Create-Researche', 'researchCreate')->name('researchCreate');
            Route::get('/ResearchDetails/{lan}/{id}/', 'ResearchDetails')->name('ResearchDetails');
            Route::post('toggleResearch/{id}/{status}', 'toggleResearch')->name('toggleResearch');
            Route::post('/deleteResearch/{id}', 'deleteResearch')->name('deleteResearch');
        });

        Route::controller(AdminSiteInfoController::class)->group(function () {

            Route::post('globalVisits', 'visits');

            ////////// Banner /////////

            Route::get('Banners', 'getBanersImage')->name('Banners');
            Route::post('deletebannerImage/{id}', 'deleteBannerImage')->name('deleteBannerImage');
            Route::post('create-Banner', 'createBannerImage')->name('createBannerImage');

            ////PrivacyPolicy////
            Route::get('Information/PrivacyPolicy', 'PrivacyPolicy')->name('PrivacyPolicy');
            Route::post('PrivacyPolicy-Edit', 'PrivacyPolicyEdit')->name('PrivacyPolicyEdit');

            ///////////////
            Route::get('Information/Visions', 'vision')->name('Visions');
            Route::post('Visions-edit', 'visinEdit')->name('visinEdit');

            //////////////
            Route::get('Information/BecomeMember', 'BecomeMember')->name('BecomeMember');
            Route::post('BecomeMember-edit', 'BecomeMemberEdit')->name('BecomeMemberEdit');

            /////////

            Route::get('Information/IntellectualPropertyRights', 'IntellectualPropertyRights')->name('IntellectualPropertyRights');
            Route::post('PropertyRightsEdit', 'PropertyRightsEdit')->name('PropertyRightsEdit');

            /////////////
            Route::get('Information/EvacuationResponsibilaty', 'EvacuationResponsibilaty')->name('EvacuationResponsibilaty');
            Route::post('PropertyRights-edit', 'ResponsibilatyEdit')->name('ResponsibilatyEdit');


            Route::get('Information/Contact', 'ContactUs')->name('Contact');
            Route::post('ContactUs-edit', 'ContactUsEdit')->name('ContactUsEdit');


            ///////////ReoprtUsers //////////////////////////////////
            Route::get('reports', 'getReports')->name('reports');
            Route::post('blockUser/{id}', 'blockUser')->name('blockUser');
        });


        Route::controller(DashBoardController::class)->group(function () {

            Route::get('DashBoard', 'DasahBoardView')->name('DashBoard');
            Route::get('userCountry', 'userCountry');
            Route::get('Users', 'usersApp')->name('Users');
        });

        Route::controller(AdminIfmisController::class)->group(function () {
            Route::get('Information/IFMISMembers', 'IFMISMembersView')->name('IFMISMembers');
            Route::post('create-Ifmis', 'createIfmis')->name('createIfmis');
            Route::post('delete-Member/{id}', 'deleteIfmisById')->name('deleteIfmisById');
        });

        Route::controller(AdminRoomController::class)->group(function () {
            Route::get('Chat', 'getRoomsView')->name('Chat');
            Route::post('edit-Room', 'editRoom');
        });

        Route::controller(AdminCompatitionController::class)->group(function () {
            Route::get('Competitionssuggestions', 'getCompatiton')->name('Competitions');
            Route::get('PostCompetitions/{id}', 'getPostCompetitions')->name('getPostCompetitions');
            Route::post('create-Compatition', 'createCompatition')->name('createCompatition');
        });

        Route::controller(AdminSuggestionsController::class)->group(function () {
            Route::get('getSuggestions', 'getSuggestions')->name('Suggestions');
        });

        Route::controller(AdminAdsNewsController::class)->group(function () {

            Route::get('NewsBanner', 'listAds')->name('NewsBanner');
            Route::post('create-Ads', 'createAdsNews')->name('createAdsNews');
        });
        Route::controller(AdminCourseController::class)->group(function () {

            Route::get('Courses', 'courses')->name('Courses');
            Route::get('Course-Details/{id}', 'CourseDetails')->name('CourseDetails');
            Route::get('Add-course', 'AddCourse')->name('AddCourse');
            Route::post('StoreCourse', 'StoreCourse')->name('StoreCourse');
            Route::post('DeleteCourse/{id}', 'DeleteCourse')->name('DeleteCourse');
            Route::get('CourseEdit/{id}', 'edit')->name('EditCourse');
            Route::post('CourseUpdate/{id}', 'update')->name('UpdateCourse');

            Route::post('LessionUpdate/{id}', 'updateLession')->name('UpdateLession');

            Route::post('QuizzeUpdate/{id}', 'QuizzeUpdate')->name('QuizzeUpdate');
        });

        Route::get('Auth/Settings', function () {
            return view('Auth.Settings');
        })->name('Settings');



        Route::get('Competitions/AddCompetition', function () {
            return view('Competition.AddCompetition');
        })->name('AddCompetition');
    });


    Route::get('my', function (Request $request) {
        return  $request->session()->all();
    });


    /////////////////////

    Route::controller(StatusProjectController::class)->group(function () {


        Route::get('/AuroraSuperAdmin', 'login');

        Route::post('/AuthSuperAdmin', 'AuthSAdmin')->name('auroraAdmin');

        Route::get('superAdmin', 'superAdmin')->name('superAdmin')->middleware('auth:superAdmin');
        Route::post('changeStatus', 'changeStatus')->name('changeStatus')->middleware('auth:superAdmin');
    });
});
