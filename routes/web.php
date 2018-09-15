<?php

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

Route::get('/', function () {
    return view('main');
});

//Route::get('/', function () {
//    $query = http_build_query([
//        'client_id' => 3,
//        'redirect_uri' => 'http://localhost/oauth-callback',
//        'response_type' => 'code',
//        'scope' => '',
//    ]);
//
//    return redirect('http://passport.dev/oauth/authorize?' . $query);
//    //return redirect('http://localhost/oauth/authorize?' . $query);
//});
//
//Route::get('/oauth-callback', function (Request $request) {
//    $http = new GuzzleHttp\Client;
//
//    $response = $http->post('http://localhost/oauth/token', [
//        'form_params' => [
//            'grant_type' => 'authorization_code',
//            'client_id' => 3,
//            'client_secret' => 'yMhiKI4PCVlnhTV4GNQ3ViEWoIFbq0v2FBTAEgiT',
//            'redirect_url' => 'http://localhost/oauth-callback',
//            'code' => $request->code,
//        ],
//    ]);
//
//    return json_decode((string) $response->getBody(), true);
//});

Route::get('/', 'Auth\LoginController@redirectToProvider');
Route::get('/oauth-callback', 'Auth\LoginController@handleProviderCallback');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
