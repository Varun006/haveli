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

Route::get('/',function(){
	return view('public.index');
});

Route::get('events',function(){
	return view('public.events');
});

Route::get('events/single',function(){
	return view('public.single');
});

Route::get('photos',function(){
	return view('public.gallery');
});

Route::get('about',function(){
	return view('public.about');
});

Route::get('darshan',function(){
	return view('public.darshan');
});

Route::get('contact',function(){
	return view('public.contact');
});

Route::get('faqs',function(){
	return view('public.faq');
});
