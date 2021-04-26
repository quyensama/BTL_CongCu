<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="row" style="margin-top:1rem;">
  <div class="col-md-8">
    <div class="wrapper-form bg-light">
      <?php if (isset($_GET["notify"]) && $_GET["notify"] == "error") : ?>
        <p style="color:red; text-align:center;">Đăng ký chưa thành công, bạn hãy kiểm tra lại thông tin! - email đã tồn tại!</p>
      <?php else : ?>
        <p style="padding: 0 2rem; text-align:center;"> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
      <?php endif; ?>
      <form method='post' action="index.php?controller=account&action=registerPost">
        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8NCDIeDSHgNIh7wY7X1HBtTBzdju-hUg15GcW6GapXzfmQE3y2P-Pa1gLzKPnkBBOeGOPfIY8YizaUAza1qjuq-S7qBC9cNJ5wBCsY1hvEGhDYHpl9GdoxvRVGcVgf20tVL6_NtcL9vQLmmDhdq91T0" />
        <h5 class="title text-center"><span>Đăng ký tài khoản mới</span></h5>
        <div class="form-group">
          <label>Họ và tên:</label><br>
          <input type="text" name="name" class="input-control">
        </div>
        <div class="form-group">
          <label>Email:<b id="req">*</b></label><br>
          <input type="text" name="email" class="input-control" required>
        </div>
        <div class="form-group">
          <label>Địa chỉ:</label><br>
          <input type="text" name="address" class="input-control">
        </div>
        <div class="form-group">
          <label>Điện thoại:</label><br>
          <input type="text" name="phone" class="input-control">
        </div>
        <div class="form-group">
          <label>Mật khẩu:<b id="req">*</b></label><br>
          <input type="password" name="password" class="input-control" required="">
        </div>
        <div class="form-group">
          <div class="text-center">
            <input type="submit" class="button btn bg-primary text-white" value="Đăng ký">
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-4">
    <div class="wrapper-form border border-white bg-light" style="padding: 1rem;">
      <h5 class="title text-center"><span>Đăng nhập</span></h5>
      <p>Đã có tài khoản. Đăng nhập ngay để có thể mua hàng một cách thuận tiện nhất.</p>
      <div class="text-center">
        <a href="index.php?controller=account&action=login" class="button btn bg-primary text-white">Đăng nhập</a>
      </div>

    </div>
  </div>
</div>