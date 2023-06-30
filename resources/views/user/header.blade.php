<div class="top_header">
    <header id="top">
          <div class="top-header" id="tofixed">
              <div class="header-logo container">
                  <div class="logo">
                      <a href="#"><img src="/user/img/DKV__7_-removebg-preview.png" alt="logo"></a>
                  </div>
                  <nav class="menu navbar-expand-lg navbar">
                      <ul>
                          <li class="dropdown nav-item"><a href="{{URL::to('/user/pages/home')}}"><span class="main-word">Home </span><span class="above">Home </span></a>
                          </li>
                          <li class="dropdown nav-item"><a href="{{URL::to('/user/pages/sanpham')}}"><span class="main-word">Product</span><span class="above">Pages </span></a>
                          </li>
                          <?php $iduser =  Session::get('iduser'); ?>
                          <li class="dropdown nav-item"><a href="/user/pages/history/{{$iduser}}"> <span class="main-word">History</span><span class="above">Pages </span></a>
                          </li>
                          {{-- <li class="dropdown nav-item"><a href="#"><span class="main-word">Services </span><span class="above">Services </span></a>
                          </li>
                          <li class="dropdown nav-item"><a href="#"><span class="main-word">Post Layout </span><span class="above">Post Layout </span></a>
                          </li>
                          <li class="dropdown nav-item"><a href="#"><span class="main-word">Blog </span><span class="above">Blog </span></a>
                          </li>
                          <li class="dropdown nav-item"><a href="#"><span class="main-word">Contact Us </span><span class="above">Contact Us </span></a>
                          </li> --}}
                          <li class="button dropdown nav-item"><a href="#"><i class="fa-solid fa-circle-user"></i>
                         {{--  <p><?php echo $_SESSION["username"]?></p> .............. --}}
                            {{Auth::user()->username}}
                            {{-- {{Auth::user()->id}} --}}
                            <input type="hidden" name="gia" value=" " />

                          </a>

                          <ul class="dropdown-menu">
                              <li><a href="#">Thông tin cá nhân</a></li>
                              <li><a href="{{URL::to('/logout')}}">Đăng xuất</a></li>
                          </ul>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
    </header>
  </div>
