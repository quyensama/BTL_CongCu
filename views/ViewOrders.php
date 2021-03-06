<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangTrong.php";
?>

<div class="template-cart">
    <h3>Danh sách đơn hàng</h3>
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">List Orders</div>
            <div class="panel-body">
                <table class="table table-bordered table-hover table-striped">
                    <tr class="table-primary">
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Price</th>
                        <th style="width:150px; text-align: center;">Status</th>
                        <th style="width:150px;">Delivery</th>
                    </tr>
                    <?php foreach ($listRecord as $rows) : ?>
                        <?php
                        //lay ban ghi customer
                        $customer = $this->modelGetCustomers($rows->customer_id);
                        ?>
                        <tr>
                            <td><?php echo $customer->name; ?></td>
                            <td><?php echo $customer->phone; ?></td>
                            <td>
                                <?php
                                $date = Date_create($rows->date);
                                echo Date_format($date, "d/m/Y");
                                ?>
                            </td>
                            <td><?php echo number_format($rows->price); ?></td>
                            <td style="text-align: center;">
                                <?php if ($rows->status == 1) : ?>
                                    <span class="label label-primary">Đã giao hàng</span>
                                <?php endif; ?>
                                <?php if ($rows->status == 2) : ?>
                                    <span class="label label-danger">Chưa giao hàng</span>
                                <?php endif; ?>
                                <?php if ($rows->status == 3) : ?>
                                    <span class="label label-warning">Đã hủy</span>
                                <?php endif; ?>
                            </td>
                            <td style="text-align: center;">
                                <?php if ($rows->status == 0) : ?>
                                    <a href="index.php?controller=account&action=removeOrders&id=<?php echo $rows->id; ?>" class="label label-success">Hủy đơn hàng</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

                <style type="text/css">
                    .pagination {
                        padding: 0px;
                        margin: 0px;
                    }
                </style>
                <ul class="pagination">
                    <li class="page-item">
                        <?php for ($i = 1; $i <= $numPage; $i++) : ?>
                            <a href="index.php?controller=users&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                        <?php endfor; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>