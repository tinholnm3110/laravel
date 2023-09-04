<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Quản lý đơn hàng</a></li>
				<li class="active">1</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Đơn hàng: 1</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Họ & Tên</label>
                                    <input type="text" name="user_name" class="form-control" value="Nguyễn Văn A" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="user_email" value="nguyenvana@gmail.com" class="form-control">
                                </div>                       
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="user_phone"  value="1234567890" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control">
                                        <option value=1>Chờ xử lý</option>
                                        <option value=2 selected>Đang xử lý</option>
                                        <option value=3>Đang giao hàng</option>
                                        <option value=4>Đã giao hàng</option>
                                        <option value=5>Đã thanh toán</option>
                                        <option value=6>Đã hủy</option>
                                    </select>
                                </div>
                                <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
		
	</div>	<!--/.main-->	