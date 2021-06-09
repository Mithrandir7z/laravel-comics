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

        <div class="information">
            <div class="talent">
                <div class="art_by">
                    <div class="left">
                        Art by:
                    </div>

                    <div class="right">
                        <p>
                            @foreach ($product['artists'] as $artist)
                                {{$artist}}
                            @endforeach
                        </p>
                    </div>
                </div>

                <div class="written_by">
                    <div class="left">
                        written by:
                    </div>

                    <div class="right">
                        <p>
                            @foreach ($product['writers'] as $writer)
                                {{$writer}}
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>

            <div class="talent">
                <div class="art_by">
                    <div class="left">
                        Series: 
                    </div>

                    <div class="right">
                        <p>
                            {{$product['series']}}
                        </p>
                    </div>
                </div>

                <div class="written_by">
                    <div class="left">
                        U.S. Price: 
                    </div>

                    <div class="right">
                        <p>
                            <p>
                                {{$product['price']}}
                            </p>
                        </p>
                    </div>
                </div>

                <div class="written_by">
                    <div class="left">
                        On Sale Date: 
                    </div>

                    <div class="right">
                        <p>
                            <p>
                                {{$product['sale_date']}}
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
         
    </div>  

@endsection