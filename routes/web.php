<?php
use App\Category;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register','Auth\RegisterController@show')->name('register');
Route::post('/register','Auth\RegisterController@register');

Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/login','Auth\LoginController@show')->name('login');
Route::post('/login','Auth\LoginController@login');

Route::get('/','PostController@home')->name('home');

Route::get('/about','PostController@about')->name('about');

Route::get('/question','PostController@questions')->name('question');


Route::get('/adminlogin','AdminController@login')->name('admin-login');

Route::get('/admin','AdminController@index')->name('dashboard');

Route::get('/admin/add','QueryController@create')->name('add-QA');
Route::post('/admin/add','QueryController@store');

Route::get('/admin/student','AdminController@student')->name('student');

Route::get('/admin/query','AdminController@query')->name('query');

Route::get('/admin/category','CategoryController@index')->name('category-view');
Route::get('/admin/category/create','CategoryController@create')->name('category');
Route::post('/admin/category/create','CategoryController@store');
Route::get('/admin/category/{id}/edit','CategoryController@edit')->name('edit');
Route::post('/admin/category/{id}/edit','CategoryController@update');


Route::get('/{id}/question',function($id){

      $category =Category::where('id',$id)->firstOrFail();
       foreach ($category->questions as $question) {
           echo $question->questions,'<br>';
       }
});

