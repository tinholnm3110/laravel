<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li><a href="#">Quản lý thành viên</a></li>
			<li class="active">Nguyễn Văn A</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Thành viên: Nguyễn Văn A</h1>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-8">
						<?php 
							//if(isset($_SESSION['err_update']['email_exists'])) {
							//	echo $_SESSION['err_update']['email_exists'];
							//	unset($_SESSION['err_update']['email_exists']);
							//}
						?>
						<form role="form" method="post" action="#">
							<div class="form-group">
								<label>Họ & Tên</label>
								<input type="text" name="user_full" class="form-control" value="<?php //echo $data['user_full']; ?>" placeholder="">
							</div>
							<!-- Thông báo lỗi cho user_full -->
							<?php 
							// if(isset($_SESSION['err_update']['user_full'])) 
							// 		{ 
							// 			echo $_SESSION['err_update']['user_full'];
							// 			unset($_SESSION['err_update']['user_full']);
							// 		} 
							?>
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="user_mail" value="<?php //echo $data['user_mail']; ?>" class="form-control">
								<!-- Lấy email cũ để xử lý trong hàm update -->
								<input type="hidden" name="old_mail" value="<?php //echo $data['user_mail']; ?>" class="form-control">
							</div>
							<!-- Thông báo lỗi cho user_mail -->
							<?php 
							// if(isset($_SESSION['err_update']['user_mail'])) 
							// 	  {
							// 		echo $_SESSION['err_update']['user_mail']; 
							// 		unset($_SESSION['err_update']['user_mail']);
							// 	  }	
							?>
							<div class="form-group">
								<label>Quyền</label>
								<select name="user_level" class="form-control">
									<option <?php //if($data['user_level'] == 1) echo 'selected'; ?> value=1>Admin</option>
									<option <?php //if($data['user_level'] == 2) echo 'selected'; ?> value=2 selected>Member</option>
								</select>
							</div>
							<input type="submit" name="btn_update" class="btn btn-primary" value="Cập nhật">
							<button type="reset" class="btn btn-default">Làm mới</button>
					</div>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->

</div> <!--/.main-->