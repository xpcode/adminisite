<?php if(is_array($banner)): ?>

<?php foreach ($banner as $key=>$value): ?>
	<img width="1000" height="320" class="<?= $key>0?'hide':'' ?>" src="<?= $value['filename'] ?>" alt="<?= $value['title'] ?>">
<?php endforeach ?>

<ul class="rotate-btns clearfix">

	<?php if(count($banner)>1): ?>
	<?php foreach ($banner as $key=>$value): ?>

	<?php if($key==0): ?>
	<li class="active"></li>

	<?php else: ?>
	<li></li>

	<?php endif ?>

	<?php endforeach ?>
	<?php endif ?>

</ul>

<?php endif ?>