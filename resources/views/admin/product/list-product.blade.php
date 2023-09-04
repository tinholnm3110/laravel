@include('admin/master/tieu_de')
	@include('admin/master/danh_muc')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="/admin/product/add-product" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
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
                                <th data-field="name" data-sortable="true">Tên sản phẩm</th>
                                <th data-field="price" data-sortable="true">Giá</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Danh mục</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php //foreach ($data['products'] as $product) { ?>
                           
                                <tr>
                                    <td style=""><?php //echo $product['prd_id']; ?></td>
                                    <td style=""><?php //echo $product['prd_name']; ?></td>
                                    <td style=""><?php //echo number_format($product['prd_price'],0,'.',','); ?> vnd</td>
                                    <td style="text-align: center" id="product-img"><img width="90" height="120" src="<?php //echo '/mvc/public/admin/images/'.$product['prd_image'];?>" /></td>
                                    <td>
                                        <?php 
                                        //if($product['prd_status'] == 1) {
                                        //    echo '<span class="label label-success">Còn hàng</span>';
                                        //}else{
                                        //    echo '<span class="label label-danger">Hết hàng</span>';
                                        //}    
                                        ?>
                                        
                                    </td>
                                    <td><?php //echo $product['cat_name']; ?></td>
                                    <td class="form-group">
                                        <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>

                            <?php  ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php
                                //if($data['page'] > 1 ) {
                                //   $prev = $data['page'] - 1;
                                //    echo '<li class="page-item"><a class="page-link" href="index.php?c=product&a=index&page='.$prev.'">&laquo;</a></li>';
                                //}
                            ?>

                            <?php
                                //for($i = 1; $i <= $data['totalPage']; $i++){
                                //    $link = "index.php?c=product&a=index&page=$i";
                                //    if($i == $data['page']){
                                //       echo '<li class="page-item active" ><a class="page-link" href="">'.$i.'</a></li>';
                                //   }else{
                                //      echo '<li class="page-item"><a class="page-link" href="'.$link.'">'.$i.'</a></li>';
                                //   }
                                //}
                            ?>
                            

                            <?php
                                //if($data['page'] < $data['totalPage'] ) {
                                //    $next = $data['page'] + 1;
                                //    echo '<li class="page-item"><a class="page-link" href="index.php?c=product&a=index&page='.$next.'">&raquo;</a></li>';
                                //}
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->
@include("admin/master/thong_tin")