<div class="imgblock-list clearfix">


    <?php 
    function getChaBetweenTwoDate($date1,$date2){

        $Date_List_a1=explode("-",$date1);
        $Date_List_a2=explode("-",$date2); 
     
        $d1=mktime(0,0,0,$Date_List_a1[1],$Date_List_a1[2],$Date_List_a1[0]); 
     
        $d2=mktime(0,0,0,$Date_List_a2[1],$Date_List_a2[2],$Date_List_a2[0]); 
     
        $Days=round(($d1-$d2)/3600/24); 
     
        return $Days;
    }
    ?>

    <?php if(!empty($pic_list) AND is_array($pic_list)): ?>

    <?php foreach ($pic_list as $key=>$value): ?>

    <div class="imgblock-list-item">
        <img alt="" src="<?= $value['filename'] ?>">

        <?php if(!empty($value['filename_sub'])): ?>
        <img alt="" class="att" style="display:none" src="<?= $value['filename_sub'] ?>">
        <?php endif ?>
        
        <div class="clearfix" style="text-align:left;">
            <a target="_blank" href="<?= $value['url'] ?>"><?= $value['title'] ?></a>
            <span class="img-title pull-right">
                <?php if(!empty($value['filename_down'])): ?>
                <a href="<?= $value['filename_down'] ?>" target='_blank'>刊例价<em></em></a>
                <?php endif ?>
            </span>
        </div>

        <?php
            $now = date('Y-m-d');
            $modify_datetime = date('Y-m-d', strtotime($value['modify_datetime']));

            if(!empty($value['filename_down']) AND getChaBetweenTwoDate($now, $modify_datetime)<=5):
        ?>
        <div style="text-align:right;padding:0;color:#999;font-size:12px;height:12px;line-height:12px;">
            <?= $modify_datetime ?> 更新
        </div>
        <?php endif ?>

    </div>

    <?php endforeach ?>

    <?php endif ?>
    
</div>