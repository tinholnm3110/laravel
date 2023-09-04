<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Chi tiết đơn hàng</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Chi tiết đơn hàng</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div id="toolbar" class="btn-group">
                <a href="product-add.html" class="btn btn-success">
                    <i class="glyphicon glyphicon-list"></i> Toàn bộ đơn hàng
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" class="table" data-toggle="table">
                        <thead>
                            <tr>
                                <th data-field="name" data-sortable="true">Mã đơn hàng</th>
                                <th>Tên người nhận</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Trạng thái</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $data['order']['order_id'] ?></td>
                                <td><?php echo $data['order']['user_name'] ?></td>
                                <td><?php echo $data['order']['user_email'] ?></td>
                                <td><?php echo $data['order']['user_phone'] ?></td>
                                <td>
                                    <?php 
                                        switch ($data['order']['status']) {
                                            case 1:
                                                echo '<span class="label label-success">Chưa xử lý</span>';
                                                break;
                                            case 2:
                                                echo '<span class="label label-success">Đang xử lý</span>';
                                                break;
                                            case 3:
                                                echo '<span class="label label-warning">Đang giao hàng</span>';
                                                break;
                                            case 4:
                                                echo '<span class="label label-success">Đã giao hàng</span>';
                                                break;
                                            case 5:
                                                echo '<span class="label label-primary">Đã thanh toán</span>';
                                                break;
                                            case 6:
                                                echo '<span class="label label-danger">Đã hủy</span>';
                                                break;
                                        }
                                    ?>
                                </td>
                                <td><?php echo number_format($data['order']['amount'], 0, '.', ','); ?> vnd</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" class="table" data-toggle="table">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">STT</th>
                                <th data-field="name" data-sortable="true">Tên sản phẩm</th>
                                <th data-field="price" data-sortable="true">Giá</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Danh mục</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 1;
                                foreach ($data['details'] as $key => $detail) {
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $detail['prd_name']; ?></td>
                                    <td><?php echo number_format($detail['price'], 0, '.', ','); ?> vnd</td>
                                    <td style="text-align: center" id="product-img"><img width="90" height="120" src="<?php echo '/mvc/public/admin/images/'.$detail['prd_image'];?>" /></td>
                                    <td><?php echo $detail['qty']; ?></td>
                                    <td><?php echo $detail['cat_name']; ?></td>
                                </tr>
                            <?php
                                $i++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->