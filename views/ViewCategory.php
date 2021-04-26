<?php 
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="special-collection">
  <div class="tabs-container">
    <div class="row" style="margin-top:10px;">
      <div class="head-tabs head-tab1 col-lg-9">
        <h2><?php echo $this->modelGetCategoryName(); ?></h2>
      </div>
      <div class="col-lg-3 pull-right text-right">
        <select class="form-control" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;">
          <option value="0">Sắp xếp</option>
          <option value="priceAsc">Giá tăng dần</option>
          <option value="priceDesc">Giá giảm dần</option>
          <option value="nameAsc">Sắp xếp A-Z</option>
          <option value="nameDesc">Sắp xếp Z-A</option>
        </select>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="tabs-content row">
    <!-- <div id="content-tabb1" class="content-tab content-tab-proindex">
                <div class="clearfix"> -->
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
    <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=products&action=category&page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
    <!-- end paging -->
    <!-- </div>
              </div> -->
    <!-- </div> -->
  </div>
  <!-- end main -->
</div>