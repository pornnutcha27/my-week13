@extends('layouts.app')

@section('title')
    แก้ไขบทความ
@endsection

@section('content')
<div class="container">
    <h2 class="text-center py-3">แก้ไขบทความ</h2>

    <form method="POST" action="{{route('update', $blog->id ?? '') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title ?? '') }}">

            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">เนื้อหาบทความ</label>
            <textarea name="content" class="form-control" rows="5">{{ old('content', $blog->content ?? '') }}</textarea>

            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">อัปเดตบทความ</button>
        <a href="{{ route('blog2') }}" class="btn btn-secondary">ย้อนกลับ</a>
    </form>
</div>
@endsection
