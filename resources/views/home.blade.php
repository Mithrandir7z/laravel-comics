@extends('layouts.app')

@section('main_content')
    <div class="main">
        <ul>
            
        @foreach ($comics_array as $comic)
            {{--Single Comic--}}
            <li>
                <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
            </li>
        @endforeach
            
        </ul>
    </div>
@endsection