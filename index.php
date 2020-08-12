<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Jesse Franco Latosa">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width-device-width, initial-scale-1,shrink-to-fit=no">
		<title>CRUD App Using PHP-OOP, PDO-MySQL-Ajax</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/all.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.min.css" />
	</head>
	<body>
		<?php require 'require/navbar.php'; ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="text-center text-danger font-weight-normal my-3">CRUD Application Using Bootstrap 4, PHP-OOP, PDO-MySQL, Ajax, Datatable & SweetAlert 2</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<h4 class="text-primary">All users in database!</h4>
				</div>
				<div class="col-lg-6">
					<button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus fa-lg"></i> Add New User</button>
					<a href="action.php?export=excel"class="btn btn-success m-1 float-right"><i class="fas fa-table fa-lg"></i> Export to Excel</a>
				</div>
			</div>
			<hr class="my-1">
			<div class="row">
				<div class="col-lg-12">
					<div class="table-responsive" id="showUser">
						<h3 class="text-center text-success" style="margin-top:150px">Loading...</h3>
					</div>
				</div>
			</div>
		</div>
        <?php include 'modals/add_modal.php'; ?>
		<?php include 'modals/edit_modal.php'; ?>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/all.min.js"></script>
		<script type="text/javascript" src="assets/js/datatables.min.js"></script>
<!--		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>-->
		<script type="text/javascript" src="assets/js/sweetalert2.min.js"></script>
		<script type="text/javascript" src="functions/ajax.js"></script>
	</body>
</html>