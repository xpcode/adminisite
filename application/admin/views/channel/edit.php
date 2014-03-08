<?php $this->
load->view('/common/header.php'); ?>

<?php
if(!isset($channel)){
	$channel = array('id'=>0, 'name'=>'', 'chorder'=>'', 'ctype'=>'', 'attrs'=>'');
}
?>

<script>JS_PATH = 'channel/edit';</script>

<div class="span10" id="content">
	<!-- content starts -->

	<div>
		<ul class="breadcrumb">
			<li>
				<a href="/admin/main">频道管理</a>
				<span class="divider">/</span>
			</li>
			<li>
				添加子频道
			</li>
		</ul>
	</div>

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2>
					<i class="icon-edit"></i>
					频道信息
				</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="<?= $action ?>" method="post">
					<fieldset>
						<div class="control-group">
							<label for="selectError3" class="control-label">频道内容类型</label>
							<div class="controls">
								<select name="ctype" required>
							    	<option value="0">请选择频道内容类型</option>
									<option value="1" <?= 1==$channel['ctype'] ? 'selected="selected"' : "" ?>>富文本</option>
									<option value="2" <?= 2==$channel['ctype'] ? 'selected="selected"' : "" ?>>图片列表</option>
									<option value="3" <?= 3==$channel['ctype'] ? 'selected="selected"' : "" ?>>联系人</option>
							    </select>
							</div>
						</div>
						<div class="control-group">
							<label for="selectError3" class="control-label">父级频道</label>
							<div class="controls">
								<input type="text" disabled="" class="disabled" value="<?= $parent_channel['name'] ?>">
								<input type="hidden" name="pid" class="disabled" value="<?= $parent_channel['id'] ?>">
								<input type="hidden" name="id" class="disabled" value="<?= $channel['id'] ?>">
							</div>
						</div>
						<div class="control-group">
							<label for="focusedInput" class="control-label">频道名称</label>
							<div class="controls">
								<input type="text" name="name" value="<?= $channel['name'] ?>" required class="focused">
								<span class="help-inline hide">请输入1-32个字</span>
							</div>
						</div>
						<div class="control-group">
							<label for="focusedInput" class="control-label">频道顺序</label>
							<div class="controls">
								<input type="text" name="chorder" value="<?= $channel['chorder'] ?>" required class="focused">
								<span class="help-inline hide">请输入数字</span>
							</div>
						</div>
						<?php if($parent_channel['id']==5): ?>
						<div class="control-group">
							<label class="control-label" for="selectError3">其他信息</label>
							<div class="controls">
								<textarea id="txtattrs" name="attrs" value="<?= $channel['attrs'] ?>"></textarea>
								<span class="help-inline hide">请输入1-50字</span>
							</div>
						</div>
						<?php endif ?>
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