@extends('layouts.main')

@section('content')

    <div class="container mt-5 p-3 text-center container_show">

        <h1 class="mb-3"></h1>

        <div class="row">

            <div class="col-lg-6 col-sm-12 image_section">

                <div class="image_carousel">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="{{$product->posterOne}}" class="d-block w-100" alt="{{$product->description}}">
                            </div>

                            <div class="carousel-item">
                                <img src="{{$product->posterTwo}}" class="d-block w-100" alt="{{$product->description}}">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-sm-12 info_section">

                <h2 class="my_brand">{{$product->brand}}</h2>

                <h3 class="my_description">{{$product->description}}</h3>

                <span class="price">
                    {{$product->price}} &euro;
                </span>


                <form action="" class="mt-5 my_form">

                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Selezionare la taglia</option>
                        <option value="1">XS</option>
                        <option value="2">S</option>
                        <option value="3">M</option>
                        <option value="3">L</option>
                        <option value="3">XL</option>
                    </select>

                    <div class="d-flex justify-content-between">
                        <button class="btn btn-dark add_cart">
                            Aggiungi al carrello
                        </button>
                        <button class="add_dream">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection