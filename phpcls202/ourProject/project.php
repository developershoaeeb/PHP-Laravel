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
<?php require '../controller/dbConflig.php';?>
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
<div class="panel panel-flat">

	<div class="panel-heading">
		<h5 class="panel-title">Project List</h5>
		<div class="heading-elements">
			<ul class="icons-list">
				<li style="margin-right: 10px;"><a href="projectAdd.php" class="btn btn-primary add-new">Add New</a></li>
			</ul>
		</div>
	</div>
	<?php
				if (isset($_GET['msg'])) {
				?>
				<div class = "alert alert-info no-border">
					<button type = "button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button><span class= "text-semibold">Success</span> <?php echo $_GET ['msg'];?><a href="#" class="alert-link"></a>.
				</div>
				<a href="./projectTrushView.php" style="display: inherit;text-align: right;
				margin-right: 20px;"><button type="button" class="btn btn-danger"> View Trush </button></a>	
				<?php } ?>
	<table class="table datatable-basic table-bordered">
		<thead>
			<tr>
				<th width ="5%">SL.</th>
				<th width = "30%">Project name</th>
				<th width = "30%">Project link</th>
				<th width = "25%">Project thumb</th>
				<th width = "10%" class="text-center">Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php
				$selectQuery = "SELECT * FROM our_projects WHERE active_status=1";
				$projectList = mysqli_query($dbCon, $selectQuery);
				//var_dump($projectList);
				// if (!empty($projectList)){

				foreach ($projectList as $key => $value){
				//	echo $value ['details'] . "<br>";
				?>
				<tr>
				<td><?php echo ++$key;?></td>
				<td><?php echo $value ['project_name'];?></td>
				<td><a href="#"><?php echo $value ['project_link'];?></a></td>
				<td>
					<img class="" width="90" height="auto" src="<?php echo '../uploads/projectThumb/'.$value['project_thumb'];?>" alt="" sizes="" srcset="">
				</td>
				<td class="text-center">
				<a href="./projectUpdate.php?project_id=<?php echo $value ['id'];?>"><i class="icon-pencil7"></i></a>
				<a href="./projectDelete.php?project_id=<?php echo $value ['id'];?>"><i class="icon-trash"></i></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
					<!-- /basic datatable -->



					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
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
