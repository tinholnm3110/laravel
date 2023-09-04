<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li><a href="#">Quản lý sản phẩm</a></li>
            <li class="active">Sản phẩm số 1</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản phẩm: Sản phẩm số 1</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="#" role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" name="prd_name" required class="form-control" value="<?php ?>" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input type="number" name="prd_price" required value="<?php  ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Bảo hành</label>
                                <input type="text" name="prd_warranty" required value="<?php  ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phụ kiện</label>
                                <input type="text" name="prd_accessories" required value="<?php  ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Khuyến mãi</label>
                                <input type="text" name="prd_promotion" required value="<?php  ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tình trạng</label>
                                <input type="text" name="prd_new" required value="<?php  ?>" type="text" class="form-control">
                            </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ảnh sản phẩm</label>
                            <input type="file" name="prd_image" onchange="preview();">
                            <br>
                            <div>
                                <?php 
                                    //if(empty($data['product']['prd_image'])) {
                                    //   echo '<img src="/mvc/public/admin/images/no-img.jpg" id="prd_image">';
                                    //}else{
                                    //    echo '<img src="/mvc/public/admin/images/'.$data['product']['prd_image'].'" id="prd_image">';
                                    //}
                                ?>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select name="cat_id" class="form-control">
                                <?php  ?>
                                    <option
                                        <?php //if($data['product']['cat_id'] == $cate['cat_id']) echo "selected"; ?>
                                        value=<?php //echo $cate['cat_id']; ?>>
                                        <?php //echo $cate['cat_name']; ?>
                                    </option>
                                <?php  ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Trạng thái</label>
                            <select name="prd_status" class="form-control">
                                <option <?php  ?> value=1>Còn hàng</option>
                                <option <?php  ?> value=2>Hết hàng</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sản phẩm nổi bật</label>
                            <div class="checkbox">
                                <label>
                                    <input name="prd_featured" type="checkbox" value=1 <?php ?>>Nổi bật
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mô tả sản phẩm</label>
                            <textarea name="prd_details" required class="form-control" rows="3"><?php ?></textarea>
                        </div>
                        <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div> <!--/.main-->
<script>
    function preview() {
        prd_image.src=URL.createObjectURL(event.target.files[0]);
    }
</script>