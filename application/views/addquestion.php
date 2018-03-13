<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add Question</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="<?php echo base_url(); ?>elephant/css/vendor.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>elephant/css/elephant.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>elephant/css/application.min.css">
</head>
<body class="layout">
	<div class="layout-header">
		<div class="navbar navbar-default">
			<div class="navbar-header">
				<a class="navbar-brand navbar-brand-center">Jattiblee</a>
				<button class="navbar-toggler collapsed visible-xs-block" type="button" data-toggle="collapse" data-target="#sidenav">
					<span class="sr-only">Toggle navigation</span>
					<span class="bars">
						<span class="bar-line bar-line-1 out"></span>
						<span class="bar-line bar-line-2 out"></span>
						<span class="bar-line bar-line-3 out"></span>
					</span>
					<span class="bars bars-x">
						<span class="bar-line bar-line-4"></span>
						<span class="bar-line bar-line-5"></span>
					</span>
				</button>
				<button class="navbar-toggler collapsed visible-xs-block" type="button" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="arrow-up"></span>
					<span class="ellipsis ellipsis-vertical"></span>
				</button>
			</div>
			<div class="navbar-toggleable">
				<nav id="navbar" class="navbar-collapse collapse">
					<button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="bars">
							<span class="bar-line bar-line-1 out"></span>
							<span class="bar-line bar-line-2 out"></span>
							<span class="bar-line bar-line-3 out"></span>
							<span class="bar-line bar-line-4 in"></span>
							<span class="bar-line bar-line-5 in"></span>
							<span class="bar-line bar-line-6 in"></span>
						</span>
					</button>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="layout-main">
		<div class="layout-sidebar">
			<div class="layout-sidebar-backdrop"></div>
			<div class="layout-sidebar-body">
				<nav id="sidenav" class="sidenav-collapse collapse">
					<ul class="sidenav">
						<li class="sidenav-item">
							<a href="<?php echo base_url().index_with(); ?>dashboard">
								<span class="sidenav-icon icon icon-photo"></span>
								<span class="sidenav-label">Dashboard</span>
							</a>
						</li>

						<li class="sidenav-item active">
							<a href="<?php echo base_url().index_with(); ?>addquestion">
								<span class="sidenav-icon icon icon-bars"></span>
								<span class="sidenav-label">Add Question</span>
							</a>
						</li>
					</ul>

				</nav>
			</div>
		</div>

		<div class="layout-content">
			<div class="layout-content-body">
				<div class="title-bar">
					<h1 class="title-bar-title">Basic template</h1>
					<p class="title-bar-description">
						<small>ooooo</small>
					</p>
				</div>
			</div>
		</div>


		<div class="layout-footer">
			<div class="layout-footer-body">
				<small>Jattiblee.</small>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>elephant/js/vendor.min.js"></script>
	<script src="<?php echo base_url(); ?>elephant/js/elephant.min.js"></script>
	<script src="<?php echo base_url(); ?>elephant/js/application.min.js"></script>
</body>
</html>