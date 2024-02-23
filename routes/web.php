<?php

use App\Models\Blog;
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

Route::get('/', function () {
    return view('blogs',[
        'blogs' => Blog::all()
    ]);
}); 

// wildcard
Route::get('/blogs/{filename}', function ($filename) {
    return view('blog-detail', [
        'blog' => Blog::find($filename)
    ]);

    // $blog = file_get_contents(resource_path('/blogs/'.$filename.'.html'));

    // return view('blog-detail',[
    //     'blog' => $blog
    // ]);

    // dd($filename);
});

