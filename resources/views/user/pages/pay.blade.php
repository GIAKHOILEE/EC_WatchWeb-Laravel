<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/user/css/pay.css">
    <link rel="stylesheet" href="/frontend/css/main-menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20190617/original/pngtree-technology-open-icon-ui-png-image_3840639.jpg">
    <title>Pay</title>
</head>
<body>

    <div class="all-pay">
        <div class="pay-left">
            <h1>THÔNG TIN TÀI KHOẢN</h1>

            <div  class="body-pay-left">
                <div class="nguoinhan">
                    <span class="font-weight">Tên người nhận:{{Auth::user()->username}}</span>
                    <span class="tennguoinhan"></span>
                </div>
                <div class="SDT-ND">
                    <span class="headsdt font-weight">Email:{{Auth::user()->email}}</span>
                    <p class="SDT-kh" name="SDT-kh" id="SDT-kh"> </p>
                </div>

                <div class="diachikh">

                    <?php $iduser =  Session::get('iduser'); ?>

                    <form action="/user/pages/bill/store/{{$iduser}}" name = "diachi" method = "POST">
                        @csrf
                        <div class="nguoinhan">
                            <span for="province" class="font-weight">SDT: </span><br>
                            <input type="text"  name="note" class="ghichund">
                        </div>
                        <span class="diachi font-weight">Địa Chỉ Khách Hàng: </span>
                        <p class="bodykhachhang">
                            <label for="province " class="font-weight">Tỉnh/TP</label><br>

                            <select name="tinh" id="province">
                                <option value="" disabled selected>-- Chọn Tỉnh --</option>
                            </select><br><br>

                            <label for="district"class="font-weight" >Quận/Huyện</label><br>

                            <select name = "huyen" id="district">
                                <option value="" disabled selected>-- Chọn huyện--</option>
                            </select><br><br>

                            <label for="province" class="font-weight">Xã/Phường</label><br>

                            <input type="text" name = "xa" class="xaphuong" placeholder="Chọn Xã phường" style="font-size: 15px;"><br><br>

                        </p>

                        <input type="submit" style="color:#fff; font-weight: 600" class="button" value="Thanh Toán" name= "submitdiachi">
                    </form>



                </div>

            </div>

        </div>
        <div class="pay-right">
            <div>
                <h1>ĐƠN HÀNG CỦA BẠN</h1>
                <div class="head-right">
                    <div class="pay-headsp">
                        <p class="head-sp">SẢN PHẨM</p>
                        <p class="head-sp">SỐ LƯỢNG</p>
                        <p class="head-tamtinh">TẠM TÍNH</p>
                    </div>
                </div>
            </div>
            <?php
                $tamtinh = 0;
                $tongtamtinh = 0;
                $phigiaohang = 0;
                $tongtien = 0;
            ?>
            <?php
            $tamtinh = 0;
            $tongtamtinh = 0;
            $phigiaohang = 0;
            $tongtien = 0;
        ?>
        @foreach ($payuser as $payuser )
            <?php
                $tamtinh = $payuser->soluong * $payuser->giasp;
            ?>
                <div class="head-right">

                    <div class="pay-ttsp">
                        <p class="pay-tensp">{{$payuser->namesp}}</p>
                        <p class="pay-slsp">{{$payuser->soluong}}</p>
                        <p class="tien">{{$tamtinh}} <sup>đ</sup></p>
                    </div>
                </div>
                <?php
                $tongtamtinh += $tamtinh;
                $phigiaohang = 20000;
                $tongtien = $tongtamtinh + $phigiaohang
            ?>

        @endforeach



            <div class="giao-hang-main pay_giao_hang">
                <div class="phi-giao-hang">
                    <span style="font-weight:600" >PHÍ GIAO HÀNG:</span> <?php echo($phigiaohang) ?><span><sup>đ</sup></span>
                </div>

            </div>
            <div class="total_money pay_total_money">
                <div class="total_money-title">
                    <span style="font-weight:600">TỔNG ĐƠN HÀNG: </span><?php echo($tongtien) ?><sup>đ</sup>
                    {{-- <div class="total-main" name="total-main">65000<sup>đ</sup></div> --}}
                </div>
            </div>


        </div>
        </div>

    </div>


</body>
    <script src="/user/js/ajax.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>
