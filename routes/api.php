<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use App\Models\Order;

Route::get('/menu', function (Request $request) {
    return Menu::get();
});

Route::get('/order', function (Request $request) {
    return Order::get();
});

Route::get('/order/{id}', function (Request $request, $id) {
    return Order::where('id', $id)->get();
});