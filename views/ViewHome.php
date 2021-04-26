<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangChu.php";
?>
          <div class="special-collection">
            <div class="tabs-container">
              <div class="row" style="margin-top:10px;">
                <div class="col-lg-12">
                  <h4 style="background-color: #F15A29; text-align: center; color: #fff; padding: 0.5rem;">HOT PRODUCT</h4>
                </div>
                <div class="clearfix">
                </div>
              </div>
            </div>
            <div class="tabs-content row">
              <!-- <div id="content-tabb1" class="content-tab content-tab-proindex">
                <div class="clearfix"> -->
                <?php 
              		$hotProduct = $this->modelHotProduct();
              	 ?>
                 <style type="text/css">
                   .discount{position: absolute; width: 50px; line-height: 50px; text-align: center; border-radius: 50px; background: black; color:white; font-weight: bold; top: 0px; left: 25px;}
                 </style>
                <?php foreach($hotProduct as $rows): ?>
                  <!-- box product -->
                  <div class="col-xs-6 col-md-2 col-sm-6 " style="position: relative;">
                  <div class="discount"><?php echo $rows->discount; ?> %</div>
                    <div class="product-grid" id="product-1168979" style="height: 400px; overflow: hidden;">
                    <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="./assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a> </div>
                      <div class="info">
                      <h5 class="name text-truncate" style=""><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h5>
                        <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price" style="color: red; font-weight: bold;"> <span class="price product-price" > <?php echo number_format($rows->price - ($rows->price*$rows->discount/100)); ?> </span>₫ </span> </p>
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
                <!-- </div>
              </div> -->
            </div>
          </div>

<div class="row">
  <div class="col-xs-12 col-md-6"> <img src="./assets/frontend/images/banner/Banner-1-Papillon-Người-Tù-Khổ-Sai-min.png" class="img-thumbnail"> </div>
  <div class="col-xs-12 col-md-6"> <img src="./assets/frontend/images/banner/SachPNB_590X200.jpg" class="img-thumbnail">
  </div>
</div>
<?php 
        	$categories = $this->modelCategories();
         ?>
         <?php foreach($categories as $rowsCategory): ?>
<!-- category product -->
<div class="special-collection">
  <div class="tabs-container">
    <div class="row" style="margin-top:10px;">
      <div class="head-tabs head-tab1 col-lg-12">
        <h4 style="background-color: #F15A29; text-align: center; color: #fff; padding: 0.5rem;"><?php echo $rowsCategory->name; ?></h4>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="tabs-content row">
    <!-- <div id="content-taba4" class="content-tab content-tab-proindex"> -->
    <?php 
              		$products = $this->modelProducts($rowsCategory->id);
              	 ?>
              	 <?php foreach($products as $rows): ?>
    <!-- box product -->
    <div class="col-xs-6 col-md-2 col-sm-6 ">
      <div class="product-grid" id="product-1168979" style="height: 400px; overflow: hidden;">
        <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="./assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a> </div>
        <div class="info">
          <h5 class="name text-truncate"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h5>
          <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price" style="color: red; font-weight: bold;"> <span class="price product-price" > <?php echo number_format($rows->price - ($rows->price*$rows->discount/100)); ?> </span>₫ </span> </p>
          <div class="action-btn">
            <form>
              <div class="text-center">
                <a href="" class="btn btn-outline-dark bg-light ">Thêm vào giỏ hàng</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end box product -->
    <?php endforeach; ?> 

    <!-- </div> -->
  </div>
</div>
<!-- /category product -->
<?php endforeach; ?>