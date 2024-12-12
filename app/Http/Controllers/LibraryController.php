<?php

namespace App\Http\Controllers;

use App\Models\Library;

class LibraryController extends Controller
{
    public function index()
    {
        // Lấy tất cả thư viện và bao gồm các sách liên kết
        $libraries = Library::with('books')->get();
        
        // Trả về view với dữ liệu thư viện
        return view('libraries.index', compact('libraries'));
    }
}
