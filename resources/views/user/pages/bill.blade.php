<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/user/css/hoadon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20190617/original/pngtree-technology-open-icon-ui-png-image_3840639.jpg">
    <title>Hoá Đơn</title>
</head>
<body>
<div id="page" class="page">
    {{-- <div class="header">
        <div class="logo"><img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png"/></div>
        <div class="company">DreamTeam_technology</div><br/>
        <div class="diachicpn"><i class="fas fa-map-marker-alt"></i> 34 dương thưởng, hoà cường bắc, Hải châu, Đà Nẵng </div>
        <div class="SDTcpn"><i class="fa-solid fa-mobile"></i> 0123456789</div>
    </div> --}}
  <br/>
  <div class="title">
        HÓA ĐƠN THANH TOÁN
        <br/>
  </div>
  <br/>
  <div class="hoadon_ttkh">

    <?php
    $tinh = Session::get('tinh');
    $huyen =Session::get('huyen');
    $xa =Session::get('xa');
    $note = Session::get('note');
    $madonhang = Str::random($length = 8)

    ?>
    <div style="font-weight: 600" class="hotenkh">Mã đơn hàng:<?php echo($madonhang) ?> </div>
    <div class="hotenkh">Khách hàng: {{Auth::user()->username}} </div>
    <div class="sdtkh">Email:{{Auth::user()->email}}</div>
    <div class="sdtkh">Số điện thoại:<?php echo("  " . $note ) ?></div>
    <div class="diachikh">Địa chỉ: <?php echo(  $xa . ", " . $huyen . ",tỉnh " . $tinh) ?>  </div>
  </div>
  <br/>
  <table class="TableData">

  <tr>
    <th>STT</th>
    <th>Tên</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>

  </tr>
  <?php
  $tamtinh = 0;
  $tongtamtinh = 0;
  $phigiaohang = 0;
  $tongtien = 0;
  $i= 0;
?>
    @foreach ($bill as $bill)
    <?php
        $tamtinh = $bill->soluong * $bill->giasp;
    ?>
    <tr>
        <td>{{$i += 1}}</td>
        <td>{{$bill->namesp}}</td>
        <td>{{$bill->soluong}}</td>
        <td>{{$tamtinh}}<sup>đ</sup></td>
    </tr>
    <?php
        $tongtamtinh += $tamtinh;
        $phigiaohang = 20000;
        $tongtien = $tongtamtinh + $phigiaohang

    ?>
    @endforeach



        <td colspan="4" class="tong">Phí Giao Hàng </td>
        <td class="cotSo"><?php echo $phigiaohang ?><sup>đ</sup></td>

        <tr>

      <td colspan="4" class="tong">Tổng cộng</td>
      <td class="cotSo"><?php echo $tongtien ?><sup>đ</sup></td>
    </tr>
     </table>
    <div class="day">
        <div class="dayleft">
            <!-- <div class="footer-left" id="hvn"></div>
            <div class="footer-bot"> Khách hàng</div> -->
        </div>

        <div class="dayright">
            <div class="footer-right" id="hvm"></div>
        </div>
    </div>

    {{-- <div class="inrahoadon">
      <button onclick="window.print();">IN hoá đơn</button>
    </div> --}}
    <div class="btn_thanhtoan" style="display: flex; justify-content: space-around">
        <a href="/user/main" style="text-decoration: none">
            <button type="submit" style="color:#fff; font-weight: 600" class="btn button btn_sua_xoa btn-default check_out" name="payUrl">Trang chủ</button>

        </a>
        {{-- <form action="{{url('/momopay')}}" method="POST">
            @csrf
            <input type="hidden"name="momovnpay"value="{{$tongtien}}">
            <button type="submit" style="color:#fff; font-weight: 600" class="btn button btn_sua_xoa btn-default check_out" name="payUrl">Thanh toán bằng ví MOMO </button>
        </form> --}}
    </div>

</div>
</body>
    <script>
    var today = new Date();
