@extends('layouts.app')

@section('title')
    เขียนบทความ
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-dark text-white text-center py-3">
                    <h2 class="mb-0">เขียนบทความใหม่</h2>
                </div>

                <div class="card-body p-4">

                    <form method="POST" action="{{ route('insert') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                ชื่อบทความ
                            </label>

                            <input type="text"
                                name="title"
                                class="form-control"
                                placeholder="กรอกชื่อบทความ"
                                value="{{ old('title') }}">

                            @error('title')
                                <div class="text-danger my-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                เนื้อหาบทความ
                            </label>

                            <textarea name="content"
                                class="form-control"
                                rows="7"
                                placeholder="กรอกเนื้อหาบทความ">{{ old('content') }}</textarea>

                            @error('content')
                                <div class="text-danger my-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center gap-2">

                            <button type="submit" class="btn btn-primary px-4">
                                บันทึกบทความ
                            </button>

                            <a href="{{ route('blog2') }}"
                                class="btn btn-secondary px-4">
                                ย้อนกลับ
                            </a>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection