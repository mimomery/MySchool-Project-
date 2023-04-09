<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thnpm install bootstrapese
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('courses');
});
 
Route::get('/index', function () {
    return view('index');
});
Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/about', function () {
    return view('about');
}); 
Route::get('/bureaux', function () {
    return view('bureaux');
}); 

Route::get('/fourniture', function () {
    return view('fourniture');
}); 


Route::get('/associationdesparent', function () {
    return view('associationdesparent');
}); 

Route::get('/transport', function () {
    return view('transport');
}); 

Route::get('/cafe', function () {
    return view('cafe');
});  
 
Route::get('/dashboard', function () {
    return view('adminpanel/dashboard');
});  
Route::get('/etudiant', function () {
    return view('adminpanel/etudiant');
}); 

Route::get('/parent', function () {
    return view('adminpanel/parent');
}); 

Route::get('/administrateur', function () {
    return view('adminpanel/administrateur');
}); 
Route::get('/professeur', function () {
    return view('adminpanel/professeur');
}); 
Route::get('/notes', function () {
    return view('adminpanel/notes');
}); 

Route::get('/emploie', function () {
    return view('adminpanel/emploie');
});  
 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 