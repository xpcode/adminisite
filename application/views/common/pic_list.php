<div class="imgblock-list clearfix">

    <?php if(!empty($pic_list) AND is_array($pic_list)): ?>

    <?php foreach ($pic_list as $key=>$value): ?>

    <div class="imgblock-list-item">
        <img alt="" src="<?= $value['filename'] ?>">
        <div>
            <a target="_blank" href="<?= $value['url'] ?>"><?= $value['title'] ?></a>
        </div>
    </div>

    <?php endforeach ?>

    <?php endif ?>
    
</div>