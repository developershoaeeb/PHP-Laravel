<!DOCTYPE html>
<html lang="en">
<html lang="en">
<?php
// echo basename(__DIR__);
// die('');
// echo __DIR__;
if (basename(__DIR__) != 'phpcls202'){
	$baseURL = '../';
	$isInternal = true;
}else{
	$baseURL = '';
	$isInternal = false;
}

include '../includes/head.php';?>
<body>
	<!-- Main navbar -->
	<?php include '../includes/mainNavbar.php';?>
	<!-- /main navbar -->
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					
					<?php include '../includes/navigation.php';?>

					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="datatable_basic.html">Datatables</a></li>
							<li class="active">Basic</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">
					<!-- Basic datatable -->

					<?php
					require '../controller/dbConflig.php';
					$dtopdowonQuery = "SELECT * FROM categories WHERE active_status=1";
					$categoryList = mysqli_query($dbCon, $dtopdowonQuery);

					?>
	<!-- Basic examples -->
	<div class="panel-body">
		<form class="form-horizontal" action="../controller/projectController.php" method="POST" enctype="multipart/form-data">
			<fieldset class="content-group">
				<?php
				if (isset($_GET['msg'])) {
					
				?>
				<div class = "alert alert-info no-border">
					<button type = "button" class="close" data-dismiss="alert"><span> × </span><span class="sr-only">Close</span></button>
					<span class  = "text-semibold">Success</span> <?php echo $_GET ['msg'];?><a href="#" class="alert-link"></a>.
				</div>		
				<?php } ?>
				
				<div class="form-group">
					<label class="control-label col-lg-2" for="category_id" >Category</label>
					<div class="col-lg-10">
					<select name="category_id" class="form-control" id="category_id">
						<option value="opt1">Select Category</option>
						<?php 
						if (!empty($categoryList)){
							 foreach ($categoryList as $catagory){
							?>
							<option value="<?php echo $catagory['id'];?>"><?php echo $catagory['category_name'];?></option>
						<?php }} ?>
				    </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="project_name" >Project name</label>
					<div class="col-lg-10">
						<input type="text" id="project_name" class="form-control" name="project_name" required >
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="project_link">Project link</label>
					<div class="col-lg-10">
						<input type="text" id="project_link" class="form-control" name="project_link" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="project_thumb">Project thumb</label>
					<div class="col-lg-10">
						<input type="file" id="project_thumb" class="form-control" name="project_thumb">
					</div>
				</div>

			</fieldset>
			<div class="text-right">
				<a href="./project.php" class="btn btn-defult"><i class="icon-arrow-left15 position-left"></i> Back To List</a>
				<button type="submit" class="btn btn-primary" name="saveProject">Submit </button>
			</div>
		</form>
						</div>
							<!-- /basic examples -->
							<!-- /basic datatable -->
							<!-- Footer -->
							<!-- /footer -->
						</div>
						<!-- /content area -->
					</div>
					<!-- /main content -->
				</div>
				<!-- /page content -->
			</div>
	<!-- /page container -->
	<?php include '../includes/script.php';?>
</body>
</html>
