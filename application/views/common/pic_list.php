<div class="imgblock-list clearfix">

    <?php if(!empty($pic_list) AND is_array($pic_list)): ?>

    <?php foreach ($pic_list as $key=>$value): ?>

    <div class="imgblock-list-item">
        <img alt="" src="<?= $values['filename'] ?>">
        <div>
            <a><?= $values['title'] ?></a>
        </div>
    </div>

    <?php endforeach ?>

    <?php endif ?>
    
</div>