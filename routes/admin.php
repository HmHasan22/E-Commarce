<?php 
// admin route here

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use illuminate\Support\Facades\Route;
// Route::get("/admin",function(){
//     return("hello world");
// });

Route::get("/admin/home",[HomeController::class,"admin"])->name("admin.home")->middleware("is_admin");

Route::get("/admin/login",[LoginController::class,"adminLogin"])->name("admin.login");
