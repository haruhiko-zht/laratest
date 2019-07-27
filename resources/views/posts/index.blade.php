@extends('layout.app')

{{--@push('styles')--}}
{{--<link href="{{asset('css/style.css')}}" rel="stylesheet">--}}
{{--@endpush--}}

@section('appContent')

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Body</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th>{{ $post->id }}</th>
                <th><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></th>
                <th>{{ $post->body }}</th>
                <th><a href="{{ route('posts.edit', $post->id) }}">Edit post</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop