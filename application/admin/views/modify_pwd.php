<?php $this->
load->view('/common/header.php'); ?>

<script>JS_PATH = 'modify_pwd';</script>

<div class="span10" id="content">
	<!-- content starts -->

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2>
					<i class="icon-edit"></i>
					修改密码
				</h2>
			</div>
			<div class="box-content">
				<?php if(!empty($errormsg)): ?>

				<script>alert('<?= $errormsg ?>');</script>
				
				<?php endif ?>

				<form class="form-horizontal" action="/admin/main/modify_pwd" method="post">
					<fieldset>
						<div class="control-group">
							<label for="selectError3" class="control-label">旧密码</label>
							<div class="controls">
								<input type="password" name="password_old" maxlength="20" required class="focused">
								<span class="help-inline hide">请输入正确的旧密码</span>
							</div>
						</div>
						<div class="control-group">
							<label for="selectError3" class="control-label">新密码</label>
							<div class="controls">
								<input type="password" name="password_new" maxlength="20" required class="focused">
								<span class="help-inline hide">请输入正确的新密码</span>
							</div>
						</div>
						<div class="control-group">
							<label for="focusedInput" class="control-label">重复新密码</label>
							<div class="controls">
								<input type="password" name="password" maxlength="20" required class="focused">
								<span class="help-inline hide">请再次输入新密码</span>
							</div>
						</div>
						<div class="form-actions">
							<button class="btn btn-primary" type="submit">保存</button>
							<a class="btn" href="javascript:history.back();">取消</a>
						</div>
					</fieldset>
				</form>

			</div>
		</div>
		<!--/span-->

	</div>
	<!--/row-->

	<!-- content ends -->
</div>

<?php $this->
load->view('/common/footer.php'); ?>