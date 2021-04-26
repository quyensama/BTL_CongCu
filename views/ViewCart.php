<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <div class="template-cart">
          <form action="index.php?controller=cart&action=update" method="post">
            <div class="table-responsive">
              <table class="table table-cart">
                <thead>
                  <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th class="quantity">Số lượng</th>
                    <th class="price">Thành tiền</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <?php foreach($_SESSION["cart"] as $product): ?>
                <tbody>                  
                  <tr>
                    <td><img src="./assets/upload/products/<?php echo $product["photo"]; ?>" class="img-responsive" /></td>
                    <td><a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a></td>
                    <td> <?php echo number_format($product["price"]-($product["price"]*$product["discount"])/100); ?>₫ </td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống"></td>
                    <td><p><b><?php echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product["number"]); ?>₫</b></p></td>
                    <td><a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                  </tr>
                </tbody>
            	<?php endforeach; ?>
            	<?php if($this->cartNumber() > 0): ?>
                <tfoot>
                  <tr>
                    <td class="text-end" colspan="6"><a href="index.php?controller=cart&action=destroy" class="btn bg-secondary text-light pull-left">XÓA TOÀN BỘ</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="index.php" class="button btn bg-warning pull-right">TIẾP TỤC MUA HÀNG</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="submit" class="button btn bg-primary text-light" value="CẬP NHẬT"></td>
                  </tr>
                </tfoot>
            	<?php endif; ?>
              </table>
            </div>
          </form>
                <?php if($this->cartNumber() > 0): ?>
          <div class="total-cart text-end">
            <h5> Tổng tiền thanh toán: <b> <?php echo number_format($this->cartTotal()); ?>₫ </b> </h5 ><br>
            <a href="index.php?controller=cart&action=checkout" class="btn bg-dark text-light">THANH TOÁN</a> </div>
           <?php endif; ?>
        </div>