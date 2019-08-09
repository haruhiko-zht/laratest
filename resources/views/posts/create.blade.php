@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <form method="post" action="{{ url('/posts') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="body">Text</label>
                <textarea id="article-ckeditor" class="form-control" rows="5" name="body"></textarea>
            </div>

            <div class="form-group">
                <label for="file">File</label>
                <input type="file" class="form-control" id="file" name="file">
            </div>

            <button type="submit">submit</button>
        </form>

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
        <script>
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}'
            };

            $('#article-ckeditor').ckeditor(options);
            // CKEDITOR.replace('article-ckeditor');
        </script>
    </div>
@endsection