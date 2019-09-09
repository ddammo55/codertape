<?php

Route::view('/', 'home');
Route::view('contact-us', 'contact');
Route::view('about', 'about');

Route::get('customers', function(){

	$customers = [
		
		'John Doe',
		'Jane Doe',
		'Bob The Builder'
	];

	return view('internals.customers', [

		'customers' => $customers,

	]);

});
