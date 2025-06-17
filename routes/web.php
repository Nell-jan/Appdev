<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodItemController;

Route::get('/', function () {
    return redirect()->route('food-items.index');
});

Route::resource('food-items', FoodItemController::class);
Route::post('food-items/{foodItem}/consume', [FoodItemController::class, 'consume'])->name('food-items.consume');
Route::get('transactions', [FoodItemController::class, 'transactions'])->name('food-items.transactions');