<?php

use App\Http\Controllers\Admin\AccesController;
use App\Http\Controllers\Admin\AccessToInfoController;
use App\Http\Controllers\Admin\EditorUploadController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Home\AdController;
use App\Http\Controllers\Home\AdUpgradeController;
use App\Http\Controllers\Home\CommentController;
use App\Http\Controllers\Home\LikeAdController;
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

Route::get('/', \App\Http\Livewire\Home\Index::class)->name('home.index');
Route::get('/login', \App\Http\Livewire\Home\Auth\Index::class)->name('login');
Route::get('/profile/{id}', \App\Http\Livewire\Home\Profile\Show::class)->name('profile.show');
Route::get('/ad/{id}', \App\Http\Livewire\Home\Ad\Show::class)->name('ad.show');
require __DIR__.'/auth.php';
Route::get('/aa', function (){
    return 'salam';
});
Route::middleware(['auth'])->group(function (){
//    Profile
    Route::get('/profile', \App\Http\Livewire\Home\Profile\Index::class)->name('profile.index');
    Route::get('/profile-update', \App\Http\Livewire\Home\Profile\Update::class)->name('profile.update');
//    Ad
    Route::get('/ad', \App\Http\Livewire\Home\Ad\Index::class)->name('ad.index');
    Route::get('/ad-create', \App\Http\Livewire\Home\Ad\Create::class)->name('ad.create');
    Route::get('/ad/update/{id}', \App\Http\Livewire\Home\Ad\Update::class)->name('ad.update');
    Route::get('/ad-trashed', \App\Http\Livewire\Home\Ad\Trashed::class)->name('ad.trashed');
    Route::post('/viewAd', [AdController::class, 'viewAd'])->name('viewAd');
//    Route::middleware(['throttle:like'])->post('/like/{ad:title}', [LikeAdController::class, 'store'])->name('ad.like');
//    Technical-degree
    Route::get('/technical-degree', \App\Http\Livewire\Home\TechnicalDegree\Index::class)->name('technical-degree.index');
    Route::get('/technical-degree/{technicalDegree}', [\App\Http\Livewire\Home\TechnicalDegree\Index::class, 'show'])->name('technical-degree.show');
//    ExampleWork
    Route::get('/exampleWork', \App\Http\Livewire\Home\ExampleWork\Index::class)->name('exampleWork.index');
//    Order
    Route::get('/order', \App\Http\Livewire\Home\Order\Index::class)->name('order.index');
    Route::get('/order/create/{ad}', \App\Http\Livewire\Home\Order\Create::class)->name('order.create');
    Route::get('/order/update/{id}', \App\Http\Livewire\Home\Order\Update::class)->name('order.update');
    Route::get('/order/{id}', \App\Http\Livewire\Home\Order\Show::class)->name('order.show');
    Route::get('/order/trashed', \App\Http\Livewire\Home\Order\Trashed::class)->name('order.trashed');
//    request
    Route::get('/request', \App\Http\Livewire\Home\Request\Index::class)->name('request.index');
//    Tender
    Route::get('/tender', \App\Http\Livewire\Home\Tender\Index::class)->name('tender.index');
    Route::get('/tender/create/{order?}', \App\Http\Livewire\Home\Tender\Create::class)->name('tender.create');
    Route::get('/tender/{tender}', \App\Http\Livewire\Home\Tender\Show::class)->name('tender.show');
//    adUpgrade
    Route::get('/ad-upgrade/{ad?}', \App\Http\Livewire\Home\AdUpgrade\Index::class)->name('adUpgrade.index');
    Route::post('/ad-upgrade', [AdUpgradeController::class, 'store'])->name('adUpgrade.store');
//    Comment
    Route::resource('/comments', CommentController::class);
//    Post
    Route::get('/post/{post}', \App\Http\Livewire\Home\Post\Show::class)->name('post.show');
//    Ticket
    Route::get('/ticket', \App\Http\Livewire\Home\Ticket\Index::class)->name('ticket.index');
    Route::get('/ticket/{id}', \App\Http\Livewire\Home\Ticket\Show::class)->name('ticket.show');
//    Like
    Route::get('/like', \App\Http\Livewire\Home\Like\Index::class)->name('like.index');
});








//PanelAdmin
Route::middleware(['auth', 'acces'])->prefix('/admin')->group(function(){
    Route::get('/', \App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard');
    Route::get('/profile', \App\Http\Livewire\Admin\Profile\Index::class)->name('profile');
//    Role
    Route::get('/roles', \App\Http\Livewire\Admin\Role\Index::class)->name('roles.index');
    Route::get('/roles/update/{id}', \App\Http\Livewire\Admin\Role\Update::class)->name('roles.update');
    Route::get('/roles/trashed', \App\Http\Livewire\Admin\Role\Trashed::class)->name('roles.trashed');
//    User
    Route::get('/user', \App\Http\Livewire\Admin\User\Index::class)->name('user.index');
    Route::get('/users/update/{id}', \App\Http\Livewire\Admin\User\Update::class)->name('user.update');
//    AdCategory
    Route::get('/adCategory', \App\Http\Livewire\Admin\AdCategory\Index::class)->name('adCategory.index');
    Route::get('/adCategory/update/{id}', \App\Http\Livewire\Admin\AdCategory\Update::class)->name('adCategory.update');
    Route::get('/adCategory/{id}', \App\Http\Livewire\Admin\AdCategory\Show::class)->name('adCategory.show');
    Route::get('/adCategory/trashed', \App\Http\Livewire\Admin\AdCategory\Trashed::class)->name('adCategory.trashed');
//    State
    Route::get('/state', \App\Http\Livewire\Admin\State\Index::class)->name('state.index');
    Route::get('/state/update/{id}', \App\Http\Livewire\Admin\State\Update::class)->name('state.update');
    Route::get('/state/{id}', \App\Http\Livewire\Admin\State\Show::class)->name('state.show');
//    City
    Route::get('/city', \App\Http\Livewire\Admin\City\Index::class)->name('city.index');
    Route::get('/city/update/{id}', \App\Http\Livewire\Admin\City\Update::class)->name('city.update');
    Route::get('/city/{id}', \App\Http\Livewire\Admin\City\Show::class)->name('city.show');
//    Area
    Route::get('/area', \App\Http\Livewire\Admin\Area\Index::class)->name('area.index');
    Route::get('/area/update/{id}', \App\Http\Livewire\Admin\Area\Update::class)->name('area.update');
//    Ad
    Route::get('/ad', \App\Http\Livewire\Admin\Ad\Index::class)->name('ad_index');
//    TenderPrice
    Route::get('/tenderPrice', \App\Http\Livewire\Admin\TenderPrice\Index::class)->name('tenderPrice.index');
//    Upgrade
    Route::get('/upgrade', \App\Http\Livewire\Admin\Upgrade\Index::class)->name('upgrade.index');
//    Comment
    Route::get('/comment', \App\Http\Livewire\Admin\Comment\Index::class)->name('comment.index');
    Route::get('/comment/{comment}', \App\Http\Livewire\Admin\Comment\Show::class)->name('comment.show');
//    Category
    Route::get('/category', \App\Http\Livewire\Admin\Category\Index::class)->name('category.index');
    Route::get('/category/update/{id}', \App\Http\Livewire\Admin\Category\Update::class)->name('category.update');
    Route::get('/category/trashed', \App\Http\Livewire\Admin\Category\Trashed::class)->name('category.trashed');
//    Post
    Route::get('/post', \App\Http\Livewire\Admin\Post\Index::class)->name('post.index');
    Route::get('/post/create', \App\Http\Livewire\Admin\Post\Create::class)->name('post.create');
    Route::get('/post/update/{id}', \App\Http\Livewire\Admin\Post\Update::class)->name('post.update');
//    Route::get('/post/trashed', \App\Http\Livewire\Admin\Category\Trashed::class)->name('post.trashed');
    Route::resource('/posts', PostController::class);
    Route::post('/editor/upload', [EditorUploadController::class, 'upload'])->name('editor-upload');
//    Ticket
    Route::get('/tickets', \App\Http\Livewire\Admin\Ticket\Index::class)->name('tickets.index');
//    Subscribe
    Route::get('/subscribe', \App\Http\Livewire\Admin\Subscribe\Index::class)->name('subscribe.index');
//    TechnicalDegree
    Route::get('/technicalDegree', \App\Http\Livewire\Admin\TechnicalDegree\Index::class)->name('technicalDegree.index');
//    Banner
    Route::get('/banner', \App\Http\Livewire\Admin\Banner\Index::class)->name('banner.index');
    Route::get('/banner/update/{banner}', \App\Http\Livewire\Admin\Banner\Update::class)->name('banner.update');
});
