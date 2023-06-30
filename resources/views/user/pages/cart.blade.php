

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/carttest.css">

  </head>
  <body>
    <div class="container">
        <div class="contentbar">
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Giỏ Hàng</h5>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-lg-11 col-xl-10">
                                        <div class="cart-container">
                                            <div class="cart-head">
                                                <div class="table-responsive">
                                                    <table class="table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">STT</th>
                                                                <th scope="col">Xóa</th>
                                                                <th scope="col">Sản Phẩm</th>
                                                                <th scope="col">Tên Sản Phẩm</th>
                                                                <th scope="col">Số lượng</th>
                                                                <th scope="col">Giá</th>
                                                                <th scope="col" class="text-right">Tạm tính</th>
                                                            </tr>
                                                        </thead>

                                                        <?php
                                                            $i = 1;
                                                            $tongtamtinh = 0;
                                                            $phigiaohang = 20000;
                                                            $tamtinh = 0;
                                                            $tong =  0 ;
                                                        ?>
                                                        @foreach ($userproducts as $productsId)
                                                            <?php
                                                                $tamtinh = $productsId->soluong * $productsId->giasp;
                                                            ?>
                                                            {{-- @foreach ($products as $product) --}}
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">{{$i++}}</th>
                                                                        <td>
                                                                            <form action="/user/pages/delete/{{$productsId->idproduct}}" method = "POST">
                                                                                @method('DELETE')
                                                                                @csrf
                                                                            <button type="submit" style="color:red; border:none;"><i class="ri-delete-bin-3-line"></i></button>
                                                                            </form>
                                                                        </td>
                                                                        <td><img src="{{asset('/imgproduct/'.$productsId->imgsp)}}" class="img-fluid" width="35" alt="product"></td>
                                                                        <td>{{$productsId->namesp}}</td>
                                                                        <td>
                                                                            <div class="form-group mb-0">
                                                                                <input type="number" class="form-control cart-qty" name="cartQty1" id="cartQty1" value="{{$productsId->soluong}}">
                                                                            </div>
                                                                        </td>
                                                                        <td>{{$productsId->giasp}}<sup>đ</sup></td>
                                                                        <td class="text-right">{{$tamtinh}}<sup>đ</sup></td>
                                                                    </tr>
                                                                </tbody>
                                                                {{-- <button>{{$productsId->idcart}}a</button>
                                                                <button>{{$productsId->iduser}}</button>
                                                                <div class="cart-footer text-right">
                                                                    <a href="" class="btn btn-success my-1">dat hang<i class="ri-arrow-right-line ml-2"></i></a>
                                                                </div> --}}
                                                                <?php
                                                                    $tongtamtinh += $tamtinh;
                                                                    $tong = $tongtamtinh + $phigiaohang;
                                                                ?>
                                                            @endforeach



                                                    </table>
                                                </div>
                                            </div>
                                            <div class="cart-body">
                                                <div class="row">
                                                    <div class="col-md-12 order-2 order-lg-1 col-lg-5 col-xl-6">
                                                        <div class="order-note">
                                                            <form>
                                                                <div class="form-group">
                                                                    <form class="magiamgia" id="magiamgia" action="{{URL::to('/user/pages/sanpham/cart/store')}}" method="post">
                                                                        <div class="input-group">
                                                                            @csrf
                                                                            <input type="text" class="form-control" name="magiamgia" placeholder="Mã giảm giá" aria-label="Search" aria-describedby="button-addonTags">
                                                                            <input type="submit" class="input-group-append" value="Áp dụng">

                                                                            <div class="input-group-append">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="specialNotes">Ghi chú cho đơn hàng:</label>
                                                                    <textarea class="form-control" name="specialNotes" id="specialNotes" rows="3" placeholder="Ghi chú"></textarea>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 order-1 order-lg-2 col-lg-7 col-xl-6">
                                                        <div class="order-total table-responsive ">
                                                            <table class="table table-borderless text-right">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tạm tính :</td>
                                                                        <td><?php echo($tongtamtinh) ?><sup>đ</sup></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Phí giao hàng :</td>
                                                                        <td><?php echo($phigiaohang) ?><sup>đ</sup></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Mã giảm giá :</td>
                                                                        <td>0<sup>đ</sup></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="f-w-7 font-18"><h4>Tổng :</h4></td>
                                                                        <td class="f-w-7 font-18"><h4><?php echo($tong)   ?><sup>đ</sup></h4></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cart-footer text-right">
                                                {{-- <button type="button" class="btn btn-info my-1"><i class="ri-save-line mr-2"></i>Cập nhật giỏ hàng</button> --}}
                                                <form action="{{ URL::to('/user/pages/history/store') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success my-1">Đặt hàng<i class="ri-arrow-right-line ml-2"></i></button>
                                                </form>
                                                <?php $iduser =  Session::get('iduser'); ?>
                                                <a href="{{'/user/pages/sanpham/pay'}}" class="btn btn-success my-1">Tiến hành thanh toán<i class="ri-arrow-right-line ml-2"></i></a>
                                            </div>

                                            <a href="/user/pages/sanpham" class="btn btn-success my-1">Back<i class="ri-arrow-left-line ml-2"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
