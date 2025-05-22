<?php

use App\Http\Controllers\Company\AboutController;
use App\Http\Controllers\Company\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurClientsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//Home Page
Route::get('/', [HomeController::class, 'index'])->name('home-page');

//Product Pages
Route::get('/products', [ProductController::class, 'index'])->name('product-page');
Route::get('/products/human-resource-management-system', [ProductController::class, 'hris'])->name('product-hris-page');
Route::get('/products/customer-relationship-management', [ProductController::class, 'crm'])->name('product-crm-page');
Route::get('/products/finance-dashboard-monitoring', [ProductController::class, 'finance'])->name('product-finance-page');
Route::get('/products/it-media-software-solution', [ProductController::class, 'itm'])->name('product-itm-page');

//Demo Page
Route::get('/demo', [DemoController::class, 'index'])->name('demo-page');

//Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact-page');

//Company Pages
Route::get('/company/about', [AboutController::class, 'index'])->name('about-page');
Route::get('/company/news', [NewsController::class, 'index'])->name('news-page');

//Klien Kami
Route::get('/our-clients', [OurClientsController::class, 'index'])->name('clients-page');
