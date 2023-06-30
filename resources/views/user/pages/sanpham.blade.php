@extends('user.main')


@section('sanpham')
    <!-- Start page sanpham -->

    <div class="page_sanpham">
        <div class="container_pagesanpham">
            <div class="mid">
                <div class="slide_mid">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/user/img/slide-dongho-7.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="/user/img/slide-dongho-5.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://galle.vn/images/products/menufactories//original/romanson-cover_1545097622.png"
                                    class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>

                <div class="breadcrum">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg + xml, %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <button class="btn-quangcao btn-trangchu">
                                Trang chủ
                            </button>
                        </ol>
                    </nav>
                </div>

                <div class="mid-menu">
                    <form action="{{ URL::to('/user/pages/search/sanpham') }}" method="GET">
                        <input class="mid-menu_searach" type="text" name="keyword" placeholder="Nhập từ khóa tìm kiếm">
                        <button class="mid-menu_btnsearach" type="submit">Tìm kiếm</button>
                    </form>
                    <form class="mid-menu_radioGroup" action="{{ URL::to('/user/pages/filter/sanpham') }}" method="GET">
                        <label for="all">
                            <input type="radio" name="type" id="all" value="" onclick="submitFilterForm()">
                            Tất cả
                        </label>

                        <label for="luxury">
                            <input type="radio" name="type" id="luxury" value="luxury"
                                onchange="submitFilterForm()">
                            Luxury
                        </label>
                        <label for="rolex">
                            <input type="radio" name="type" id="rolex" value="rolex"
                                onchange="submitFilterForm()">
                            Rolex
                        </label>
                        <label for="omega">
                            <input type="radio" name="type" id="omega" value="omega"
                                onchange="submitFilterForm()">
                            Omega
                        </label>

                        <label for="calvin_klein">
                            <input type="radio" name="type" id="calvin_klein" value="calvin klein"
                                onchange="submitFilterForm()">
                            Calvin Klein
                        </label>
                        <input type="submit" style="display: none">
                    </form>


                    <div class="clear" style="clear: both;"></div>
                </div>

                <div class="mid-grid-sanpham">
                    @foreach ($product as $product)
                        @csrf
                        <div class="card-sanpham">
                            <div class="img-sanpham">
                                <a href="/user/pages/sanpham/chitietsanpham/{{ $product->idsp }}">
                                    <img src="{{ asset('/imgproduct/' . $product->imgsp) }}" alt="">
                                </a>
                            </div>
                            <div class="title">
                                <h3>{{ $product->namesp }}</h3>
                                <p style="float: left; margin-right: 10px;">
                                    Giá:{{ $product->giasp }}<sup>đ</sup>
                                </p>
                                <del>{{ $product->giagoc }}<sup>đ</sup></del>
                                <div style="clear: both;"></div>
                                <form action="/user/pages/sanpham/cart/{{ $product->idsp }}" method="POST">
                                    @csrf
                                    <input type="number" name="soluong" min="1" max="10"
                                        value="1" />
                                    <input class="submit_cart" type="submit" name="addcart" value="Ðặt hàng" />
                                    <input type="hidden" name="namesp" value="{{ $product->namesp }}" />
                                    <input type="hidden" name="idsp" value="{{ $product->idsp }}" />
                                    <input type="hidden" name="giasp" value=" {{ $product->giasp }}" />
                                    <input type="hidden" name="giagoc" value=" {{ $product->giagoc }}" />
                                    <input type="hidden" name="chitietsp" value=" {{ $product->chitietsp }}" />
                                    <input type="hidden" name="iduser" value="{{ Auth::user()->id }}" />
                                    <input type="hidden" name="imgsp" value="{{ $product->imgsp }}" />
                                </form>
                            </div>
                        </div>
                        <div class="clear" style="clear: both;"></div>
                    @endforeach
                </div>
            </div>
        </div>

        <form action="{{ URL::to('/user/pages/sanpham/cart') }}" method="GET">
            <button id="btn-cart" class="btn-addsp" name="btn-cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </button>
        </form>

    </div>
    <!-- End page sanpham -->

    <script>
        function submitFilterForm() {
            document.querySelector('.mid-menu_radioGroup').submit();
        }
    </script>
@endsection
