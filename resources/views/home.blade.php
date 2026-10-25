@extends('layouts.master')

@section('title', 'Trang chủ')

@section('content')
    <h2>Danh sách bài viết</h2>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card p-3 mb-3">
                <h4>{{ $post['title'] }}</h4>
                <p>{{ $post['content'] }}</p>
            </div>
        @endforeach
    @else
        <p>Chưa có bài viết nào.</p>
    @endif
@endsection