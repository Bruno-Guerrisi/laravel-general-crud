@extends('layouts.main')

@section('content')

    <div class="container mt-5 p-3 text-center index_container">

        <h1>Bindex</h1>


        <div class="row">

            <ul>

                @foreach($products as $product)
                <li class="col-sm-12 col-md-6 col-lg-4 mycard">

                    <div class="imagesection">

                        <img class="w-100 image-one"
                            src="{{$product->posterOne}}" 
                            alt="{{$product->description}}">

                        <img class="image-two w-100"
                            src="{{$product->posterTwo}}" 
                            alt="{{$product->description}}">

                        <span class="dream-heart">
                            <i class="far fa-heart"></i>
                        </span>
                    </div>

                    <div class="info-list">
                        <h3 class="brand">
                            {{$product->brand}}
                        </h3>
                        <h4 class="description">
                            {{$product->description}}
                        </h4>
                        <span class="price">
                            {{$product->price}} €
                        </span>
                    </div>

                </li>
                @endforeach
            </ul>

        </div>

    </div>
@endsection