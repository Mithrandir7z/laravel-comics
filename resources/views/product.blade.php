@extends('layouts.app')

@section('main_content')
    
    <div class="product-info">
        <div class="margine">
            {{-- {{dd($product['title'])}} --}}

            <div class="container">
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
                        
                    </div>
                </div>
            </div>
            
        </div>  
    </div>  

@endsection