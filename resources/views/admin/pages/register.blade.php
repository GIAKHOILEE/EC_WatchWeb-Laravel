<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>



    <link rel="stylesheet" href='/admin/css/style_register.css'>

</head>
<body class="">

    <div class="form-register js-form-register">
        <form class="register__container" id="form_register" action="{{URL::to('/admin/register/store')}}" method="post">
            <div class="register-close">
                <i class="fas fa-times"></i>
            </div>
            <header class="register-header">
                Đăng ký
            </header>
            @csrf
            <div class="register-body">
                <div class="form-group" style="margin-bottom: 20px;">
                    @if(session('messageEmail'))
                    <span class="form-message" >{{session('messageEmail')}}</span>
                    @endif
                    @if(session('messagePassword'))
                    <span class="form-message" >{{session('messagePassword')}}</span>
                    @endif
                    <label for="name"class="register-label">
                        Username
                    </label>
                    <input type="text" id="name" name="username"  class="register-input" required placeholder="Username">
                    <span class="form-message"></span>
                </div>

                <div class="form-group " style="margin-bottom: 20px;">
                    <label for="email" class="register-label">
                        Email
                    </label>
                    <input type="text" id="email" name="email"  class="register-input" required placeholder="Email">
                    <span class="form-message"></span>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="password" class="register-label">
                        Mật khẩu
                    </label>
                    <input type="password" name="password"  id="password"  class="register-input" required placeholder="Password">
                    <span class="form-message"></span>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="repassword" class="register-label">
                        Nhập lại mật khẩu
                    </label>
                    <input type="password"  name="repassword"  id="repassword"  class="register-input" required  placeholder="Retype Password">
                    <span class="form-message"></span>
                </div>

                <span class="form-message">@include('admin.alert')</span>

                <p>
                </p>
                <button id="register-btn" name="submit">
                    Đăng ký
                </button>
            </div>

            <footer class="register-footer">
                <div style="margin-right: 65%">
                    <a href="{{URL::to('/')}}">back</a>
                </div>
                <p class="text-wning">Need <a href="">help?</a></p>

            </footer>

        </form>
    </div>

@include('admin.foot')

</body>
</html>
