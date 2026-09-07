@extends('layouts.app')
@section('title')
    บทความ
@endsection

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-2">
        <h2 class="mb-0">จัดการบทความ</h2>
        <a href="{{ route('form') }}" class="btn btn-primary">เขียนบทความ</a>
    </div>
    @if($blog2->count() > 0)
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">Titlt</th>
                {{-- <th scope="col">Content</th> --}}
                <th scope="col">Status</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($blog2 as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                   {{--  <td>{{ Str::limit($item->content, 10) }}</td> --}}

                    <td>
                        @if ($item->status == 1)
                            <a href="{{route('change', $item->id)}}"class="btn btn-outline-success">เผยแพร่แล้ว</a>
                        @else
                            <a href="{{route('change', $item->id)}}"class="btn btn-outline-danger">ยังไม่เผยแพร่</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('edit', $item->id)}}"class="btn btn-outline-warning">แก้ไข</a>
                    </td>
                    <td><a href="{{ route('delete', $item->id) }}" class="btn btn-outline-danger"
                            onclick="return confirm('คุณต้องการลบบทความนี้จริงหรือไม่?')">ลบ</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$blog2->links()}}  
    @else
    <div class="alert alert-info text-center">ยังไม่มีบทความ</div>
    @endif
</div>

@endsection
