<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('student', function () {
    $student = [
        'id' => 68221,
        'name' => 'พรนัชชา ก่อแก้ว',
        'student_id' => '68152310189-8',
        'major' => 'ระบบสารสนเทศ',
        'faculty' => 'บริหารธุรกิจ',
    ];
    return view('student', compact('student'));
});

Route::prefix('author')->name('author.')->group(function () {
    Route::get('/about', [AdminController::class, 'about2'])->name('about');
    Route::get('/blog', [AdminController::class, 'blog2'])->name('blog');
    Route::get('/create', [AdminController::class, 'form'])->name('create');
    Route::post('/insert', [AdminController::class, 'insert'])->name('insert');
    Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
    Route::get('/change/{id}', [AdminController::class, 'change'])->name('change');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [AdminController::class, 'update'])->name('update');
});
Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "เชื่อมต่อฐานข้อมูลสำเร็จ! Database name: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $e->getMessage();
    }
});
Route::post('/claim',[AdminController::class,'claim'])->name('claim');  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
