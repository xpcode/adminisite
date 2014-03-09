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

<?php if($cur_channel['id'] == 7 AND !empty($channels_2)): ?>
<div>
	<ul class="breadcrumb clearfix">
		<li>所属频道：</li>
		<?php foreach ($channels_2 as $key=>$val): ?>
		<li>
			<?php if($key>0): ?>
			<span class="divider">|</span>
			<?php endif ?>
			<?php if($cur_channel_2['id'] == $val['id']): ?>
			<strong><?= $val['name'] ?></strong>
			<?php else: ?>
			<a href="/admin/<?=$cur_channel['code']?>/index/<?=$cur_channel['id']?>/1/<?= $val['id'] ?>"><?= $val['name'] ?></a>
			<?php endif ?>
		</li>
		<?php endforeach ?>
	</ul>
</div>
<?php endif ?>
