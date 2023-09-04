<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Danh sách đơn hàng</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách đơn hàng</h1>
            </div>
        </div>
        <!--/.row-->
        <div id="toolbar" class="btn-group">
            <a href="product-add.html" class="btn btn-success">
                <i class="glyphicon glyphicon-list"></i> Đơn hàng chưa xử lý
            </a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table data-toolbar="#toolbar" class="table" data-toggle="table">
                            <thead>
                                <tr>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th>Tên người nhận</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Trạng thái</th>
                                    <th>Tổng tiền</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($data['orders'] as $ord) {
                                ?>
                                    <tr>
                                        <td><?php echo $ord['order_id']; ?></td>
                                        <td><?php echo $ord['user_name']; ?></td>
                                        <td><?php echo $ord['user_email']; ?></td>
                                        <td><?php echo $ord['user_phone']; ?></td>
                                        <td>
                                            <?php 
                                                switch ($ord['status']) {
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
                                        <td><?php echo number_format($ord['amount'], 0, '.', ','); ?> vnd</td>
                                        <td class="form-group">
                                            <a href="index.php?c=order&a=detail&id=<?php echo $ord['order_id'];?>" class="btn btn-primary"><i
                                                    class="glyphicon glyphicon-eye-open"></i></a>
                                            <?php 
                                            // Nếu trạng thái là đã giao hàng hoặc đã thanh toán thì không cho sửa và xóa
                                            if($ord['status'] != 5 && $ord['status'] != 6) {
                                            ?>
                                                    <a href="index.php?c=order&a=edit&id=<?php echo $ord['order_id'];?>" class="btn btn-warning"><i
                                                    class="glyphicon glyphicon-pencil"></i></a>
                                                    <a href="index.php?c=order&a=destroy&id=<?php echo $ord['order_id'];?>" class="btn btn-danger"><i
                                                    class="glyphicon glyphicon-remove"></i></a>
                                            <?php
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
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