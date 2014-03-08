<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div data-original-title="" class="box-header well">
			<h2> <i class="icon-plus"></i>
				页头Banner图
			</h2>
			<div class="pull-right">
				[<a href="/admin/pic/add/<?= $cur_channel['code'] ?>/2">更新图片</a>]
			</div>
		</div>
		<div class="box-content">
			<?php if(is_array($banner)): ?>

			<?php foreach ($banner as $key=>$value): ?>
			<a href="<?= $value['filename'] ?>" target="_blank"><img src="<?= $value['filename'] ?>" style="width:auto; height:200px;display:inline-block;" alt="请上传图片"></a>
			<?php endforeach ?>

			<?php endif ?>
		</div>
	</div>
</div>