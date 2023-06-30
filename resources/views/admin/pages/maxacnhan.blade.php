
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/admin/css/style.css">
</head>
<body>
<div style="display: flex;" class="form-login js-form-login" >
<form class="login__container maemail" method="POST" action="{{URL::to('/admin/maxacnhan/store')}}">
          <div class="login-close thongtincanhan-btn-close">
              <i class="fas fa-times"></i>
          </div>
          <header class="login-header">
             Mã Xác Nhận
          </header>
          @csrf
          <div class="login-body">
              <label for="name"class="login-label">
                  Mã xác nhận gồm 6 chử số:
              </label>
                            <div class="alert" role="alert">
                </div>
              <input type="text" id="maxacnhan" class="login-input" required  name="maxacnhan" placeholder="Nhập ở đây">
              @if(session('message'))
              <span class="form-message" style="color: red">{{session('message')}}</span>
              @endif
             <h4 style="font-weight: 400;color: green;margin-bottom: 5px;"></h4>

              <button id="login-btn" type="submit"  name="btn-maemail">
                Xác nhận
              </button>
          </div>
    </div>


        </form>
</body>
</html>
