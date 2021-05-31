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

Route::get('/todos', [App\Http\Controllers\TodosController::class, 'index'])->name('todos.index');

Route::get('/todos/create', [App\Http\Controllers\TodosController::class, 'create'])->name('todos.create');

Route::post('/todos/store', [App\Http\Controllers\TodosController::class, 'store'])->name('todos.store');

Route::get('/todos/{todo}', [App\Http\Controllers\TodosController::class, 'show'])->name('todos.show');

Route::get('/todos/{todo}/edit', [App\Http\Controllers\TodosController::class, 'edit'])->name('todos.edit');

Route::put('/todos/{todo}/update', [App\Http\Controllers\TodosController::class, 'update'])->name('todos.update');

Route::delete('/todos/{todo}/delete', [App\Http\Controllers\TodosController::class, 'destroy'])->name('todos.destroy');







//-----------------------------------------------------------------
//              What is this project? 
//-----------------------------------------------------------------
/*
This project is part of the tutorial: 
https://www.youtube.com/watch?v=okyGNaBJZS0&list=PL78sHffDjI74qqNlqtqV_tx5E0_NG1IXQ&index=2&ab_channel=EasyLearning

This project will teach you the very basics of laravel, just like laravel crash course of Traversy Media,
.. which you already did. Then, why you're doing this one? cuz there is some basic stuff
.. i still don't know, like seeds and some migrations commands

Also, I will follow this course till I reach The CMS project and the disscussion project,
they are both have 99% of the functions you need in any project, that's why I follow this great tutorial

So, the point is this project is one of the 3 project of this tutorial. I can skip it
.. but I decide to complete it just in case I miss some stuff in the basics of laravel.

I will right down here all the new things I learnt from this tutorial, if there is some
..  basic stuff then it will be skipped, and you can find all of laravel basic stuff in LaravelApp in my github: 
https://github.com/Ammar-JT/LaravelApp

*/



//----------------------------------------
//              Model and migrations
//----------------------------------------
/*
- To make a model without a migration: 
        php artisan make:model Todo

- To make a migration, make sure the name is very descriptive: 
        php artisan make:migration create_todos_table

- You know how to drop a table using rollback, but you can rollback everthing by rolling back the migration table
        php artisan migrate:rollback
    so only the migration table will remain, and it will be empty! 

- If you want to rollback all the migration and then migrate the new migration after you edited it: 
        php artisan migrate:refresh


*/


//---------------------------------------------------------------------------------------------------
//              Seeds (factory): just a tool to seed the database with face data to save your time
//---------------------------------------------------------------------------------------------------
/*
- To make a factory:
        php artisan make:factory TodoFactory

- You will find the factories folder in the database folder (folder of migrations file)
- Go the factory file to  set up your factory

- To make a seeder: 
        php artisan make:seeder TodosSeeder


- How does it work? 
    Factory: will be the factory of the data, it has a templete for one random record
    Seeder: will have the functions that used factory to seed the db with it
    .. these functions can fill 1 or 10 or what every u want using the factory template
    DatabaseSeeder: you will just import all the Seeders in this file, so you can use it in terminal

- So, DatabaseSeeder uses TodosSeeder and the other seeders, and TodosSeeder use TodoFactory

- To run the seeders of DatabaseSeeder: 
        php artisan db:seed

---------------------------------------
    Migration: refresh + seed!!!!! 
--------------------------------------
- Migration: refresh + seed:
    how can we do that? simply: 
        php artisan migrate:refresh --seed
    I used this when I reduced the todo list seeder to 5 instead of 10 record


*/



//---------------------------------------------------------------------------------------------------
//              Additional Fun Stuff: dd + 
//---------------------------------------------------------------------------------------------------
/*
- In php you do:
        die(var_dump($todoId));
    In laravel you can do 
        dd($todoId);
    These two just kill all the code and display the given variable



*/