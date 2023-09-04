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
                                    <th data-field="name" data-sortable="true">Mã đơn hàng</th>
                                    <th>Tên người nhận</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Trạng thái</th>
                                    <th>Tổng tiền</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Nguyễn Văn A</td>
                                    <td>nguyenvana@gmail.com</td>
                                    <td>1234567890</td>
                                    <td><span class="label label-success">Đang xử lý</span></td>
                                    <td>30.000.000 vnd</td>
                                    <td class="form-group">
                                        <a href="order-detail.html" class="btn btn-primary"><i
                                                class="glyphicon glyphicon-eye-open"></i></a>
                                        <a href="order-update.html" class="btn btn-warning"><i
                                                class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="order-delete.html" class="btn btn-danger"><i
                                                class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>
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