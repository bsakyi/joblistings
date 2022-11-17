<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings'=>  Listing::all()     
                
    ]);
});

//Single Listing
Route::get('/listings/{$id}', function($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});







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