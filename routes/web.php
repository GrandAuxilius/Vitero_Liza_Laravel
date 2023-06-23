<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('index');
});


Route::get('/users', function () {
    return view('users');

});

Route::get('/clients', [OwnersController::class, 'clients']);
Route::post('/clients', [OwnersController::class, 'addClient'])->name('addClient'); 
Route::delete('/clients/{id}', [OwnersController::class, 'deleteClient'])-> name('client.delete');
Route::put('/clients/{id}', [OwnersController::class, 'updateClient'])-> name('client.update');


Route::get('/billing', [BillsController::class, 'clients']);  
Route::get('/addbill/{id}', [BillsController::class, 'addbill'])->name('bill.add');
Route::get('/viewbill', function () {
    return view('viewbill'); 
})->name('viewbill');
Route::get('/viewpayment', function () {
    return view('viewpayment'); 
})->name('viewpayment');


Route::get('/users', [UserController::class, 'index'])->name('users');  
Route::post('/users', [UserController::class, 'addUser'])->name('users.add');  
Route::delete('/users/{id}', [UserController::class, 'destroy'])-> name('users.delete');
Route::put('/users/{id}', [UserController::class, 'update'])-> name('users.update');


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UserController');
Route::resource('bills', 'BillController');
Route::resource('owners', 'OwnerController');