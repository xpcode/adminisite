<div class="guide">
    <span class="font1">你想</span>
    <span class="font2">联系的...</span>
</div>
<div class="qalist-group h-auto-pb10">
    <div class="qalist-group-bg clearfix">

        <?php if(!empty($re_contact_list) AND is_array($re_contact_list)): ?>

        <?php foreach ($re_contact_list as $key=>$value): ?>

         <div class="qalist">
            <div class="qalistitem-title <?=$key>0?'ml25':''?>"><?= $value['project'] ?></div>
            <div class="qalist-item2 <?=$key>0?'ml25':''?>">业务接洽：<?= $value['name'] ?></div>
            <div class="qalist-item2 <?=$key>0?'ml25':''?>">
                <div>电话：<?= $value['tel'] ?></div>
                <div><?= $value['tel_2'] ?></div>
            </div>
            <div class="qalist-item2 <?=$key>0?'ml25':''?>">邮箱：<?= $value['email'] ?></div>
        </div>

        <?php endforeach ?>

        <?php endif ?>
        
    </div>
</div>