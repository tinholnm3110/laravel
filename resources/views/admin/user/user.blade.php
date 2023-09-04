@include('admin/master/tieu_de')
@include('admin/master/danh_muc')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/admin/user/user"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách thành viên</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách thành viên</h1>
        </div>
    </div><!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="index.php?c=user&a=create" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm thành viên
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">Họ & Tên</th>
                                <th data-field="price" data-sortable="true">Email</th>
                                <th>Quyền</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ndung["user"] as $user)
                            <?php    ?>
                            
                            <tr>
                                <td>{{$user ['id']}}</td>
                                <td>{{$user ['nameUser']}}</td>	
                                <td>{{$user ['nameEmail']}}</td>
                                <td style=""><?php //echo $user['users_id']; ?></td>
                                <td style=""><?php //echo $user['user_full']; ?></td>
                                <td style=""><?php //echo $user['user_mail']; ?></td>
                                <td>
                                    <?php 
                                        // if($user['user_level'] == 1) {
                                        //     echo '<span class="label label-danger">Admin</span>';
                                        // }else{
                                        //     echo '<span class="label label-success">Member</span>';
                                        // }
                                    ?>
                               
                                </td>
                                <td class="form-group">
                                    <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>

                            <?php //} ?>
                            @endforeach
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
    </div><!--/.row-->
</div> <!--/.main-->

@include("admin/master/thong_tin")