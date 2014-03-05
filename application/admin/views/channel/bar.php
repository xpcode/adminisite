<div>
	<ul class="breadcrumb clearfix">
		<li>所属频道：</li>
		<li>
			<?php if($cur_channel['id'] <= 5): ?>
			<strong>所有频道</strong>
			<?php else: ?>
			<a href="/admin/<?= $cur_channel['code'] ?>">所有频道</a>
			<?php endif ?>
		</li>
		<?php foreach ($channels as $val): ?>
		<li>
			<span class="divider">|</span>
			<?php if($cur_channel['id'] == $val['id']): ?>
			<strong><?= $val['name'] ?></strong>
			<?php else: ?>
			<a href="/admin/<?=$cur_channel['code']?>/index/<?= $val['id'] ?>"><?= $val['name'] ?></a>
			<?php endif ?>
		</li>
		<?php endforeach ?>
	</ul>
</div>