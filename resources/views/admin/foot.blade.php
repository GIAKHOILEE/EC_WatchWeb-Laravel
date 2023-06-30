<script src='/admin/js/validator.js'></script>
{{-- validator Login  --}}
<script>
    Validator({
        form: '#form_login',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequied("#email", 'Vui lòng nhập email'),
            Validator.isEmail("#email"),

            Validator.isRequied("#password", 'Vui lòng nhập mat khau'),
        ],
  
        onsubmit: function(data){
  
        }
    });
</script>



{{-- validate form Register  --}}
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




{{-- validate form ADD/UPDATE product  --}}
<script>
  Validator({
      form: '#form-update',
      errorSelector: '.form-message',
      rules: [
          Validator.isRequied("#namesp", 'Vui lòng nhập tên sản phẩm'),
          Validator.isRequied("#giasp", 'Vui lòng nhập giá sản phẩm'),
          Validator.isRequied("#giagoc", 'Vui lòng nhập giá sản phẩm'),
          Validator.isRequied("#soluong", 'Vui lòng nhập số lượng sản phẩm'),
          Validator.isRequied("#chitietsp", 'Vui lòng nhập thông tin sản phẩm'),
      ],

      onsubmit: function(data){

      }
  });
</script>


{{--Openform add produce  --}}
<script>
    const AddBtn = document.querySelector('.btn-addsp');
    const FormAddsp = document.querySelector('.addsp');
    const FromAddspContainer =document.querySelector('.form-addsp');
    const CloseBtnAddsp = document.querySelector('.addsp-btn-close');
   

    //Start Form add sp
    AddBtn.addEventListener('click',showthongtincanhan)
    function showthongtincanhan(){
      FromAddspContainer.classList.add('open');
    }

    CloseBtnAddsp.addEventListener('click',hidenthongtincanhan)
    function hidenthongtincanhan(){
      FromAddspContainer.classList.remove('open');
    }

    FromAddspContainer.addEventListener('click',hidenthongtincanhan)
    
    FormAddsp.addEventListener('click',function(e){
      e.stopPropagation()
    })
    // End add sp
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>