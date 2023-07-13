<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('listing');
// });

//All listing
Route::get('/', [ListingController::class, 'index']);

//show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//store listing
Route::post('listings', [ListingController::class, 'store']);

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update Listing
Route::put('listings/{listing}', [ListingController::class, 'update']);



Route::get('/hello', function() {
    return response('<h1>Hello world</h1>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('foo', 'bar');
});

Route::get('posts/{id}', function($id){
    return response('Post ' . $id);
})->where('íd', '[0-9]+');

Route::get('/search', function(Request $request) {
    return $request->name .  '' . $request->city;

});