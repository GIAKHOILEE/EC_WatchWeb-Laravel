
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/user/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<div style="display:block;" class="modal_chitietsanpham">
    @foreach($product as $product)
        <div class="chitietsanpham">
                  <div class="chitietsanpham-img">
              <img src="{{asset('/imgproduct/'.$product->imgsp)}}" alt="">
          </div>
          <div class="chitietsanpham-content">

              <div class="tensanpham">
                  <h3>{{$product->namesp}}</h3>
              </div>
              <div class="danhgia">
                  <div class="star">
                      <p style="color: red;">5.0
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                      </p>
                  </div>
                  <div class="danhgiasanpham">
                      <h4> 12 </h4> đánh giá
                  </div>
                  <div class="daban">
                      <h4> 10 </h4> đã bán
                  </div>
              </div>
              <div class="giatien">
                  <del style="color: rgb(158, 156, 156);">{{$product->giagoc}}$</del>
                  <h2 style="color: #f55f8d; margin: 0px 15px;">{{$product->giasp}}$</h2>
                  <h6 style="color: #fff;"><span class="badge bg-danger">Giảm 25%</span></h6>
              </div>
              <div class="chitiet">
                  <p>Chi tiết:{{$product->chitietsp}}</p>
              </div>
              <div class="magiamgia">
                  <div class="row">
                      <div class="col-lg-3">
                          <h5>Mã Giảm Giá :</h5>
                      </div>
                      <div class="col-lg-9">
                          <span class="badge">  Giảm 25%</span>
                      </div>
                  </div>
              </div>
              <div class="vanchuyen">
                  <div class="row">
                      <div class="col-lg-3">
                          <h5 style="padding-top: 20px;">Vận Chuyển :</h5>
                      </div>
                      <div class="col-lg-9">
                          <div class="menu">
                              <ul>
                                  <li>Vận Chuyển Tới <i class="arrow down"></i>
                                    <div class="drop-menu">
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="">
                                      <label for="vehicle1"> Hà Nội</label><br>
                                      <input type="checkbox" id="vehicle2" name="vehicle2" value="">
                                      <label for="vehicle2"> Đà Nẵng</label><br>
                                      <input type="checkbox" id="vehicle2" name="vehicle2" value="">
                                      <label for="vehicle2"> TP.Hồ Chí Minh</label><br>
                                      <input type="checkbox" id="vehicle2" name="vehicle2" value="">
                                      <label for="vehicle2"> ĐakLak</label><br>
                                    </div>
                                  </li>
                                  <li>Phí Vận Chuyển <i class="arrow down"></i>
                                    <div class="drop-menu">
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="">
                                      <label for="vehicle1"> Chuyển phát nhanh</label><br>
                                    </div>
                                  </li>
                              </ul>
                              <div class="clear" style="clear: both;"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="mausac">
                  <div class="row">
                      <div class="col-lg-3">
                          <h5>Màu :</h5>
                      </div>
                      <div class="col-lg-9">
                          <button type="button" class="btn btn-outline-secondary">Màu vàng</button>
                          <button type="button" class="btn btn-outline-secondary">Màu đỏ</button>
                          <button type="button" class="btn btn-outline-secondary">Màu bạc</button>
                          <button type="button" class="btn btn-outline-secondary">Màu đen</button>

                      </div>
                  </div>
              </div>
              <div class="soluong">
                  <div class="row">
                      <div class="col-lg-3">
                          <h5>Số Lượng :</h5>
                      </div>
                      <div style="display: flex;" class="col-lg-9">
                          <div class="quantity buttons_added">
                              <input type="button" value="-" class="minus" /><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" />
                              <input type="button" value="+" class="plus" />
                          </div>

                          <div class="spconlai">
                              <p>{{$product->soluong}} Sản Phẩm có sẵn</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="dathang">
                  <div class="themvaocart">
                      <button type="button" class="btn btn-outline-primary">
                          <i class="fa-solid fa-cart-plus"></i>
                          Thêm Vào Giỏ Hàng
                      </button>
                  </div>
                  <div class="muangay">
                      <button type="button" class="btn">Mua Ngay</button>
                  </div>
              </div>

              <hr>
              <div class="uudaikhac">
                  <div class="uudai trahang">
                      <i class="fa-solid fa-rotate-left"></i>
                      7 ngày miễn phí trả hàng
                  </div>
                  <div class="uudai hangchatluong">
                      <i class="fa-solid fa-circle-check"></i>
                      hàng chất lượng 100%
                  </div>
                  <div class="uudai mienphivanchuyen">
                      <i class="fa-solid fa-truck-fast"></i>
                      miễn phí vận chuyển
                  </div>
              </div>
          </div>
          <a href="/user/pages/sanpham">Back</a>
        </div>
        @endforeach

      </div>
</body>
</html>
