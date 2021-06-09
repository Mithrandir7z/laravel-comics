@extends('layouts.app')

@section('main_content')

    <div class="blue_row">
        <div class="image_product">
            <img src="{{$product['thumb']}}" alt="{{$product['title']}}">
        </div>
    </div>
    
    <div class="product-info">
        {{-- {{dd($product['title'])}} --}}

        <div class="general_container_product">
            <div class="container_left">
                <h1>{{$product['title']}}</h1>
    
                <div class="container_green_row">
                    <div class="green_row_left">
                        <div class="left">
                            <span>
                                U.S. Price: {{$product['price']}}
                            </span>
                        </div>
    
                        <div class="right">
                            <span>
                                AVAILABLE
                            </span>
                        </div>
                    </div>
                    <div class="green_row_right">
                        <span>
                            <p>Check Availability</p>
                        </span>
                    </div>
                </div>
    
                <p>
                    {{$product['description']}}
                </p>
            </div> 
    
    
            <div class="container_right">
                <h4>ADVERTISEMENT</h4>
                <img src="{{asset('img/a-d-v.jpg')}}" alt="{{$product['title']}}">
            </div>
        </div>
         
    </div>  

@endsection