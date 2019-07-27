@extends('layout.app')

{{--@push('styles')--}}
{{--<link href="{{asset('css/style.css')}}" rel="stylesheet">--}}
{{--@endpush--}}

@section('appContent')

    <form method="post" action="/posts/{{ $post->id }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="title_form">Title</label>
            <input type="text" class="form-control" id="title_form" name="title"
                   placeholder="Enter the title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="content_form">Body</label>
            <textarea class="form-control" id="content_form" name="body" rows="3">{{ $post->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <form method="post" action="/posts/{{ $post->id }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Delete post</button>
    </form>
@stop