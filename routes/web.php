<?php

use App\Http\Controllers\renderHomeController;
use App\View\Components\ProductComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', renderHomeController::class);
Route::get('/product', [ProductComponent::class, 'render']);
Route::post('/product', [ProductComponent::class, 'create']);

Route::get('/product/{id}/edit',[ProductComponent::class,'getEditDashboard']);
Route::put('/product/edit/{id}',[ProductComponent::class,'editProduct']);

Route::get('/product/delete/{id}', [ProductComponent::class, 'deleteProduct']);