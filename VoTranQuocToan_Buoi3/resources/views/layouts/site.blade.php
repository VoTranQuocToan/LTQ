<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/1.css')}}">
    @yield("header")
</head>
<body>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <header>
        <div class="header">
            <div class="logo">
              <img src="https://bizweb.dktcdn.net/100/508/659/themes/939030/assets/logo.png?1710404714890" alt="logo">
            </div>
            <nav class="navbar navbar-expand-lg ">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Thương hiệu nổi bật
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Orient</a></li>
                        <li><a class="dropdown-item" href="#">Rolex</a></li>
                        <li><a class="dropdown-item" href="#">Casio</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <a class="navbar-brand" href="#">Tin tức</a>
                <a class="navbar-brand" href="#">Hệ thống cửa hàng</a>
                <a class="navbar-brand" href="#">Liên hệ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sản Phẩm
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Đồng hồ nam</a></li>
                        <li><a class="dropdown-item" href="#">Đồng hồ nữ</a></li>
                        <li><a class="dropdown-item" href="#">Đồng hồ đôi</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <div class="icons">
              <a href="#"><img src="img/download.png" alt="Search"></a>
              <a href="#"><img src="img/account.png" alt="Account"></a>
              <a href="#"><img src="img/cart.png" alt="Cart"></a>
            </div>
          </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
      <div class="footer-section">
          <h3>Về Chúng Tôi</h3>
          <ul>
              <li><a href="#">Giới Thiệu</a></li>
              <li><a href="#">Sứ Mệnh</a></li>
              <li><a href="#">Đội Ngũ</a></li>
          </ul>
      </div>
      <div class="footer-section">
          <h3>Chính Sách</h3>
          <ul>
              <li><a href="#">Bảo Mật</a></li>
              <li><a href="#">Vận Chuyển</a></li>
              <li><a href="#">Hoàn Trả</a></li>
          </ul>
      </div>
      <div class="footer-section">
          <h3>Dịch Vụ</h3>
          <ul>
              <li><a href="#">Dịch vụ bảo trì</a></li>
              <li><a href="#">Dịch vụ vận chuyển</a></li>
              <li><a href="#">Dịch vụ bán hàng</a></li>
              <li><a href="#">Tư Vấn Kinh Doanh</a></li>
          </ul>
      </div>
      <div class="footer-section">
          <h3>Liên Hệ</h3>
          <p>Địa chỉ: 123 Đường ABC, Thành phố XYZ, Quốc gia ABC</p>
          <p>Email: info@yourwebsite.com</p>
          <p>Điện thoại: +123456789</p>
      </div>
  </footer>
    @yield('footer')
</body>
</html>
