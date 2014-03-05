<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div data-original-title="" class="box-header well">
			<h2> <i class="icon-picture"></i>
				图片管理
			</h2>
			<div class="pull-right">
				[<a href="/admin/pic/add/<?= $cur_channel['code'] ?>/1/<?= $cur_channel['id'] ?>">添加图片</a>]
			</div>
		</div>
		<div class="box-content">
			<ul class="thumbnails gallery">

				<?php foreach ($pics as $key => $value): ?>
				<li class="thumbnail" data-itemid="<?= $value['id'] ?>" data-recommend="<?= $value['recommend'] ?>">
					<a href="<?= empty($value['url'])?"javascript:;":$value['url'] ?>" title="<?= $value['title'] ?>" style="background:url(<?= $value['filename'] ?>)" class="cboxElement">
						<img alt="<?= $value['title'] ?>" src="<?= $value['filename'] ?>" class="grayscale"></a>

					<div class="well gallery-controls" style="padding: 2px; margin-left: -5px; width:auto;z-index:999;">
						<p style="width: 101px; padding: 2px; margin-top: -1px;">
							<a class="gallery-edit btn" href="/admin/pic/recommend/<?= $value['id'] ?>"><?= $value['recommend']==1?'取消':'推荐' ?></a>
							<a class="gallery-delete btn" href="/admin/pic/delete/<?= $value['id'] ?>">删除</a>
						</p>
					</div>
				</li>
				<?php endforeach ?>

			</ul>
		</div>
	</div>
</div>