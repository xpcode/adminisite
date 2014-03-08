<?php if(!empty($rtext_list) AND is_array($rtext_list)): ?>

<?php foreach ($rtext_list as $key=>$value): ?>

	<div class="type-title <?= $key==0?'mt16px':'' ?>"> <em></em>
    <?= $value['title'] ?>
	</div>
	<div class="pl23 <?= $key==0?'mb112':'' ?>">
	    <?= $value['intro'] ?>
	    <a href="/<?= $channel_code ?>/detail/<?= $value['id'] ?>" class="more">更多信息</a>
	</div>

<?php endforeach ?>

<?php endif ?>