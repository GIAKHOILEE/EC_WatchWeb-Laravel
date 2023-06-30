<div class="top_header">
    <header id="top">
          <div class="top-header" id="tofixed">
              <div class="header-logo container">
                  <div class="logo">
                      <a href="#"><img src="/admin/img/DKV__7_-removebg-preview.png" alt="logo"></a>
                  </div>
                  <nav class="menu navbar-expand-lg navbar">
                      <ul>
                          <li class="dropdown nav-item"><a href="{{URL::to('/admin/pages/home')}}"><span class="main-word">Home </span><span class="above">Home </span></a>
                          </li>
                          <li class="dropdown nav-item"><a href="{{URL::to('/admin/pages/sanpham')}}"><span class="main-word">Pages </span><span class="above">Pages </span></a>
                          </li>
                          {{-- <li class="dropdown nav-item"><a href="#"><span class="main-word">Services </span><span class="above">Services </span></a>
                          </li>
                          <li class="dropdown nav-item"><a href="#"><span class="main-word">Post Layout </span><span class="above">Post Layout </span></a>
                          </li>
                          <li class="dropdown nav-item"><a href="#"><span class="main-word">Blog </span><span class="above">Blog </span></a>
                          </li> --}}
                          
                          <li class="button dropdown nav-item"><a href="#"><i class="fa-solid fa-circle-user"></i></a>
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