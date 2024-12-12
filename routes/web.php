<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

// Định nghĩa route cho trang thư viện
Route::get('/libraries', [LibraryController::class, 'index']);
