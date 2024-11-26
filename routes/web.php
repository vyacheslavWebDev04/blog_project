<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Category\Post\IndexController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;


//Route::get('/test', function () {
//    return view('welcome');
//});

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
});
Route::group(['namespace' => 'App\Http\Controllers\Post', 'prefix' => 'posts'], function () {
    Route::get('/', 'IndexController')->name('post.index');
    Route::get('/{post}', 'ShowController')->name('post.show');

    Route::group(['namespace' => 'Comment', 'prefix' => '{post}/comments'], function () {
        Route::post('/', 'StoreCommentController')->name('post.comment.store');
    });
    Route::group(['namespace' => 'Like', 'prefix' => '{post}/likes'], function () {
        Route::post('/', 'StoreLikeController')->name('post.like.store');
    });
});
Route::group(['namespace' => 'App\Http\Controllers\Category', 'prefix' => 'categories'], function () {
    Route::get('/', 'IndexController')->name('category.index');

    Route::group(['namespace' => 'Post', 'prefix' => '{category}/posts'], function () {
        Route::get('/', 'IndexController')->name('category.post.index');
    });
});
Route::group(['namespace' => 'App\Http\Controllers\Personal', 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function () {
    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
        Route::get('/', 'PersonalMainController')->name('personal.main.index');
    });
    Route::group(['namespace' => 'Liked', 'prefix' => 'liked'], function () {
        Route::get('/', 'LikedController')->name('personal.liked.index');
        Route::delete('/{post}', 'DeleteLikedController')->name('personal.liked.delete');
    });
    Route::group(['namespace' => 'Comment', 'prefix' => 'comment'], function () {
        Route::get('/', 'CommentController')->name('personal.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('personal.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('personal.comment.update');
        Route::delete('/{comment}', 'DeleteController')->name('personal.comment.delete');
    });
});
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'MainController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'UserController')->name('admin.user.index');
        Route::get('/create', 'CreateUserController')->name('admin.user.create');
        Route::post('/', 'StoreUserController')->name('admin.user.store');
        Route::get('/{user}', 'ShowUserController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditUserController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateUserController')->name('admin.user.update');
        Route::delete('/{user}', 'DestroyUserController')->name('admin.user.destroy');
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', 'PostController')->name('admin.post.index');
        Route::get('/create', 'CreatePostController')->name('admin.post.create');
        Route::post('/', 'StorePostController')->name('admin.post.store');
        Route::get('/{post}', 'ShowPostController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditPostController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdatePostController')->name('admin.post.update');
        Route::delete('/{post}', 'DestroyPostController')->name('admin.post.destroy');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'CategoryController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DestroyController')->name('admin.category.destroy');
    });
    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', 'TagController')->name('admin.tag.index');
        Route::get('/create', 'CreateTagController')->name('admin.tag.create');
        Route::post('/', 'StoreTagController')->name('admin.tag.store');
        Route::get('/{tag}', 'ShowTagController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'EditTagController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'UpdateTagController')->name('admin.tag.update');
        Route::delete('/{tag}', 'DestroyTagController')->name('admin.tag.destroy');
    });
});

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['verify' => true]);
