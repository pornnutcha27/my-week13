<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "ยินดีต้อนรับ <a href='".route('login')."'> Login</a>";
});

Route::get('/', function () {
    return "เกี่ยวกับเรา";
});

Route::get('blog/{id}', function ($id) {
    return "บทความทั้งหมด".$id;
});

Route::get('admin/user/ked', function () {
    return "<h1>ยินดีต้อนรับ Admin </h1>";
})->name('login');

Route::get('student', function () {
    $student = [
        "id" => 68221,
        "name" => "พรนัชชา ก่อแก้ว",
        "student_id" => "68152310189-8",
        "major" => "ระบบสารสนเทศ",
        "faculty" => "บริหารธุรกิจ"
    ];
    return view("student", compact("student"));
});

Route::fallback(
    function(){
    return "ไม่พบหน้า";
    });
