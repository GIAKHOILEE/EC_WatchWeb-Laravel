@foreach($news as $updateProducts)

    @include('admin.head')


<div class="form-addsp form-update" style="display: block" id="form-addsp form-update">
    <form class="login__container addsp"  action="" method="POST" enctype="multipart/form-data" >
        @method('PATCH')
      <div class="login-close addsp-btn-close update-btn-close">
          <i class="fas fa-times"></i>
      </div>
      <header class="login-header">
          Sửa sản phẩm
      </header>

      <div class="login-body">
          <label style="margin-bottom: 2px" for="namesp"class="login-label">
              Tên sản phẩm
          </label>
          <input style="margin-bottom: 8px;" type="text" value="{{$updateProducts->namesp}}" id="namesp" class="login-input" required  name="namesp" placeholder="Nhập tên sản phẩm">
          <span class="form-message"></span>


          <label style="margin-bottom: 2px" for="giasp" class="login-label">
            Giá
          </label>
          <input style="margin-bottom: 8px;" type="text" value="{{$updateProducts->giasp}}" id="giasp" class="login-input" required name="giasp" placeholder="Nhập giá">
          <span class="form-message"></span>


          <label style="margin-bottom: 2px" for="giagoc" class="login-label">
            Giá gốc
          </label>
          <input style="margin-bottom: 8px;" type="text" value="{{$updateProducts->giagoc}}" id="giagoc" class="login-input" required name="giagoc" placeholder="Nhập giá gốc">
          <span class="form-message"></span>


          <label style="margin-bottom: 2px" for="soluong" class="login-label">
            Số lượng
          </label>
          <input style="margin-bottom: 8px;" type="text" id="Soluong" value="{{$updateProducts->soluong}}" class="login-input" required name="soluong" placeholder="Nhập số lượng">
          <span class="form-message"></span>


          <label style="margin-bottom: 2px" for="chitietsp" class="login-label">
            Mô tả
          </label>
          <input style="margin-bottom: 8px;" type="text" id="chitietsp" value="{{$updateProducts->chitietsp}}" class="login-input" required name="chitietsp" placeholder="Nhập chi tiết sản phẩm">
          <span class="form-message"></span>


          <label style="margin-bottom: 2px" for="imgsp" class="login-label">
            Hình ảnh
          </label>
          <input style="margin-bottom: 8px;" type="file" id="file" class="login-input" required name="imgsp" >
          @endforeach
          <button type="submit" id="login-btn" class="themsanpham" name="themsanpham">
            Xác nhận
          </button>
      </div>
      @csrf
    </form>
</div>
