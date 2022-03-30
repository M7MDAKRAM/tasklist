<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
$name ='ahmed';
$age ='20';

return view('about')->with('name',$name)->with('age',$age);

});

Route::get('tasks', function () {
    $tasks= [
        '1'=>'task 1',
        '2'=>'task 2',
        '3'=> 'task 3',
    ];
    return view('tasks',compact('tasks'));
});

Route::get('/show/{id}', function ($id) {
    $tasks = [
      '1'=>  'task 1',
      '2'=>  'task 2',
      '3'=> 'task 3',
    ];

    $task = $tasks[$id];
    return view('tasks',compact('task'));
});


Route::post('/tasks', function () {
    $name = $_POST['name'];
    return view('tasks',compact('name'));
});

// Route::get('about' ,function(){
//     $name = $_POST['name'];
//    return view('about' ,compact('name'));

//  });
