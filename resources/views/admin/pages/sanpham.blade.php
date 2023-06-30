@extends('admin.main')


@section('sanpham')
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
                                <img src="/admin/img/slide-dongho-7.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="/admin/img/slide-dongho-5.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="/admin/img/slide-dongho-11.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block"></div>
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

                <div class="breadcrum">
                    <nav
                        style="--bs-breadcrumb-divider: url(&#34;data:image/svg + xml, %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb"
                    >
                        <ol class="breadcrumb">
                        <button class="btn-quangcao btn-trangchu">
                            Trang chủ
                        </button>
                        </ol>
                    </nav>
                </div>

                <div class="mid-menu">
                    <ul>
                        <li>
                            Giới tính
                            <div class="drop-menu">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="" />
                                <label for="vehicle1"> Nam</label><br />
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="" />
                                <label for="vehicle2"> Nữ</label><br />
                            </div>
                        </li>
                        <li>
                            Màu sắc
                            <div class="drop-menu">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="" />
                                <label for="vehicle1"> Màu den</label><br />
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="" />
                                <label for="vehicle2"> Màu xanh</label><br />
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="" />
                                <label for="vehicle2"> Màu trắng</label><br />
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="" />
                                <label for="vehicle2"> Màu vàng</label><br />
                            </div>
                        </li>
                        <li>
                            Hãng
                            <div class="drop-menu">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="" />
                                <label for="vehicle1"> Luxury</label><br />
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="" />
                                <label for="vehicle2"> Rolex</label><br />
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="" />
                                <label for="vehicle2"> Omega</label><br />
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="" />
                                <label for="vehicle2"> Calvin Klein</label><br />
                            </div>
                        </li>
                        <li>
                            Giá tiền
                            <div class="drop-menu">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="" />
                                <label for="vehicle1"> dưới 1.000.000 </label><br />
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="" />
                                <label for="vehicle2"> 1.000.000 - 5.000.000</label><br />
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="" />
                                <label for="vehicle2"> 5.000.000 - 10.000.000</label><br />
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="" />
                                <label for="vehicle2"> 10.000.000 - 20.000.000</label><br />
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="" />
                                <label for="vehicle2"> trên 20.000.000</label><br />
                            </div>
                        </li>
                    </ul>
                    <div class="clear" style="clear: both;"></div>
                </div>

            <span class="form-message">@include('admin.alert')</span>



                <div class="mid-grid-sanpham">

                    @foreach($product as $product)
                    <div class="card-sanpham">
                        <div style="position: relative; cursor: pointer;" class="img-sanpham">
                            <img src="{{asset('/imgproduct/'.$product->imgsp)}}" alt="">
                        </div>
                        <div class="title">
                            <h3>{{$product->namesp}}</h3>
                            <del>{{$product->giagoc}}$</del>
                            <p>
                                Giá:
                                {{$product->giasp}}$
                            </p>
                            <div style="display:flex" class="SuaXoaBtn">
                            <form action="/admin/pages/sanpham/edit/{{$product->idsp}}" method="patch">
                                <input type="submit" class="btn_sua_xoa" value="Sửa">
                            </form>
                            <form action="/admin/pages/sanpham/delete/{{$product->idsp}}" method="post">
                                <input type="submit" class="btn delcart btn_sua_xoa" value="Xoá">
                                @method('DELETE')
                                @csrf
                            </form>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="clear" style="clear: both;"></div>
                </div>
            </div>
        </div>
    </div>

    <button id="btn-cart" class="btn-addsp" name="btn-cart">
        <i class="fa-solid fa-plus"></i>
    </button>

    <div class="form-addsp form-update" id="form-addsp form-update">
        <form class="login__container addsp"  action="{{URL::to('/admin/pages/sanpham/store')}}" method="POST" enctype="multipart/form-data" >
          <div class="login-close addsp-btn-close update-btn-close">
              <i class="fas fa-times"></i>
          </div>
          <header class="login-header">
              Thêm sản phẩm
          </header>

          <div class="login-body">
              <label style="margin-bottom: 2px" for="namesp"class="login-label">
                  Tên sản phẩm
              </label>
              <input style="margin-bottom: 8px;" type="text" id="namesp" class="login-input" required  name="namesp" placeholder="Nhập tên sản phẩm">
              <span class="form-message"></span>


              <label style="margin-bottom: 2px" for="giasp" class="login-label">
                Giá
              </label>
              <input style="margin-bottom: 8px;" type="text" id="giasp" class="login-input" required name="giasp" placeholder="Nhập giá">
              <span class="form-message"></span>


              <label style="margin-bottom: 2px" for="giagoc" class="login-label">
                Giá gốc
              </label>
              <input style="margin-bottom: 8px;" type="text" id="giagoc" class="login-input" required name="giagoc" placeholder="Nhập giá gốc">
              <span class="form-message"></span>


              <label style="margin-bottom: 2px" for="soluong" class="login-label">
                Số lượng
              </label>
              <input style="margin-bottom: 8px;" type="text" id="Soluong" class="login-input" required name="soluong" placeholder="Nhập số lượng">
              <span class="form-message"></span>

              <label style="margin-bottom: 2px" for="loaisp" class="login-label">
                Loại sản phẩm
              </label>
              <select style="margin-bottom: 8px;" id="loaisp" class="login-input" required name="loaisp">
                <option value="">Chọn loại sản phẩm</option>
                <option value="luxury" @if(old('loaisp') == 'luxury') selected @endif>Luxury</option>
                <option value="rolex" @if(old('loaisp') == 'rolex') selected @endif>Rolex</option>
                <option value="omega" @if(old('loaisp') == 'omega') selected @endif>Omega</option>
                <option value="calvin klein" @if(old('loaisp') == 'calvin klein') selected @endif>Calvin Klein</option>
              </select>
              <span class="form-message"></span>

              <label style="margin-bottom: 2px" for="chitietsp" class="login-label">
                Mô tả
              </label>
              <input style="margin-bottom: 8px;" type="text" id="chitietsp" class="login-input" required name="chitietsp" placeholder="Nhập chi tiết sản phẩm">
              <span class="form-message"></span>


              <label style="margin-bottom: 2px" for="imgsp" class="login-label">
                Hình ảnh
              </label>
              <input style="margin-bottom: 8px;" type="file" id="file" class="login-input" required name="imgsp" >

              <button type="submit" id="login-btn" class="themsanpham" name="themsanpham">
                Xác nhận
              </button>
          </div>
          @csrf
        </form>
    </div>

@endsection
