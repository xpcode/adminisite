<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>雅昌艺术网管理中心</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="雅昌艺术网管理中心">
	<meta name="author" content="C.">

	<!-- The styles -->
	<link id="bs-css" href="/admin/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="/admin/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="/admin/css/charisma-app.css" rel="stylesheet">
	<link href="/admin/css/uniform.default.css" rel="stylesheet">

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="/script/sea-modules/seajs/seajs/2.1.1/sea.js"></script>
	<script>
	seajs.use('/script/src/1.0.js');
	</script>
</head>

<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="main">
					<span>雅昌艺术网</span>
				</a>

				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i>
						<span class="hidden-phone">
							<?=$userinfo["username"] ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="/admin/main/modify_pwd">修改密码</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="logout">退出</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<div class="container-fluid">
		<div class="row-fluid">

			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">管理面板</li>
						<li>
							<a class="ajax-link" href="/admin/main">
								<i class="icon-home"></i>
								<span class="hidden-tablet">首页</span>
							</a>
						</li>
						<li>
							<a class="ajax-link" href="/admin/product">
								<i class="icon-eye-open"></i>
								<span class="hidden-tablet">产品服务</span>
							</a>
						</li>
						<li>
							<a class="ajax-link" href="/admin/mcase">
								<i class="icon-list-alt"></i>
								<span class="hidden-tablet">案例展示</span>
							</a>
						</li>
						<li>
							<a class="ajax-link" href="/admin/mnew">
								<i class="icon-globe"></i>
								<span class="hidden-tablet">营销动态</span>
							</a>
						</li>
						<li>
							<a class="ajax-link" href="/admin/contact">
								<i class="icon-align-justify"></i>
								<span class="hidden-tablet">业务联系</span>
							</a>
						</li>
					</ul>
				</div>
				<!--/.well -->
			</div>
			<!--/span-->
			<!-- left menu ends -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">警告!</h4>
					<p>
						您需要开启
						<a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
						.
					</p>
				</div>
			</noscript>