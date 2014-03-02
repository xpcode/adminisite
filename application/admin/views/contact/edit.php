<?php $this->
load->view('/common/header.php'); ?>

<?php
if(!isset($contact)){
	$contact = array('id'=>0, 'channel_id'=>0, 'project'=>'', 'name'=>'', 'tel'=>'', 'tel_2'=>'', 'tel_service'=>'', 'email'=>'');
}
?>

<script>JS_PATH = 'contact/edit';</script>

<div class="span10" id="content">
	<!-- content starts -->

	<div>
		<ul class="breadcrumb">
			<li>
				<a href="/admin/contact">联系人管理</a>
				<span class="divider">/</span>
			</li>
			<li>
				添加联系人
			</li>
		</ul>
	</div>

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2>
					<i class="icon-edit"></i>
					联系人信息
				</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="<?= $action ?>" method="post">
					<fieldset>
						<div class="control-group">
							<label for="selectError3" class="control-label">所属频道</label>
							<div class="controls">
							    <select name="channel_id">
							    	<option value="0">请选择频道</option>
									<?php foreach ($channels as $key => $value): ?>
									<option value="<?= $value['id'] ?>" <?= $value['id']==$contact['channel_id'] ? 'selected="selected"' : "" ?>><?= $value['name'] ?></option>
									<?php endforeach ?>
							    </select>
								<span class="help-inline hide">请选择所属频道</span>
							</div>
						</div>
						<div class="control-group">
							<label for="selectError3" class="control-label">联系人所属公司或部门</label>
							<div class="controls">
								<input type="text" name="project" required class="focused" value="<?= $contact['project'] ?>">
								<span class="help-inline hide">请输入1-50字</span>
							</div>
						</div>
						<div class="control-group">
							<label for="selectError3" class="control-label">联系人姓名</label>
							<div class="controls">
								<input type="hidden" name="id" class="disabled" value="<?= $contact['id'] ?>">
								<input type="text" name="name" required class="focused" value="<?= $contact['name'] ?>">
								<span class="help-inline hide">请输入1-20字</span>
							</div>
						</div>
						<div class="control-group">
							<label for="focusedInput" class="control-label">电话</label>
							<div class="controls">
								<input type="text" name="tel" value="<?= $contact['tel'] ?>" required class="focused">
								<span class="help-inline hide">请输入1-20字</span>
							</div>
						</div>
						<div class="control-group">
							<label for="focusedInput" class="control-label">电话2</label>
							<div class="controls">
								<input type="text" name="tel_2" value="<?= $contact['tel_2'] ?>" class="focused">
								<span class="help-inline hide">请输入1-20字</span>
							</div>
						</div>
						<div class="control-group">
							<label for="focusedInput" class="control-label">客服电话</label>
							<div class="controls">
								<input type="text" name="tel_service" value="<?= $contact['tel_service'] ?>" class="focused">
								<span class="help-inline hide">请输入1-20字</span>
							</div>
						</div>
						<div class="control-group">
							<label for="focusedInput" class="control-label">邮箱</label>
							<div class="controls">
								<input type="text" name="email" value="<?= $contact['email'] ?>" required class="focused">
								<span class="help-inline hide">请输入1-50字</span>
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