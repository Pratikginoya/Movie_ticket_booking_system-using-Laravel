<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\moviecontroller;

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

// Front-end
Route::any('/',[moviecontroller::class,'index']);
Route::any('/login',[moviecontroller::class,'user_login']);
Route::any('/register',[moviecontroller::class,'user_register']);

Route::post('/screen',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/{id}',[moviecontroller::class,'show_time']);
Route::any('/logout',[moviecontroller::class,'logout']);

// Back-end (Cinema Theater Admin)
Route::any('/cinema/index',[moviecontroller::class,'cinema_index']);
Route::any('/cinema-register',[moviecontroller::class,'cinema_register']);
Route::any('/cinema/dashboard',[moviecontroller::class,'cinema_dashboard'])->middleware('cinema_login_check');

Route::any('/cinema/add-movie-show',[moviecontroller::class,'add_movie_show'])->middleware('cinema_login_check');

	// Today's Show
Route::any('/cinema/view-movie-show-today',[moviecontroller::class,'view_movie_show_today'])->middleware('cinema_login_check');
Route::any('/cinema/view-movie-show-today/{id}',[moviecontroller::class,'delete_movie_show_today'])->middleware('cinema_login_check');
Route::any('/cinema/edit-movie-show-today/{id}',[moviecontroller::class,'edit_movie_show_today'])->middleware('cinema_login_check');
Route::post('/cinema/edit-movie-show-today/{id}',[moviecontroller::class,'submit_edit_movie_show_today'])->middleware('cinema_login_check');

	// Today+1's Show
Route::any('/cinema/view-movie-show-2',[moviecontroller::class,'view_movie_show_2'])->middleware('cinema_login_check');
Route::any('/cinema/view-movie-show-2/{id}',[moviecontroller::class,'delete_movie_show_2'])->middleware('cinema_login_check');
Route::any('/cinema/edit-movie-show-2/{id}',[moviecontroller::class,'edit_movie_show_2'])->middleware('cinema_login_check');
Route::post('/cinema/edit-movie-show-2/{id}',[moviecontroller::class,'submit_edit_movie_show_2'])->middleware('cinema_login_check');

	// Today+2's Show
Route::any('/cinema/view-movie-show-3',[moviecontroller::class,'view_movie_show_3'])->middleware('cinema_login_check');
Route::any('/cinema/view-movie-show-3/{id}',[moviecontroller::class,'delete_movie_show_3'])->middleware('cinema_login_check');
Route::any('/cinema/edit-movie-show-3/{id}',[moviecontroller::class,'edit_movie_show_3'])->middleware('cinema_login_check');
Route::post('/cinema/edit-movie-show-3/{id}',[moviecontroller::class,'submit_edit_movie_show_3'])->middleware('cinema_login_check');

	// Today+3's Show
Route::any('/cinema/view-movie-show-4',[moviecontroller::class,'view_movie_show_4'])->middleware('cinema_login_check');
Route::any('/cinema/view-movie-show-4/{id}',[moviecontroller::class,'delete_movie_show_4'])->middleware('cinema_login_check');
Route::any('/cinema/edit-movie-show-4/{id}',[moviecontroller::class,'edit_movie_show_4'])->middleware('cinema_login_check');
Route::post('/cinema/edit-movie-show-4/{id}',[moviecontroller::class,'submit_edit_movie_show_4'])->middleware('cinema_login_check');

	// Today+4's Show
Route::any('/cinema/view-movie-show-5',[moviecontroller::class,'view_movie_show_5'])->middleware('cinema_login_check');
Route::any('/cinema/view-movie-show-5/{id}',[moviecontroller::class,'delete_movie_show_5'])->middleware('cinema_login_check');
Route::any('/cinema/edit-movie-show-5/{id}',[moviecontroller::class,'edit_movie_show_5'])->middleware('cinema_login_check');
Route::post('/cinema/edit-movie-show-5/{id}',[moviecontroller::class,'submit_edit_movie_show_5'])->middleware('cinema_login_check');

	// Today+5's Show
Route::any('/cinema/view-movie-show-6',[moviecontroller::class,'view_movie_show_6'])->middleware('cinema_login_check');
Route::any('/cinema/view-movie-show-6/{id}',[moviecontroller::class,'delete_movie_show_6'])->middleware('cinema_login_check');
Route::any('/cinema/edit-movie-show-6/{id}',[moviecontroller::class,'edit_movie_show_6'])->middleware('cinema_login_check');
Route::post('/cinema/edit-movie-show-6/{id}',[moviecontroller::class,'submit_edit_movie_show_6'])->middleware('cinema_login_check');

Route::any('/cinema/bookings',[moviecontroller::class,'bookings']);
Route::any('/cinema/log-out',[moviecontroller::class,'cinema_logout']);


// Back-end (Website Admin)
Route::any('/admin/index',[moviecontroller::class,'admin_index']);
Route::any('/admin/dashboard',[moviecontroller::class,'dashboard'])->middleware('admin_login_check');

Route::any('/admin/add-slider',[moviecontroller::class,'add_slider'])->middleware('admin_login_check');
Route::any('/admin/view-slider',[moviecontroller::class,'view_slider'])->middleware('admin_login_check');
Route::any('/admin/view-slider/{id}',[moviecontroller::class,'delete_slider'])->middleware('admin_login_check');
Route::any('/admin/edit-slider/{id}',[moviecontroller::class,'edit_slider'])->middleware('admin_login_check');
Route::post('/admin/edit-slider/{id}',[moviecontroller::class,'submit_edit_slider'])->middleware('admin_login_check');

Route::any('/admin/add-movie',[moviecontroller::class,'add_movie'])->middleware('admin_login_check');
Route::any('/admin/view-movie',[moviecontroller::class,'view_movie'])->middleware('admin_login_check');
Route::any('/admin/view-movie/{id}',[moviecontroller::class,'delete_movie'])->middleware('admin_login_check');
Route::any('/admin/edit-movie/{id}',[moviecontroller::class,'edit_movie'])->middleware('admin_login_check');
Route::post('/admin/edit-movie/{id}',[moviecontroller::class,'submit_edit_movie'])->middleware('admin_login_check');
Route::any('/admin/view-cinema',[moviecontroller::class,'view_cinema'])->middleware('admin_login_check');

Route::any('/admin/log-out',[moviecontroller::class,'admin_logout']);


// Screens
Route::any('/show-time/INOX_Vesu_screen_1/{id}',[moviecontroller::class,'INOX_Vesu_screen_1']);
Route::post('/show-time/INOX_Vesu_screen_1/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/INOX_Vesu_screen_2/{id}',[moviecontroller::class,'INOX_Vesu_screen_2']);
Route::post('/show-time/INOX_Vesu_screen_2/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/INOX_Vesu_screen_3/{id}',[moviecontroller::class,'INOX_Vesu_screen_3']);
Route::post('/show-time/INOX_Vesu_screen_3/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/INOX_Vesu_screen_4/{id}',[moviecontroller::class,'INOX_Vesu_screen_4']);
Route::post('/show-time/INOX_Vesu_screen_4/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/INOX_Vesu_screen_5/{id}',[moviecontroller::class,'INOX_Vesu_screen_5']);
Route::post('/show-time/INOX_Vesu_screen_5/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/INOX_Vesu_screen_6/{id}',[moviecontroller::class,'INOX_Vesu_screen_6']);
Route::post('/show-time/INOX_Vesu_screen_6/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/INOX_Vesu_screen_7/{id}',[moviecontroller::class,'INOX_Vesu_screen_7']);
Route::post('/show-time/INOX_Vesu_screen_7/{id}',[moviecontroller::class,'book_ticket']);

Route::any('/show-time/Rajhans Cinema_Vesu_screen_1/{id}',[moviecontroller::class,'Rajhans_Cinema_Vesu_screen_1']);
Route::post('/show-time/Rajhans Cinema_Vesu_screen_1/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/Rajhans Cinema_Vesu_screen_2/{id}',[moviecontroller::class,'Rajhans_Cinema_Vesu_screen_2']);
Route::post('/show-time/Rajhans Cinema_Vesu_screen_2/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/Rajhans Cinema_Vesu_screen_3/{id}',[moviecontroller::class,'Rajhans_Cinema_Vesu_screen_3']);
Route::post('/show-time/Rajhans Cinema_Vesu_screen_3/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/Rajhans Cinema_Vesu_screen_4/{id}',[moviecontroller::class,'Rajhans_Cinema_Vesu_screen_4']);
Route::post('/show-time/Rajhans Cinema_Vesu_screen_4/{id}',[moviecontroller::class,'book_ticket']);


Route::any('/show-time/PVR_Piplod_screen_1/{id}',[moviecontroller::class,'PVR_Piplod_screen_1']);
Route::post('/show-time/PVR_Piplod_screen_1/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/PVR_Piplod_screen_2/{id}',[moviecontroller::class,'PVR_Piplod_screen_2']);
Route::post('/show-time/PVR_Piplod_screen_2/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/PVR_Piplod_screen_3/{id}',[moviecontroller::class,'PVR_Piplod_screen_3']);
Route::post('/show-time/PVR_Piplod_screen_3/{id}',[moviecontroller::class,'book_ticket']);
Route::any('/show-time/PVR_Piplod_screen_4/{id}',[moviecontroller::class,'PVR_Piplod_screen_4']);
Route::post('/show-time/PVR_Piplod_screen_4/{id}',[moviecontroller::class,'book_ticket']);

Route::get('/pay_now',[moviecontroller::class,'pay_now']);
Route::post('/pay_now',[moviecontroller::class,'pay_now']);
Route::any('/ticket_detail/{id}',[moviecontroller::class,'ticket_detail']);
Route::any('/my_booking',[moviecontroller::class,'my_booking']);
