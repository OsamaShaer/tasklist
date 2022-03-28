<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/about', function(){
$name ='Osama';
$age ='23';

    // return view('about',[
    //     'name' => $name,
    //     'age' => $age
    // ]);
return view('about')->with('name',$name)->with('age',$age);
    //return view('about',compact('name','age'));
});





Route::get('tasks', function () {
    $tasks= [
        '1'=>'task 1',
        '2'=>'task 2',
        '3'=> 'task 3',
        '4'=>'task 4',
    ];
    return view('tasks',compact('tasks'));
});

Route::get('/show/{id}', function ($id) {
    $tasks= [
      '1'=>  'task 1',
      '2'=>  'task 2',
      '3'=> 'task 3',
      '4'=> 'task 4',
    ];
    $task = $tasks[$id];
    return view('tasks',compact('task'));
});


Route::post('/tasks', function () {
    $name= $_POST['name'];
    return view('tasks',compact('name'));
});


