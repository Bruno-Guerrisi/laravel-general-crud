@extends('layouts.main')

@section('content')

    <div class="container mt-5 p-3 text-center index_container">

        <h1 class="mb-2">Abbigliamento</h1>

        @if (session('deleted'))
            <div class="alert alert-success">
                {{ session('deleted') }} è stato eliminato correttamente
            </div>
        @endif

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


                        <span class="my_destroy">

                            <form action="{{ route('products.destroy' , $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                
                                <button class="delete_button" type="submit" value="delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </span>

                        {{-- edit card --}}
                        <span class="my_edit">

                            <a href="{{ route('products.edit', $product->id) }}">
                                <i class="fas fa-wrench"></i>
                            </a>

                        </span>

                        {{-- view all --}}
                        <span class="view_other">

                            <a href="{{ route('products.show', $product->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
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


        <div class="page_list">{{ $products->links() }}</div>
        
    </div>
    
@endsection