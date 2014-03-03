<?php $this->
load->view('/common/header.php'); ?>

<script>JS_PATH = 'article/edit';</script>

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
					文章信息
				</h2>
			</div>
			<div class="box-content">
				<form method="post" action="add" class="form-horizontal">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="selectError3">标题</label>
							<div class="controls">
								<input type="text" class="focused" required name="name">
								<span class="help-inline hide">请输入1-50字</span>
							</div>
						</div>
						<div class="controls">
							<div id="uniform-undefined" class="uploader">
								<input type="file" style="opacity: 0;" size="19">
								<span style="-moz-user-select: none;" class="filename">No file selected</span>
								<span style="-moz-user-select: none;" class="action">Choose File</span>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="selectError3">简图</label>
							<div class="controls">
								<div id="uniform-undefined" class="uploader">
									<input name="img" type="file" style="opacity: 0;" size="19">
									<span class="filename">请选择文件</span>
									<span class="action">选择文件</span>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="selectError3">简介</label>
							<div class="controls">
								<textarea id="txtintro" cols="20" rows="2" class="ckeditor"></textarea>
								<span class="help-inline hide">请输入1-50字</span>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="selectError3">内容</label>
							<div class="controls">
								<textarea id="txtcontent" cols="20" rows="2" class="ckeditor"></textarea>
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