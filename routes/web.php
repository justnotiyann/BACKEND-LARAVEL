<?php

use App\Http\Controllers\renderHomeController;
use App\View\Components\ProductComponent;
use App\View\Components\RentalComponent;
use App\View\Components\UsersComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', renderHomeController::class);
Route::get('/product', [ProductComponent::class, 'render']);
Route::post('/product', [ProductComponent::class, 'create']);

Route::get('/product/{id}/edit',[ProductComponent::class,'getEditDashboard']);
Route::put('/product/edit/{id}',[ProductComponent::class,'editProduct']);

Route::get('/product/delete/{id}', [ProductComponent::class, 'deleteProduct']);


// Routes Users
Route::get('/users', [UsersComponent::class, 'render']);
Route::post('/users/add', [UsersComponent::class, 'create']);

Route::get('/users/delete/{id}', [UsersComponent::class, 'deleteUser']);

Route::get('/users/{id}/edit', [UsersComponent::class, 'getEditDashboard']);
Route::put('/users/edit/{id}', [UsersComponent::class, 'editUser']);


// Routes rental
Route::get('/rental', [RentalComponent::class, 'render']);
Route::post('/rental/add', [RentalComponent::class, 'create']);

Route::get('/rental/{id}/edit', [RentalComponent::class, 'getEditRentalDashboard']);
Route::put('/rental/edit/{id}', [RentalComponent::class, 'editRental']);