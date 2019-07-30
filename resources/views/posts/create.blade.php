@extends('layout.app')

{{--@push('styles')--}}
{{--<link href="{{asset('css/style.css')}}" rel="stylesheet">--}}
{{--@endpush--}}

@section('appContent')

    <div>
        <br><br>

        <form method="post" action="/posts">
            <div class="form-group">
                <label for="title_form">Title</label>
                <input type="text" class="form-control" id="title_form" name="title"
                       placeholder="Enter the title">
            </div>

            <div class="form-group">
                <label for="content_form">Body</label>
                <textarea class="form-control" id="content_form" name="body" rows="3"></textarea>
            </div>

            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br>
        <div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

    </div>
    <br>


@stop