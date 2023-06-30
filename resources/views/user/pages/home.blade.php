@extends('user.main')


@section('home')
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
                <img src="/admin/img/slide-dongho-7.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
                </div>
                <div class="carousel-item">
                <img src="/admin/img/slide-dongho-5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
                </div>
                <div class="carousel-item">
                <img src="/admin/img/slide-dongho-11.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
            </div>
        </div>

        <div class="body__mid">
            <div class="mid_quangcao">
            <div class="row">
                <div class="mid_quangcao-alltitle col-lg-6 col-md-12">
                <div class="mid_quangcao-title">
                    <p>We are The Best</p>
                    <h2>Mê từ cái nhìn đầu tiên</h2>
                </div>
                <div class="mid_quangcao-content">
                    <p>Chúng tôi mang đến những sản phẩm chất lượng, sang trọng và thoải mái cho mọi khách hàng</p>
                    <ul>
                    <li><i class="fa-solid fa-circle-check"></i> Có cả size Nam-Nữ</li>
                    <li><i class="fa-solid fa-circle-check"></i> Mặt kính sapphire chống trầy</li>
                    <li><i class="fa-solid fa-circle-check"></i> Đồng hồ có khả năng chống mài mòn, chống trầy xước</li>
                    <li><i class="fa-solid fa-circle-check"></i> Chất liệu thép không gỉ có khả năng chịu nhiệt cao chống ăn mòn</li>
                    </ul>
                    <button class="btn-quangcao"> Khám Phá</button>
                </div>
                </div>
                <div class="mid_quangcao-img col-lg-6 col col-md-12">
                <img src="/admin/img/sanphammoi11.png" alt="">
                </div>
            </div>
            </div>


            
            <!-- SAN PHAM MOI -->
            <div class="mid__sanphammoi">
            <div class="mid__sanphammoi-title" style="text-align: center;">
                <p>Sản phẩm mới</p>
                <h2>Phong Cách Thời Thượng</span>
            </div>
            <div class="mid__sanphammoi--grid">
                <div class="row">
                <div class="col-lg-8 img--hover">
                    <img src="/admin/img/sanphammoi8.png" alt="">
                    <div class="options__img ">
                    <div class="options__img--title">
                        <h1>Đồng hồ Venu</h1>
                        <h5>Đồng hồ thông minh GPS</h5>
                    </div>
                    <div class="options__img--btn">
                        <i class="fa-solid fa-cart-plus"></i>
                    </div>
                    </div>
                </div>
                <div class=" col-lg-4 img--hover">
                    <img src="/admin/img/sanphammoi4.jpg" alt="">
                    <div class="options__img ">
                    <div class="options__img--title">
                        <h1>Đồng hồ Venu</h1>
                        <h5>Đồng hồ thông minh GPS</h5>
                    </div>
                    <div class="options__img--btn">
                        <i class="fa-solid fa-cart-plus"></i>
                    </div>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                    <div class="col-lg-6 img--hover">
                        <img src="/admin/img/sanphammoi10.png" alt="">
                        <div class="options__img">
                        <div class="options__img--title">
                            <h1>Đồng hồ Venu</h1>
                            <h5>Đồng hồ thông minh GPS</h5>
                        </div>
                        <div class="options__img--btn">
                            <i class="fa-solid fa-cart-plus"></i>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 img--hover">
                        <img src="/admin/img/sanphammoi9.png" alt="">
                        <div  class="options__img ">
                        <div class="options__img--title">
                            <h1>Đồng hồ Venu</h1>
                            <h5>Đồng hồ thông minh GPS</h5>
                        </div>
                        <div class="options__img--btn">
                            <i class="fa-solid fa-cart-plus"></i>
                        </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    </div>
                    <div class="row">
                    <div class="col-lg-12 img--hover">
                        <img src="/admin/img/sanphammoi5.png" alt="">
                        <div class="options__img ">
                        <div class="options__img--title">
                            <h1>Đồng hồ Venu</h1>
                            <h5>Đồng hồ thông minh GPS</h5>
                        </div>
                        <div class="options__img--btn">
                            <i class="fa-solid fa-cart-plus"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 img--hover">
                    <img src="/admin/img/sanphammoi12.png" alt="">
                    <div class="options__img ">
                    <div class="options__img--title">
                        <h1>Đồng hồ Venu</h1>
                        <h5>Đồng hồ thông minh GPS</h5>
                    </div>
                    <div class="options__img--btn">
                        <i class="fa-solid fa-cart-plus"></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            

            <!-- TIEN ICH  -->
            <div class="mid__tienich">
            <div class="row">
                <div class="mid__tienich-title col-lg-5 col-sm-12">
                <p>Tiện ích</p>
                <h2>Nhiều ưu đãi và quà tặng hấp dẫn</h2>
                </div>
                <div class="mid__tienich-card col-lg-7 col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                    <i class="fa-solid fa-truck-fast"></i>
                    <div>
                        <h5 class="card-title">Giao hàng miễn phí</h5>
                        <p class="card-text">Giao hàng miễn phí và nhanh chóng trên toàn quốc</p>
                    </div>
                    </div>
                </div>
                <div class="card mb-3" style="margin-left: 50px;">
                    <div class="card-body">
                    <i class="fa-solid fa-gift"></i>
                    <div>
                        <h5 class="card-title">Quà tặng hấp dẫn</h5>
                        <p class="card-text">Quà tặng khi mua hàng và những sự kiện tặng quà hấp dẫn</p>
                    </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                    <i class="fa-solid fa-users"></i>
                    <div>
                        <h5 class="card-title">Nhân viên tư vấn</h5>
                        <p class="card-text">Đội ngũ nhân viên tư vấn dày dặn kinh nghiệm, hoạt động 24/7</p>
                    </div>
                    
                    </div>
                </div>
                </div>
            </div>
            
            </div>

            <!-- BAI VIET MOI NHAT -->
            <div class="mid__baivietmoinhat">
            <div class="mid__baivietmoinhat-title" style="text-align: center;">
                <p>BAI VIET MOI NHAT</p>
            </div>
            <div class="mid__baivietmoi_item">
                <div class="row">
                <div class="col_baiviet col-lg-6 log-md-12">
                    <div class="item_baibietmoi_1">
                    <div class="row">
                        <div class="col-6">
                        <img src="/admin/img/sanphammoi14.png" alt="">
                        </div>
                        <div class="item_baibietmoi-content col-6">
                        <h4>Louis Vuitton ra mắt đồng hồ thông minh thế hệ thứ 3</h4>
                        <p><i>12/11/2015 7:28:36 SA</i></p>
                        <p>Louis Vuitton đã thêm một thiết kế hiện...</p>
                        <a href="#"><h6 style="color: rgb(138, 8, 8);">DOC THEM</h6></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col_baiviet col-lg-6 log-md-12">
                    <div class="item_baibietmoi_2">
                    <div class="row">
                        <div class="col-6">
                        <img src="/admin/img/slide-dongho-1.jpg" alt="">
                        </div>
                        <div class="item_baibietmoi-content col-6">
                        <h4>Vẻ đẹp của đồng hồ cổ</h4>
                        <p><i>12/11/2015 7:28:36 SA</i></p>
                        <p>Điểm tạo sự khác biệt cho chiếc đồng hồ này không chỉ bởi...</p>
                        <a href="#"><h6 style="color: rgb(138, 8, 8);">DOC THEM</h6></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            </div>

            <!-- THONG TIN KIEN HE  -->
            <div class="mid__thongtinlienhe">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="lienhe">
                    <p>Liên hệ: </p>
                    <span style="color: seagreen;">(+084) 0466.579.888</span>
                    <div class="lienhe_icon">
                    <i class="fa-solid fa-phone"></i>                  
                    </div>
                </div>
                </div>
                <div class="col-lg-9 col-lg-9 col-sm-12">
                <div class="form_theodoi">
                    <div class="row">
                    <div class="tinmoi col-3">
                        <h5 style="color: seagreen;">TIN MỚI</h5>
                        <p>Đăng ký để theo dõi chi tiết</p>
                    </div>
                    <div class="theodoi col-7">
                        <input class="text-mail" type="text" name="txt-email" value="">
                        <input class="btn btn-secondary" type="button" value="Theo dõi">

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div style="height: 20px;">
            </div>
        </div>
    </div>
@endsection
        
        
      
      
