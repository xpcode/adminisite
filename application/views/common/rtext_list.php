<?php if(!empty($rtext_list) AND is_array($rtext_list)): ?>

<h3 class="area-title"><?= empty($rtext_list_2)?$cur_channel['name']:$cur_channel_2_1['name'] ?></h3>

<?php foreach ($rtext_list as $key=>$value): ?>

	<div class="type-title <?= $key==0?'mt16px':'' ?>"> <em></em>
    <a href="/<?= $channel_code ?>/detail/<?= $cur_channel['id'] ?>/<?= $value['id'] ?>"><?= $value['title'] ?></a>
	</div>
	<div class="pl23">
	    <?= $value['intro'] ?>
	    <a class="more hide">更多信息</a>
	</div>

<?php endforeach ?>

<?php endif ?>

<?php if(!empty($rtext_list_2) AND is_array($rtext_list_2)): ?>

<h3 class="area-title"><?= $cur_channel_2_2['name'] ?></h3>

<?php foreach ($rtext_list_2 as $key=>$value): ?>

	<div class="type-title <?= $key==0?'mt16px':'' ?>"> <em></em>
    <a href="/<?= $channel_code ?>/detail/<?= $cur_channel['id'] ?>/<?= $value['id'] ?>"><?= $value['title'] ?></a>
	</div>
	<div class="pl23">
	    <?= $value['intro'] ?>
	    <a class="more hide">更多信息</a>
	</div>

<?php endforeach ?>

<?php endif ?>