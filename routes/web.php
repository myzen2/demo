<?php
// demo/routes/web.php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/help', function () {
    return view('pages/aide');
});

Route::get('/events', function () {
    $events = [
        'Make PHP Great Again',
        'PHP Conference',
        'Meetup Laravel',
        'Laravel Conference'
    ];
    return view('events/index', compact('events'));
});
