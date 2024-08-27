<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemplateController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\FurnisController;
use App\Http\Controllers\DecorasController;
use App\Http\Controllers\FlowersController;
use App\Http\Controllers\SoundsController;
use App\Http\Controllers\HotsController;
use App\Http\Controllers\MildsController;
use App\Http\Controllers\AromaticsController;
use App\Http\Controllers\HerbsController;
use App\Http\Controllers\VegesController;
use App\Http\Controllers\FrocksController;
use App\Http\Controllers\ThrousesController;
use App\Http\Controllers\ShirtsController;
use App\Http\Controllers\SareesController;
use App\Http\Controllers\BlousesController;
use App\Http\Controllers\KidsController;
use App\Http\Controllers\BagsController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\BakersController;
use App\Http\Controllers\WoodsController;
use App\Http\Controllers\PaintsController;
use App\Http\Controllers\CeramicsController;
use App\Http\Controllers\ResinsController;
use App\Http\Controllers\GiftsController;
use App\Http\Controllers\DressesController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\PoruwasController;
use App\Http\Controllers\CateringsController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\MusicsController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Signup\SignupController;
use App\Http\Controllers\Trend\TrendController;

Route::resource("/food", FoodController ::class);
Route::resource("/dishes", DishesController ::class);
Route::resource("/furnis", FurnisController ::class);
Route::resource("/decoras", DecorasController ::class);
Route::resource("/flowers", FlowersController ::class);
Route::resource("/sounds", SoundsController ::class);
Route::resource("/hots", HotsController ::class);
Route::resource("/milds", MildsController ::class);
Route::resource("/aromatics", AromaticsController ::class);
Route::resource("/herbs", HerbsController ::class);
Route::resource("/veges", VegesController ::class);
Route::resource("/frocks", FrocksController ::class);
Route::resource("/throuses", ThrousesController ::class);
Route::resource("/shirts", ShirtsController ::class);
Route::resource("/sarees", SareesController ::class);
Route::resource("/blouses", BlousesController ::class);
Route::resource("/kids", KidsController ::class);
Route::resource("/bags", BagsController ::class);
Route::resource("/ingredients", IngredientsController ::class);
Route::resource("/bakers", BakersController ::class);
Route::resource("/woods", WoodsController ::class);
Route::resource("/paints", paintsController ::class);
Route::resource("/ceramics", CeramicsController ::class);
Route::resource("/resins", ResinsController ::class);
Route::resource("/gifts", GiftsController ::class);
Route::resource("/dresses", DressesController ::class);
Route::resource("/cards", CardsController ::class);
Route::resource("/poruwas", PoruwasController ::class);
Route::resource("/caterings", CateringsController ::class);
Route::resource("/photos", PhotosController ::class);
Route::resource("/musics", MusicsController ::class);
Route::resource("/hotels", HotelsController ::class);



// Route::get('/', function () {
//     return view('cat1');
// });

// Route::get('/spi', function () {
//     return view('cat2');
// });

// Route::get('/clo', function () {
//     return view('cat3');
// });

// Route::get('/craft', function () {
//     return view('cat4');
// });

// Route::get('/wed', function () {
//     return view('cat5');
// });

// Route::get('/trend', function () {
//     return view('trend1');
// });

Route::get('/trend',[TrendController::class,'index'])->name('load.trends');


//route::get('/cat1',[TemplateController::class,'index']);
//route::get('/cat2',[TemplateController::class,'index1']);
//route::get('/cat3',[TemplateController::class,'index2']);
//route::get('/cat4',[TemplateController::class,'index3']);
//route::get('/cat5',[TemplateController::class,'index4']);
//route::get('/cat11',[TemplateController::class,'index5']);
//route::get('/addcategories',[categoriescontroller::class,'index6']);
//route::post('/savefood',[categoriescontroller::class,'index7']);
//route::Controllers(categoriescontroller::class)->group(function (){
	//route::get('/addcategories','index6');
//});

//route::post('/savefood','save')->name('categories.save');


/**
 * test route
 */
Route::get('/',[IndexController::class,'index'])->name('index');

/**
 * Login page
 */
Route::get('/login',[LoginController::class,'index'])->name('login');

/**
 * Check Login
 */
Route::post('/login/check',[LoginController::class,'checklogin'])->name('login.check');

/**
 * Signup page
 */
Route::get('/signup',[SignupController::class,'index'])->name('signup');

/**
 * Craete a new user
 */
Route::post('/signup/create',[SignupController::class,'create'])->name('signup.create');
