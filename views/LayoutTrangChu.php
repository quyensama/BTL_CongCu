<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Nhasachphuongnam.com là trang thương mại điện tử của Nhà Sách Phương Nam, hệ thống nhà sách thân thuộc của nhiều gia đình Việt. ">
  <meta name="keywords" content="mua sắm trực tuyến, thương mại điện tử, mua sắm online, Nhà Sách Phương Nam, nhà sách phương nam, sách và sản phẩm giáo dục">
  <title>Nhà Sách Phương Nam Trực Tuyến - Uy Tín, Tiện Lợi Và Nhanh Chóng - nhasachphuongnam.com</title>
  <link rel="stylesheet" href="./assets/frontend/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/frontend/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/frontend/css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

</head>

<body>
  <?php
  include "views/ViewHeader.php";
  ?>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- slide -->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./assets/frontend/images/banner/banner_1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./assets/frontend/images/banner/banner_2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./assets/frontend/images/banner/banner_3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- end slide -->
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <!-- main -->

          <?php echo $this->view; ?>
          <!-- end main -->
        </div>
      </div><!-- adv -->
      <div class="widebanner" style="text-align: center;"> <a href="#"><img src="./assets/frontend/images/banner/Banner_KM_bang_dia_1170x110px-01.jpg" alt="#" class="img-responsive"></a> </div>
      <!-- end adv -->
    </div>
  </div>
  <!-- Footer -->
  <footer class="bg-light text-left text-dark" style="margin-top: 1rem;">
    <!-- Grid container -->
    <div class="container p-4 ">
      <!-- Section: Social media -->

      <!-- Section: Social media -->

      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Đăng ký để nhận bản tin</strong>
              </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example2" placeholder="Nhập địa chỉ email" class="form-control" />

              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-dark mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->

      <!-- Section: Text -->

      <!-- Section: Text -->

      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">VỀ CHÚNG TÔI</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Giới Thiệu Về Nhà Sách Phương Nam</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Hệ Thống Nhà Sách Phương Nam</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Điều Khoản Sử Dụng</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Chính Sách Bán Hàng</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">TÀI KHOẢN CỦA BẠN</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Đăng nhập</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Tạo tài khoản</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Danh Sách Yêu Thích</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">HỖ TRỢ KHÁCH HÀNG</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Các Câu Hỏi Thường Gặp</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Chính Sách Đổi/Trả Hàng</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Quy Định Viết Bình Luận</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">LIÊN HỆ VỚI CHÚNG TÔI</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <p class="text-dark">Hotline: 1900 6656</p>
              </li>
              <li>
                <p class="text-dark">Email: hotro@nhasachphuongnam.com</p>
              </li>

              <li>
                <span>
                  <!-- Facebook -->
                  <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                  <!-- Twitter -->
                  <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                  <!-- Google -->
                  <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                  <!-- Instagram -->
                  <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                </span>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright: Bản quyền của Công Ty Cổ Phần Văn Hóa Phương Nam -
      <a class="text-dark" href="https://nhasachphuongnam.com/vi/">nhasachphuongnam.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <script>
    function showCart() {
      var x = document.getElementById("cart");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function showAccount() {
      var x = document.getElementById("account");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>
  <script src="./assets/frontend/js/jquery-3.5.1.js"></script>
  <script src="./assets/frontend/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- <script src="./assets/frontend/js/bootstrap.js.map"></script>
  <script src="./assets/frontend/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/frontend/js/bootstrap.bundle.min.js.map"></script>
  <script src="./assets/frontend/js/bootstrap.esm.min.js"></script>
  <script src="./assets/frontend/js/bootstrap.esm.min.js.map"></script> -->
</body>

</html>