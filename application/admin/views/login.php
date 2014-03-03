<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>欢迎登录后台管理系统</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<script src="/script/sea-modules/seajs/seajs/2.1.1/sea.js"></script>
	<script>
	seajs.use('/script/src/1.0.js');
	</script>
		
</head>

<body>
	<script>JS_PATH = 'login';</script>

	<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>欢迎登录后台管理系统</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						<?php if(isset($login)): ?>
						<span style="color:red">请输入正确的用户名和密码登录！</span>
						<?php else: ?>
						请输入用户名和密码。
						<?php endif ?>
					</div>
					<form class="form-horizontal" action="login" method="post">
						<fieldset>
							<div class="input-prepend" title="用户名" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="密码" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" />
							</div>
							<div class="clearfix"></div>

							<!-- <div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />记住帐号</label>
							</div> -->
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">登陆</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
		</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->
		
</body>
</html>
