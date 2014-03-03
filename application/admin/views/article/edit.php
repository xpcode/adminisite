<?php $this->
load->view('/common/header.php'); ?>

<?php
if(!isset($article)){
	$article = array('id'=>0, 'channel_id'=>0, 'title'=>'', 'img'=>'', 'intro'=>'', 'content'=>'');
}
?>

<script>JS_PATH='article/edit';</script>

<div class="span10" id="content">
	<!-- content starts -->

	<div>
		<ul class="breadcrumb">
			<li>
				<a href="/admin/product">文章管理</a>
				<span class="divider">/</span>
			</li>
			<li>
				添加文章
			</li>
		</ul>
	</div>

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2>
					<i class="icon-edit"></i>
					文章信息
				</h2>
			</div>
			<div class="box-content">
				<form method="post" action="add" enctype="multipart/form-data" class="form-horizontal">
					<fieldset>
						<div class="control-group">
							<label for="selectError3" class="control-label">所属频道</label>
							<div class="controls">
							    <select name="channel_id">
							    	<option value="0">请选择频道</option>
									<?php foreach ($channels as $key => $value): ?>
									<option value="<?= $value['id'] ?>" <?= $value['id']==$article['channel_id'] ? 'selected="selected"' : "" ?>><?= $value['name'] ?></option>
									<?php endforeach ?>
							    </select>
								<span class="help-inline hide">请选择所属频道</span>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="selectError3">标题</label>
							<div class="controls">
								<input type="hidden" name="id" class="disabled" value="<?= $article['id'] ?>">
								<input type="text" class="focused" required name="title">
								<span class="help-inline hide">请输入1-50字</span>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="selectError3">简图</label>
							<div class="controls">
								<div id="uniform-undefined" class="uploader" style="width:auto;">
									<input name="img" type="file" style="opacity: 0;" size="19">
									<span class="filename">未选择</span>
									<span class="action">选择文件</span>
								</div>
								<?php if(isset($upload_msg)): ?>
								<span class="help-inline">您上传的图片不符合要求（小于2MB的图片）</span>
								<?php endif ?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="selectError3">简介</label>
							<div class="controls">
								<textarea id="txtintro" cols="20" rows="2"></textarea>
								<span class="help-inline hide">请输入1-50字</span>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="selectError3">内容</label>
							<div class="controls">
								<textarea id="txtcontent" cols="20" rows="2"></textarea>
								<span class="help-inline hide">请输入1-50字</span>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">保存</button>
							<a href="javascript:history.back();" class="btn">取消</a>
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