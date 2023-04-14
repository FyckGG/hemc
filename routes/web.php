<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MailController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::view('/', 'main.index')->name('main');
Route::view('/about-us', 'about-us.index')->name('about-us');
Route::view('/contacts', 'contacts.index')->name('contacts');


Route::group(['middleware' => ['web']], function () {
    //
});

Route::prefix('products')->as('products')->group(function() {
    Route::get('/', [ProductController::class, 'index'])->name(''); // на этой странице получаем типы
    Route::get('/{category}', [ProductController::class, 'category'])->name('.category')->
    where('category', '^(?!.*/product).*$')->
     name('.category')->middleware('readableCategory');
    Route::get('/{category}/{item}', [ProductController::class, 'item'])->
    where('category', '.*/product')->
    name('.item')->middleware('readableCategory','readableProduct'); // здесь конкретный ите

});

//Route::get('question-mail', [MailController::class, 'sendQuestionMail'])->name('question-mail');
Route::post('question-mail', [MailController::class, 'sendQuestionMail'])->name('question-mail');
Route::post('order-mail', [MailController::class, 'sendOrderMail'])->name('order-mail');

Route::fallback(function () { return redirect()->route('main');

});

//Route::get('user_model/{path}', 'ModelController@user_model')->where('path', '.*')

