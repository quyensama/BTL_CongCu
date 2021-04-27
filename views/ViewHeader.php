<header id="header">
    <!-- top header  -->
    <div class="container top-header">
      <div class="row">
        <div class="col-6 logo">
          <a href="index.html"> <img src="./assets/frontend/images/Logo-01.jpg" alt="" srcset=""></a>
        </div>
        <!-- <div class="col-6 contact"><span> <i
                            class="fa fa-phone"></i></span><span>1900-6656</span></div> -->
        <div class="col-6 ty-wysiwyg-content contact" data-ca-live-editor-object-id="0"
          data-ca-live-editor-object-type="">
          <p style="margin: 0;padding: 0;margin-top: 4px;" class="text-right"><span
              style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: nowrap; color: rgb(204, 0, 0); font-family: Arial, Helvetica, sans-serif, sans-serif; font-size: 17px; font-weight: 700; margin: 0;"><i
                class="fas fa-phone-alt"></i> 1900-6656</span></p>
          <p style="margin: 0;padding: 0;" class="text-right">Thứ 2 - Thứ 6: 8h - 17h</p>
        </div>
      </div>
    </div>
    <!-- /top header  -->
    <!-- bottom header  -->
    <div class="container bottom-header">
      <div class="row">
        <div class="col-8 form-search">
          <!--<form method="post" id="frm" action="">-->
          <div style="margin-top:25px;">
            <input type="text" onkeypress="searchForm(event);" value="" placeholder="Tìm kiếm sản phẩm" id="key"
              class="input-control">
            <button style="margin-top:5px;" type="submit"> <i class="fa fa-search" onclick="return search();"></i>
            </button>
            <div class="smart-search">
          <ul>
            <li><img src="http://localhost/BTL_CongCu/assets/upload/products/1619359717_2gether-tap-2.jpg" alt=""><a href="#"><?php echo $product["name"]; ?></a></li>
            <li><img src="http://localhost/BTL_CongCu/assets/upload/products/1619359717_2gether-tap-2.jpg" alt=""><a href="#"><?php echo $product["name"]; ?></a></li>
            <li><img src="http://localhost/BTL_CongCu/assets/upload/products/1619359717_2gether-tap-2.jpg" alt=""><a href="#"><?php echo $product["name"]; ?></a></li>
          </ul>
        </div>
        <style>
        .smart-search{
          position: absolute;
          width: 100%;
          background: #fff;
          z-index: 1;
          display: none;
          height: 350px;
          overflow: scroll;
        }
        .smart-search ul{
          padding: 0px;
          margin: 0px;
          list-style: none;
        }
        .smart-search ul li{
          border-bottom: 1px solid #ddd;
        }
        .smart-search img{
          width: 70px;
          margin-right: 5px;
        }
      </style>
      <script>
        $(document).ready(function(){
          $(".search").keyup(function(){
            var strKey = $(key).val();
            // hàm trim() cắt khoảng trắng trái phải của chuỗi
            if(strKey.trim() == "")
              $(".smart-search").attr("style", "display:none;");
            else{
              $(".smart-search").attr("style", "display:block;");
              // ------sử dụng ajax để lấy dữ liệu
              $.get( "index.php?controller=search&action=ajaxSearch&key="+strKey, function( data ) {
                // clear data của thẻ ul
                $(".smart-search ul").empty();
                // thêm dữ liệu vừa lấy được bằng ajax vào thẻ ul
                $(".smart-search ul").append(data);
              });
              // ------
            }
          });
        });
      </script>
          </div>
          <!--</form>-->
        </div>
        <div class="col-4 cart-account">

          <div class="account dropdown span">
            <button type="button" class="btn dropdown-toggle" onclick="showAccount()" style="color: #666;">
              <i class="fas fa-user fa-2x"></i>
            </button>
            <div class="dropdown-menu" id="account">
            <?php if(isset($_SESSION["customer_email"])): ?>
              <a class="dropdown-item" href="index.php?controller=account&action=orders">Xin chào <?php echo $_SESSION["customer_email"]; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout">Đăng xuất</a>
              <?php else: ?>
              <a class="dropdown-item" href="index.php?controller=account&action=login">Đăng nhập</a>
              <a class="dropdown-item" href="index.php?controller=account&action=register">Đăng ký</a> 
              <?php endif; ?>
            </div>
          </div>
          <!-- <div class="wrapper-mini-cart span" > <span class="icon"><i class="fas fa-shopping-cart fa-2x" onclick="showCart()" style="color: #666;"></i></span>
                    </div> -->
          <div class="cart dropdown span">
            <button type="button" class="btn dropdown-toggle" onclick="showCart()" style="color: #666;">
              <i class="fas fa-shopping-cart fa-2x"></i>
            </button>
            <div class="dropdown-menu" id="cart">
              <ul class="list-unstyled">
              <?php if(isset($_SESSION["cart"])): ?>
                <?php foreach($_SESSION["cart"] as $product): ?>
                <li class="clearfix" id="item-1853038">
                  <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"> <img style="width:50px; height:auto;" alt="<?php echo $product["name"]; ?>" src="./assets/upload/products/<?php echo $product["photo"]; ?>" title="<?php echo $product["name"]; ?>" class="img-responsive"> </a> </div>
                  <div class="info">
                    <h6 class="name text-truncate" style="font-size:smaller;"><?php echo $product["name"]; ?></h6>
                    <p><?php echo $product["number"]; ?> x <?php echo number_format($product["price"]); ?>₫</p>
                  </div>
                  <div> <a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>"> <i class="fa fa-times btn bg-secondary"></i></a> </div>
                </li>
                <?php endforeach; ?>
              <?php endif; ?>
              </ul>
              <a href="index.php?controller=cart" class="button btn bg-warning" style="display: block;">Thanh toán</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /bottom header  -->
    <!-- menu -->
    <div class="container">
      <div class="clearfix">
      <?php 
          //load MVC bang tay
          include "controllers/ControllerCategories.php";
          $obj = new ControllerCategories();
          $obj->index();
       ?>
        <!-- <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
        <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
          <li class="active"><a href="index.php">Trang chủ</a></li>
          <li><a href="#">Giới thiệu</a></li>
          <li><a href="index.php?controller=tintuc">Tin tức</a></li>
          <li><a href="index.php?controller=lienhe">Liên hệ</a></li>
        </ul>  -->
      </div>
    </div>
    <!-- /menu -->
  </header>