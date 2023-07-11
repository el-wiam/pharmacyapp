<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\LocationController;
use App\Models\client;
use App\Models\Location;
use App\Models\pharmacy;

use function Ramsey\Uuid\v1;

Route::get('/', function () {
    return view('index');
});
Route::get('/pharmacy', function () {
    return view('pharmacy');
});
Route::get('/commande', function () {
    return view('commande');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/joinus', function () {
    return view('joinus');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/account', function () {
    return view('account');
});
Route::post('/joinus',function(){
        client::create([
            'name'=>request('name'),
            'Bdate'=>request('Bdate'),
            'email'=>request('email'),
            'mdp'=>request('mdp'),
            'cin'=>request('cin'),
           'adresse'=>request('adresse'),
            'ville'=>request('ville'),
            'num'=>request('num'),
            'quartier'=>request('quartier'),
            'cp'=>request('cp'),
        ]);
 return redirect('/joinus');
});
Route::post('/about',function(){
    pharmacy::create([
        'name'=>request('name'),
        'dr'=>request('dr'),
        'email'=>request('email'),
        'mdp'=>request('mdp'),
        'patente'=>request('patente'),
       'adresse'=>request('adresse'),
        'ville'=>request('ville'),
        'num'=>request('num'),
        'quartier'=>request('quartier'),
        'cp'=>request('cp'),
        'rc'=>request('rc'),
    ]);
return redirect('/joinus');
});
Route::post('/', function(){
    Location::create([
        'latitude'=>request('lat'),
        'longitude'=>request('lng'),
    ]);
    return redirect('/');
});
