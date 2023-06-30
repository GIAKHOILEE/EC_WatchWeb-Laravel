<script>
    const LoginBtn = document.querySelector('.btn-dangnhap');
    const RegisterBtn = document.querySelector('.btn-dangky');
    const CloseLogin = document.querySelector('.login-close');
    const CloseRegister = document.querySelector('.register-close');
    const FormLogin = document.querySelector(".js-form-login");
    const FormRegister = document.querySelector(".js-form-register");
    const LoginContainer = document.querySelector('.login__container');
    const RegisterContainer = document.querySelector('.register__container');
    const CartBtn = document.querySelector('#btn-cart');
    const FormCartContainer = document.querySelector('.form-card');
    const FormCart = document.querySelector('.form-cart-js');
    const CloseBtnCart = document.querySelector('.close-cart');
   

    // Giỏ hàng

    CartBtn.addEventListener('click', showCart)
    function showCart(){
      FormCartContainer.classList.add('open')
    }
    FormCartContainer.addEventListener('click', hideCart)
    function hideCart(){
      FormCartContainer.classList.remove('open')
    }
    FormCart.addEventListener('click', function(even){
      even.stopPropagation();
    })
    
    CloseBtnCart.addEventListener('click', CloseForm)
    
    function CloseForm(){
      FormCartContainer.classList.remove('open')
    }

    // Đăng ký
    LoginBtn.addEventListener('click',showFormLogin)
    CloseLogin.addEventListener('click',hideFormLogin);
    function showFormLogin(){
        FormLogin.classList.add('open');
    }
    function hideFormLogin(){
        FormLogin.classList.remove('open');
    }

    LoginContainer.addEventListener('click', function(event){
        event.stopPropagation()
    })

    // Đăng nhập
    RegisterBtn.addEventListener('click',showFormRegister)
    CloseRegister.addEventListener('click',hideFormRegister)
    function showFormRegister(){
        FormRegister.classList.add('open');
    }
    function hideFormRegister(){
        FormRegister.classList.remove('open');
    }
    RegisterContainer.addEventListener('click', function(e){
        e.stopPropagation()
    })

    
    
    
    FormLogin.addEventListener('click', hideFormLogin) //Click Khoảng không
    FormRegister.addEventListener('click', hideFormRegister) //Click Khoảng không


</script>


    <!-- Chi tiết sản phẩm -->
<script>


    const modalChitietsanpham = document.querySelector('.modal_chitietsanpham')
    const cardSanpham = document.querySelectorAll('.card-sanpham')
    const chitietsanpham = document.querySelector('.chitietsanpham')

      for(const cardSanphams of cardSanpham){
        cardSanphams.addEventListener('click', showChitietsanpham);
      }

    function showChitietsanpham(){
    modalChitietsanpham.classList.add('open')
    }
    function hideChitietsanpham(){
      modalChitietsanpham.classList.remove('open')
    }
    
    modalChitietsanpham.addEventListener('click',hideChitietsanpham)
    chitietsanpham.addEventListener('click',function stop(){
      event.stopPropagation()
    }) -->
</script>


    <script>
      SanphamBtn = document.querySelector('.btn-sanpham-js')
      FormSanpham = document.querySelector('.page_sanpham')
      FormMid = document.querySelector('.mid')
      TrangchuBtn = document.querySelector('.btn-trangchu')

        // function Block(e) {
        //         e.style.display = 'block';
        // }
        // function None(e) {
        //     e.style.display = 'none';
        // }
        
        // SanphamBtn.onclick = function(){
        //   None(FormMid)
        //   Block(FormSanpham)
        // }

      SanphamBtn.addEventListener('click', function(){
          FormSanpham.style.display = 'block';
          FormMid.style.display = 'none';
      })
      TrangchuBtn.addEventListener('click', function(){
          FormMid.style.display = 'block';
          FormSanpham.style.display = 'none';
      })

    </script>
<script>
Validator({
    form: '#form_register',
    errorSelector: '.form-message',
    rules: [
        Validator.isRequied("#name", 'Vui lòng nhập tên đẩy đủ của bạn'),
        Validator.isRequied("#email"),
        Validator.isEmail("#email"),
        Validator.minLenght("#password",6),
        Validator.isRequied("#repassword"),
        Validator.isConfirmed("#repassword", function(){
            return document.querySelector('#form_register #password').value;
        }, 'Mật khẩu nhập lại không chính xác'),

    ],

    onsubmit: function(data){

    }

});
</script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

