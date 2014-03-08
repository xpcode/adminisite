<ul>
	<?php if(!empty($channels)): ?>

    <?php foreach ($channels as $key=>$value): ?>
    <li <?= $cur_channel['id']==$value['id'] ?'class="active"':'' ?>>
        <a href="/<?=$channel_code?>/index/<?=$value['id']?>"><?= $value['name'] ?></a>

        <div class="hr"></div>
    </li>
    <?php endforeach ?>

    <?php endif ?>
</ul>