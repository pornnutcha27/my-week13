@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="mt-3">
                        <a href="{{ route('author.blog') }}" class="btn btn-primary">จัดการบทความ</a>
                        <a href="{{ route('author.create') }}" class="btn btn-success">เขียนบทความ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
