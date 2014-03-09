<ul class="nav-adcate clearfix">

    <?php foreach ($channels_2 as $key=>$value): ?>
    <li <?= $cur_channel_2['id']==$value['id'] ?'class="active"':'' ?>>
        <a href="/<?=$channel_code?>/index/14/0/<?=$value['id']?>"><?= $value['name'] ?></a>
    </li>

    <?php if($key>0): ?>
    <li class="spliter"><em></em></li>
    <?php endif ?>
    <?php endforeach ?>

</ul>

<?php if(!empty($pic_list) AND is_array($pic_list)): ?>

<?php $temp=0; $c=count($pic_list); ?>
<?php foreach ($pic_list as $key=>$value): ?>

<?php if($temp%5==0): ?>
<table class="nav-adcate-detail">
    <tbody>
        <tr>
<?php endif ?>
            
            <?php $temp++ ?>
            <td>
                <img alt="" src="<?= $value['filename'] ?>">
                <div><?= $value['title'] ?></div>
            </td>

<?php if($temp==5 || $key+1==$c): ?>
        </tr>
    </tbody>
</table>
<?php endif ?>

<?php endforeach ?>

<?php endif ?>

<div class="nav-adcate-desc">雅昌还与国内数十家研究、教育单位，行业协会建立了密切的技术、人才合作交流。</div>