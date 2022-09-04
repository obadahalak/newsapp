<?php

use Faker\Factory;
use App\Models\Quiz;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\IfmisMemberController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\CommonSectionController;
use App\Http\Controllers\Database\DataController;
use App\Http\Controllers\Api\Sections\BlogController;
use App\Http\Controllers\Api\Sections\NewsController;
use App\Http\Controllers\Api\Sections\RoomController;
use App\Http\Controllers\Api\Sections\BannerController;
use App\Http\Controllers\Api\Sections\CourseController;
use App\Http\Controllers\Api\Sections\StoresController;
use App\Http\Controllers\Api\Sections\ArticleController;
use App\Http\Controllers\Api\Sections\ServiceController;
use App\Http\Controllers\Api\Sections\BusinessController;
use App\Http\Controllers\Api\Sections\ResearchController;
use App\Http\Controllers\Api\Sections\CompetitionController;
use App\Http\Controllers\NewsAdsController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Storage;



Route::get('/ToeknNotFound', function () {
    return response()->error('cheack from Token',403);
})->name('ToeknNotFound');


Route::group([

    'middleware' => 'auth:sanctum',

    'controller' => AuthController::class,

], function () {


    Route::get('profile', 'profile');

    Route::post('UpdateProfile', 'AuthProfile');

    Route::post('logout', 'logout');

    Route::get('getProfile','getProfile');
});

///Sigin And Login
Route::controller(AuthController::class)->group(function () {

    Route::post('login', 'AuthLogin');

    Route::post('sigin', 'AuthSigin');
});
///Course And Lession And Quize///////
Route::controller(CourseController::class)->group(function () {

    Route::get('/{lan}/courseList', 'listCourse');

    Route::get('/{lan}/{course_id}/ListLessionForCourse', 'ListLessionForCourse');
    Route::get('/downloadPdf','downloadFiles');

    Route::get('/{lan}/{course_id}/ListQuzie', 'ListQuzie')->middleware('auth:sanctum');

    Route::post('/ResultQuzie', 'ResultQuzie')->middleware('auth:sanctum');

    Route::post('/sendCertificate/{course_id}','sendCertificate')->middleware('auth:sanctum');

    Route::get('downloadCertificate','downloadCertificate')->name('downloadCertificate');
});
////Likes and Comment  Controller For every Model ///////
Route::controller(ServiceController::class)->group(function () {

    Route::get('AvailableComment','AvailableComment');

    Route::get('AvailableLike','AvailableLike');

    Route::get('AvailableSearch','AvailableSearch');

    Route::post('/like/{model}/{id}', 'CreateLike')->middleware('auth:sanctum');

    Route::post('/comment/{model}/{id}', 'CretaeComment')->middleware('auth:sanctum');

    Route::get('getCategoryFromSection/{section}/{lan}', 'getCategoryFromModel');

    Route::post('search/{lan}/{modelName}','search');
});
/////Store And Products////
Route::controller(StoresController::class)->group(function () {

    Route::get('/{lan}/{catId}/getStores', 'getStores');

  //  Route::get('/{lan}/{id}/getProduct', 'getProduct');
});
///Baner Images
Route::controller(BannerController::class)->group(function () {
    Route::get('ListImage', 'ListImage');
    Route::post('uploadImage','uploadImage');
});
///Compititon And Join CompititonUser
Route::controller(CompetitionController::class)->group(function () {

    Route::get('/{lan}/getListCompetition', 'getListCompetition');
    Route::get('/getCompetitonById/{lan}/{id}','getCompetitonById');
    Route::post('/JoinCompition', 'JoinCompition')->middleware('auth:sanctum');
    Route::post('createPostCompetition','createPostCompetition')->middleware('auth:sanctum');
});

Route::controller(NewsController::class)->group(function () {

    Route::get('getNews/{lan}/{CatId}', 'getNews');
});

Route::controller(BusinessController::class)->group(function () {
    Route::get('getBusiness/{lan}/{CatId}', 'getBusiness');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('getBlog/{lan}/{catId}', 'getBlog');
});

Route::controller(ArticleController::class)->group(function () {
    Route::get('getArticle/{lan}/{catId}', 'getArticle');
});

Route::controller(ResearchController::class)->group(function(){

    Route::get('getResearch/{lan}/{catId}','getResearch');
    Route::post('createResearch','createResearch')->middleware('auth:sanctum');
});

Route::controller(VisitorController::class)->group(function(){
    Route::post('counterIncrement/{ResaerchId}','counterIncrement');
});

Route::controller(RoomController::class)->group(function(){

    Route::get('joinRoom/{roomId}','joinRoom')->middleware('auth:sanctum');
    Route::get('leaveRoom/{roomId}','leaveRoom')->middleware('auth:sanctum');
    Route::get('getRooms/{lan}','getRooms');
    Route::get('getRoomMessages/{roomId}','getRoomMessages');
    Route::post('createMessage/{roomId}','createMessage')->middleware('auth:sanctum');
    Route::get('ClearRoomChat/{roomId}','ClearRoomChat');
    Route::get('dateOfJoin/{roomId}','dateOfJoin');
});

Route::controller(IfmisMemberController::class)->group(function(){
    Route::get('getListOfMembers/{lan}','getListOfMembers');
});

Route::controller(CommonSectionController::class)->group(function(){

    Route::get('CommonSection/{lan}/{cat}','getCommonSections');
});

Route::controller(SiteInfoController::class)->group(function(){
    Route::get('getSiteInfo/{lan}','getSiteInfo');
    Route::get('contactUs','contactUs');
});

Route::controller(SuggestionController::class)->group(function(){

    Route::post('createSuggestion','createSuggestion');
});

Route::controller(NewsAdsController::class)->group(function(){

    Route::get('listAds','listAds');
});




///////////////////////////Database Seeder //////////////////////////////////////
Route::get('/createLession', [DataController::class, 'createLession']);
Route::get('/FilesLession', [DataController::class, 'FilesLession']);
Route::get('/CreateQuize', [DataController::class, 'CreateQuize']);
Route::get('/CreateStores', [DataController::class, 'CreateStores']);
Route::get('/CreateProduct', [DataController::class, 'CreateProduct']);
Route::get('createCopetiton', [DataController::class, 'createCopetiton']);
Route::get('/createNews', [DataController::class, 'createNews']);
Route::get('/createCategory', [DataController::class, 'createCategory']);
Route::get('CreateBussinus', [DataController::class, 'CreateBussinus']);
Route::get('CreateBlog', [DataController::class, 'CreateBlog']);
Route::get('CreateArticle', [DataController::class, 'getArticle']);
Route::get('createResearch',[DataController::class,'createResearch']);
Route::get('createRooms',[DataController::class,'createRooms']);
///////////////////////////////////////////////////////////////////////////////



