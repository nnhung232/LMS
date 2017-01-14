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
    //return View::make();    
    return view('welcome');    
});

Route::get('/about', function(){
    //return 'Hi there! About page';
    return view('pages.about'); // resources/views/pages/about.blade.php (can also use pages/about)
});

Route::get('/contact',function(){
    $people = ['A', 'B', 'C', 'D'];

    return view('pages.contact', 
                ['people' => $people]);
    //return view('pages.contact', compact('people'));    
    //return view('pages.contact')->with('people', $people);
    //return view('pages.contact')->with(['people' => $people]);     
    //return view('pages.contact')->withPeople($people);
});
Route::get('/layout01','SampleController@layout01');
Route::get('/layout02','SampleController@layout02');
Route::get('/style01','SampleController@style01');
Route::get('/sample01','SampleController@sample01');

Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/{id}','CategoriesController@show');



Route::get('/books','BooksController@index');
Route::get('/books/{id}','BooksController@show');

// Route::get('/books/1/edit','BooksController@edit');
// Route::put('/books/1','BooksController@update');
// Route::get('/books/create','BooksController@create');
// Route::post('/books','BooksController@store');
// Route::delete('/books/1','BooksController@delete');