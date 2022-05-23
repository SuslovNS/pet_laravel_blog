<?php

use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Post\IndexControllerPost;
use App\Http\Controllers\Post\Likes\LikeStoreController;
use App\Http\Controllers\Post\ShowController;

use App\Http\Controllers\Post\Comment\StoreController;

use App\Http\Controllers\Admin\Main\AdminIndexController;

use App\Http\Controllers\Personal\Comment\PersonalCommentEditController;
use App\Http\Controllers\Personal\Comment\PersonalCommentDeleteController;
use App\Http\Controllers\Personal\Comment\PersonalCommentUpdateController;
use App\Http\Controllers\Personal\Main\PersonalIndexController;
use App\Http\Controllers\Personal\Liked\PersonalLikedController;
use App\Http\Controllers\Personal\Liked\DeleteLikedController;
use App\Http\Controllers\Personal\Comment\PersonalCommentController;


use App\Http\Controllers\Admin\Post\PostCreateController;
use App\Http\Controllers\Admin\Post\PostIndexController;
use App\Http\Controllers\Admin\Post\PostStoreController;
use App\Http\Controllers\Admin\Post\PostShowController;
use App\Http\Controllers\Admin\Post\PostEditController;
use App\Http\Controllers\Admin\Post\PostUpdateController;
use App\Http\Controllers\Admin\Post\PostDeleteController;

use App\Http\Controllers\Admin\User\UserCreateController;
use App\Http\Controllers\Admin\User\UserIndexController;
use App\Http\Controllers\Admin\User\UserStoreController;
use App\Http\Controllers\Admin\User\UserShowController;
use App\Http\Controllers\Admin\User\UserEditController;
use App\Http\Controllers\Admin\User\UserUpdateController;
use App\Http\Controllers\Admin\User\UserDeleteController;

use App\Http\Controllers\Admin\Category\CategoryCreateController;
use App\Http\Controllers\Admin\Category\CategoryIndexController;
use App\Http\Controllers\Admin\Category\CategoryStoreController;
use App\Http\Controllers\Admin\Category\CategoryShowController;
use App\Http\Controllers\Admin\Category\CategoryEditController;
use App\Http\Controllers\Admin\Category\CategoryUpdateController;
use App\Http\Controllers\Admin\Category\CategoryDeleteController;


use App\Http\Controllers\Admin\Tag\TagIndexController;
use App\Http\Controllers\Admin\Tag\TagCreateController;
use App\Http\Controllers\Admin\Tag\TagStoreController;
use App\Http\Controllers\Admin\Tag\TagShowController;
use App\Http\Controllers\Admin\Tag\TagEditController;
use App\Http\Controllers\Admin\Tag\TagUpdateController;
use App\Http\Controllers\Admin\Tag\TagDeleteController;

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



Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', IndexController::class)->name('main.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/posts', IndexControllerPost::class)->name('post.index');
    Route::get('/posts/{post}', ShowController::class)->name('post.show');
});

Route::group(['namespace' => 'App\Http\Controllers\Post\Comment'], function () {
    Route::post('/posts/{post}/comment', StoreController::class)->name('post.comment.store');
});

Route::group(['namespace' => 'App\Http\Controllers\Post\Likes'], function () {
    Route::post('/posts/{post}/likes', LikeStoreController::class)->name('post.like.store');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Main', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', AdminIndexController::class)->name('admin.main');
});



Route::group(['namespace' => 'App\Http\Controllers\Admin\Post', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/posts', PostIndexController::class)->name('admin.post.index');
    Route::get('/admin/posts/create', PostCreateController::class)->name('admin.post.create');
    Route::post('/post/store', PostStoreController::class)->name('admin.post.store');
    Route::get('/admin/posts/{post}', PostShowController::class)->name('admin.post.show');
    Route::get('/admin/posts/{post}/edit', PostEditController::class)->name('admin.post.edit');
    Route::patch('/admin/posts/{post}', PostUpdateController::class)->name('admin.post.update');
    Route::delete('/admin/posts/{post}', PostDeleteController::class)->name('admin.post.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Category', 'middleware' => ['auth', 'admin']], function () {
        Route::get('/admin/category', CategoryIndexController::class)->name('admin.category.index');
        Route::get('/admin/category/create', CategoryCreateController::class)->name('admin.category.create');
        Route::post('/admin/category/store', CategoryStoreController::class)->name('admin.category.store');
        Route::get('/admin/category/{category}', CategoryShowController::class)->name('admin.category.show');
        Route::get('/admin/category/{category}/edit', CategoryEditController::class)->name('admin.category.edit');
        Route::patch('/admin/category/{category}', CategoryUpdateController::class)->name('admin.category.update');
        Route::delete('/admin/category/{category}', CategoryDeleteController::class)->name('admin.category.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Tag', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/tags', TagIndexController::class)->name('admin.tag.index');
    Route::get('/admin/tags/create', TagCreateController::class)->name('admin.tag.create');
    Route::post('/tag/store', TagStoreController::class)->name('admin.tag.store');
    Route::get('/admin/tags/{tag}', TagShowController::class)->name('admin.tag.show');
    Route::get('/admin/tags/{tag}/edit', TagEditController::class)->name('admin.tag.edit');
    Route::patch('/admin/tags/{tag}', TagUpdateController::class)->name('admin.tag.update');
    Route::delete('/admin/tags/{tag}', TagDeleteController::class)->name('admin.tag.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\User', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/user', UserIndexController::class)->name('admin.user.index');
    Route::get('/admin/user/create', UserCreateController::class)->name('admin.user.create');
    Route::post('/admin/user/store', UserStoreController::class)->name('admin.user.store');
    Route::get('/admin/user/{user}', UserShowController::class)->name('admin.user.show');
    Route::get('/admin/user/{user}/edit', UserEditController::class)->name('admin.user.edit');
    Route::patch('/admin/user/{user}', UserUpdateController::class)->name('admin.user.update');
    Route::delete('/admin/user/{user}', UserDeleteController::class)->name('admin.user.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Personal\Main', 'middleware' => ['auth']], function () {
    Route::get('/personal', PersonalIndexController::class)->name('personal.main.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Personal\Liked', 'middleware' => ['auth']], function () {
    Route::get('/personal/liked', PersonalLikedController::class)->name('personal.liked.index');
    Route::delete('/personal/liked/{post}', DeleteLikedController::class)->name('personal.liked.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Personal\Comment', 'middleware' => ['auth']], function () {
    Route::get('/personal/comments', PersonalCommentController::class)->name('personal.comment.index');
    Route::get('/personal/comments/{comment}/edit', PersonalCommentEditController::class)->name('personal.comment.edit');
    Route::patch('/personal/comments/{comment}', PersonalCommentUpdateController::class)->name('personal.comment.update');
    Route::delete('/personal/comments/{comment}/delete', PersonalCommentDeleteController::class)->name('personal.comment.delete');
});





Auth::routes();



