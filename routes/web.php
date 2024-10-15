<?php

use App\Http\Middleware\WebAuthMiddleware;
use App\Livewire\Category\Index as IndexCategory;
use App\Livewire\Category\Create as CreateCategory;
use App\Livewire\Category\Edit as EditCategory;
use App\Livewire\Product\Create as CreateProduct;
use App\Livewire\Product\Edit as EditAlias;
use App\Livewire\Product\Index as IndexProduct;
use App\Livewire\Product\Show as ShowProduct;
use App\Livewire\Product\Tags;
use App\Livewire\User\Show as ShowUser;
use App\Livewire\User\Create as CreateUser;
use App\Livewire\User\Edit as EditUser;
use App\Livewire\User\Index as IndexUser;
use Illuminate\Support\Facades\Route;

Route::middleware(WebAuthMiddleware::class)->group(function () {

    Route::get('/', IndexProduct::class)->name('index');

    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/', IndexUser::class)->name('index');
        Route::get('/create', CreateUser::class)->name('create');
        Route::get('/{user}/edit', EditUser::class)->name('edit');
        Route::get('/{user}', ShowUser::class)->name('show');
    });

    Route::prefix('/products')->name('products.')->group(function () {
        Route::get('/create', CreateProduct::class)->name('create');
        Route::get('/{product}/edit', EditAlias::class)->name('edit');
        Route::get('/{product}', ShowProduct::class)->name('show');
        Route::post('/{product}/tags', Tags::class)->name('tags');
    });

    Route::prefix('/categories')->name('categories.')->group(function () {
        Route::get('/', IndexCategory::class)->name('index');
        Route::get('/create', CreateCategory::class)->name('create');
        Route::get('/{category}/edit', EditCategory::class)->name('edit');
    });
});

