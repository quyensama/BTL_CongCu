<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="special-collection">
  <div class="tabs-container">
    <div class="row" style="margin-top:10px;">
      <div class="head-tabs head-tab1 col-lg-8">
        <h2>Tìm kiếm - Giá từ <?php echo number_format($fromPrice); ?> đ đến <?php echo number_format($toPrice); ?> đ</h2>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="tabs-content row">
    <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
      <div class="clearfix">
        <?php foreach ($data as $rows) : ?>
          <!-- box product -->
          <div class="col-xs-6 col-md-3 col-sm-6 ">
            <div class="product-grid" id="product-1168979" style="height: 400px; overflow: hidden;">
              <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="./assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
              </div>
              <div class="info">
                <h5 class="name text-truncate"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h5>
                <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                <p class="price-box"> <span class="special-price" style="font-weight:bold; color:red;"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount / 100)); ?> </span>₫ </span> </p>
                <div class="action-btn">
                  <form>
                    <div class="text-center">
                      <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="btn btn-outline-dark bg-light ">Thêm vào giỏ hàng</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- end box product -->
        <?php endforeach; ?>
        <!-- paging -->
        <div style="clear: both;"></div>
        <div style="margin-top: -50px;" class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
          <ul class="pagination">
            <li class="page-item"><span>Trang</span></li>
            <?php for ($i = 1; $i <= $numPage; $i++) : ?>
              <li class="page-item"><a class="page-link" href="index.php?controller=search&fromPrice=<?php echo $fromPrice ?>&toPrice=<?php echo $toPrice ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
          </ul>
        </div>
        <!-- end paging -->
      </div>
    </div>
  </div>
</div>