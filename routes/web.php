<?php

use App\Livewire\Pages\ServiceInner;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\NewsInner;
use App\Livewire\Pages\ProductInner;
use App\Livewire\Pages\Products;
use App\Livewire\Pages\ProjectInner;
use App\Livewire\Pages\Projects;
use App\Livewire\Pages\Publications;
use App\Livewire\Pages\Services;
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

Route::get('/', Home::class)->name('home');
Route::get('/about-us', About::class)->name('about');
Route::get('/products', Products::class)->name('products');
Route::get('/projects', Projects::class)->name('projects');
Route::get('/product/{id}/{slug}', ProductInner::class)->name('product.inner');
Route::get('/projects/{id}/{slug}', ProjectInner::class)->name('project.inner');
Route::get('/services', Services::class)->name('services');
Route::get('/service/{id}/{slug}', ServiceInner::class)->name('service.inner');
Route::get('/contact-us', Contact::class)->name('contact');
Route::get('/news/{id}/{slug}', NewsInner::class)->name('news.inner');

Route::get('/our-publications', Publications::class)->name('pub');

Route::get('/clear-route-cache', function () {
    \Artisan::call('route:clear');
    return 'Route cache cleared!';
});

Route::get('/link', function () {
    \Artisan::call('storage:link');
    return 'storage linked';
});
