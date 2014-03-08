<?php $this->load->view('/common/header.php'); ?>

<script>JS_PATH='pic/edit';</script>

<?php
if(!isset($pic)){
	$pic = array('id'=>0, 'channel_id'=>$cur_channel['id'], 'itype'=>1, 'title'=>'', 'url'=>'', 'filename'=>'', 'filename_sub'=>'');
}
?>

<div class="span10" id="content">
	<!-- content starts -->

	<div>
		<ul class="breadcrumb">
			<li>
				<?php if($itype==1): ?>
				<?= $cur_channel['name'] ?>
				<?php else: ?>
				<a href="javascript:history.back();"><?= $cur_channel['name'] ?></a>
				<?php endif ?>
				<span class="divider">/</span>
			</li>
			<li>
				上传图片
			</li>
		</ul>
	</div>

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2>
					<i class="icon-edit"></i>
					图片信息
				</h2>
			</div>
			<div class="box-content">
				<form method="post" action="/admin/pic/add/<?= $cur_channel['code'] ?>/<?= $itype ?>/<?= $cur_channel['id'] ?>" enctype="multipart/form-data" class="form-horizontal">
					<fieldset>
						<div class="control-group hide">
							<label for="selectError3" class="control-label">图片类型</label>
							<div class="controls">
							    <select name="itype">
									<?php if($itype==1): ?>
							    	<option value="1">普通图片</option>
									<?php else: ?>
							    	<option value="2">Banner图片</option>
									<?php endif ?>
							    </select>
								<span class="help-inline hide">请选择所属频道</span>
							</div>
						</div>
						<div class="control-group">
							<label for="selectError3" class="control-label">所属频道</label>
							<div class="controls">
								<input type="text" value="<?= $cur_channel['name'] ?>" class="disabled" disabled="disabled">
								<input type="hidden" value="<?= $cur_channel['id'] ?>" class="disabled" name="channel_id">
							</div>
						</div>

						<?php if($cur_channel['id']>1): ?>
						<div class="control-group">
							<label class="control-label" for="selectError3">标题</label>
							<div class="controls">
								<input type="hidden" name="id" class="disabled" value="<?= $pic['id'] ?>">
								<input type="text" value="<?= $pic['title'] ?>" class="focused" required name="title">
								<span class="help-inline hide">请输入1-50字</span>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="selectError3">图片</label>
							<div class="controls">
								<div id="uniform-undefined" class="uploader" style="width:auto;">
									<input name="filename" type="file" style="opacity: 0;" size="19">
									<span class="filename">未选择</span>
									<span class="action">选择文件</span>
								</div>
								<span class="help-inline hide">只可以上传图片文件</span>
								<?php if(isset($upload_msg)): ?>
								<span class="help-inline">您上传的图片不符合要求（小于2MB的图片）</span>
								<?php endif ?>
							</div>
						</div>
						
						<?php if($itype==1): ?>
						<div class="control-group">
							<label class="control-label" for="selectError3">图片2</label>
							<div class="controls">
								<div id="uniform-undefined" class="uploader" style="width:auto;">
									<input name="filename_sub" type="file" style="opacity: 0;" size="19">
									<span class="filename">未选择</span>
									<span class="action">选择文件</span>
								</div>
								<span class="help-inline hide">只可以上传图片文件</span>
								<?php if(isset($upload_msg)): ?>
								<span class="help-inline">您上传的图片不符合要求（小于2MB的图片）</span>
								<?php endif ?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="selectError3">链接</label>
							<div class="controls">
								<input type="text" value="<?= $pic['url'] ?>" class="focused" required name="url">
								<span class="help-inline hide">请输入1-50字</span>
							</div>
						</div>
						<?php endif ?>

						<?php else: ?>
						<?php for($i=1;$i<=5;$i++): ?>
						<div class="control-group">
							<label class="control-label" for="selectError3">图片</label>
							<div class="controls">
								<div id="uniform-undefined" class="uploader" style="width:auto;">
									<input name="filename_<?=$i?>" type="file" style="opacity: 0;" size="19">
									<span class="filename">未选择</span>
									<span class="action">选择文件</span>
								</div>
								<span class="help-inline hide">只可以上传图片文件</span>
							</div>
						</div>
						<?php endfor ?>
						<?php endif ?>

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

<?php $this->load->view('/common/footer.php'); ?>
