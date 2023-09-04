<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li><a href="#">Quản lý thành viên</a></li>
			<li class="active">Thêm thành viên</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Thêm thành viên</h1>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-8">
						<?php 
							//if(isset($_SESSION['err_store']['email_exists'])) {
							//	echo $_SESSION['err_store']['email_exists'];
							//	unset($_SESSION['err_store']['email_exists']);
							//}
						?>
						<form role="form" method="post" action="#">
							<div class="form-group">
								<label>Họ & Tên</label>
								<input name="user_full" class="form-control" placeholder="">
							</div>
							<?php 
								//if(isset($_SESSION['err_store']['user_full'])) {
								//	echo $_SESSION['err_store']['user_full'];
								//	unset($_SESSION['err_store']['user_full']);
								//}
							?>
							<div class="form-group">
								<label>Email</label>
								<input name="user_mail" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Mật khẩu</label>
								<input name="user_pass" type="password" class="form-control">
							</div>
							<div class="form-group">
								<label>Nhập lại mật khẩu</label>
								<input name="user_re_pass" type="password" class="form-control">
							</div>
							<div class="form-group">
								<label>Quyền</label>
								<select name="user_level" class="form-control">
									<option value=1>Admin</option>
									<option value=2>Member</option>
								</select>
							</div>
							<input name="btn_store" type="submit" class="btn btn-success" value="Thêm mới">
							<button type="reset" class="btn btn-default">Làm mới</button>
					</div>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->

</div> <!--/.main-->