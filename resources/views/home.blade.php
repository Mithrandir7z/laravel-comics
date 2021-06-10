@extends('layouts.app')

@section('main_content')
    <div class="main">
        <ul>
            
        @foreach ($comics_array as $comic)
            {{--Single Comic--}}
            <li>
                <a href="{{ route('product', [
                    'id' => $comic['id']
                ])}}">
                    <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
                </a>
            </li>
        @endforeach
            
        </ul>
    </div>
@endsection