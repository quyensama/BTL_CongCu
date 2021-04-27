<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="template-customer">
  <div class="row" style="margin-top:1rem;">
    <div class="col-md-6">
      <div class="wrapper-form bg-light">
        <form method='post' action="index.php?controller=account&action=loginPost">
          <p style="padding: 0 2rem; text-align:center;">Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
          <h5 class="title text-center"><span>Đăng nhập tài khoản</span></h5>
          <div class="form-group">
            <label>Email:<b id="req">*</b></label><br>
            <input type="email" class="input-control" name="email" required="">
          </div>
          <div class="form-group">
            <label>Mật khẩu:<b id="req">*</b></label><br>
            <input type="password" class="input-control" name="password" required="">
          </div>
          <div class="text-center">
            <input type="submit" class="button btn bg-primary text-white" value="Đăng nhập">
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-6">
      <div class="wrapper-form border border-white bg-light" style="padding: 1rem;">
        <h5 class="title text-center"><span>Tạo tài khoản mới</span></h5>
        <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
        <div class="text-center">
          <a href="index.php?controller=account&action=register" class="button btn bg-primary text-white">Đăng ký</a>
        </div>
      </div>
    </div>
  </div>
</div>