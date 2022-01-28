<header>
    <div class="container pt-3 container-1">

        <div class="row justify-content-between">
            <div class="col-3">
                <img src="https://mosaic02.ztat.net/nvg/z-header-fragment/zalando-logo/logo_default.svg" alt="">
            </div>

            <div class="col-6">
                <ul class="d-flex list-unstyled justify-content-center other_site">

                    <li class="me-4 
                        @if (Request::route()->getName() == 'home') active @endif">

                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="me-4 
                    @if (Request::route()->getName() == 'products.index') active @endif">
                        <a href="{{ route('products.index') }}">
                            Abbigliamento
                        </a>
                    </li>

                    <li class="me-4">
                        <a href="#">
                            Aggiungere elementi
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-3 text-center">
                <ul class="d-flex list-unstyled justify-content-center">

                    <li class="me-3 cursor-pointer">
                        <i class="far fa-user"></i>
                    </li>

                    <li class="me-3 cursor-pointer">
                        <i class="far fa-heart"></i>
                    </li>

                    <li class="cursor-pointer">
                        <i class="fas fa-shopping-cart"></i>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</header>