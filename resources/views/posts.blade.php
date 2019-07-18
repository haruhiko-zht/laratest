@extends('layout.app')

{{--@push('styles')--}}
{{--<link href="{{asset('css/style.css')}}" rel="stylesheet">--}}
{{--@endpush--}}

@section('appContent')
    @component('layout.welcome')
        <strong>Welcome to our web.</strong>
        @slot('link')
            <a href="#">click here.</a>
        @endslot
    @endcomponent
    <hr>

    <div>
        This code is <strong>{{ $code }}</strong>
    </div>
    <div>
        This color is <strong>{{ $color }}</strong>
    </div>
    <hr>

    <div>
        @foreach($cars as $car)
            <div>{{ $car }}</div>
        @endforeach
    </div>
    <hr>

    <div>
        @for($i=0; $i<5; $i++)
            <div>The current number is {{ $i }}</div>
        @endfor
    </div>
    <hr>

    @if($color === 'Red!')
        <div>The color is red</div>
    @else
        <div>the color is not red</div>
    @endif
    <hr>

    @empty(!$hobbies)
    <div>
        exist
        @foreach($hobbies as $hobby)
            <div>{{ $hobby }}</div>
        @endforeach
    </div>
    @endempty

@stop