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
#main
Route::get('/', function () {

	$name='Stevany';
	$age=24;

//  	$tasks=[
// 	'Go to store', 
// 	'study', 
// 	'sleeping'
// ]; 


	$tasks=DB::table('tasks')->get();

	// $tasks;



    return view('welcome',compact('name','age','tasks'));

// return $tasks;


//     return view('welcome',compact('tasks'));
 
});

Route::get('/tasks', function () {



//  	$tasks=[
// 	'Go to store', 
// 	'study', 
// 	'sleeping'
// ]; 

$tasks=DB::table('tasks')->get();
return view('tasks.index',compact('tasks'));
 
});





// to pass id 
Route::get('/tasks/{id}', function ($id) {



	$task=DB::table('tasks')->find($id);
	// dd($task); to print



    return view('tasks.show',compact('task'));

// return $tasks;


//     return view('welcome',compact('tasks'));
 
}); 
Route::get('/about',function()
{
 return view('about');


});

