<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>



    <link rel="stylesheet" href='/admin/css/style_login.css'>

</head>
<body class="">
  <div class="form-login js-form-login" id="form_login">
    <form class="login__container" action="{{URL::to('/admin/login/store')}}"  method="post" >
        <div class="login-close">
            <i class="fas fa-times"></i>
        </div>
        <header class="login-header">
            Đăng nhập
        </header>

        <div class="login-body">
            
            
            <div class="form-group" style="margin-bottom: 20px;" >
                <label for="name"class="login-label">
                    Email
                </label>
                <input type="text"  id="email" class="login-input" required  name="email" placeholder="email">
                <span class="form-message"></span>
            </div>

            
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="matkhau" class="login-label">
                    Mật khẩu
                </label>
                <input type="password"  id="password" class="login-input" required name="password" placeholder="Uassword">
                <span class="form-message"></span>
            </div>

            <span class="form-message">@include('admin.alert')</span>


            <button id="login-btn"  name="submit_login">
              Đăng nhập
            </button>
        </div>
        
        <footer class="login-footer">
            <p class="text-wning"><a href="">Quên mật khẩu?</a></p>
        </footer>

        @csrf
    </form>
  </div>
@include('admin.foot')

</body>
</html>
