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

<table class="nav-adcate-detail">
    <tbody>
        <tr><td>
            <img alt="" src="/style/images/case_ad_01.gif">
            <div>中国艺术科技研究院</div>
        </td>
        <td>
            <img alt="" src="/style/images/case_ad_01.gif">
            <div>中国印刷标准委员会</div>
        </td>
        <td>
            <img alt="" src="/style/images/case_ad_01.gif">
            <div>北京印刷学院</div>
        </td>
        <td>
            <img alt="" src="/style/images/case_ad_01.gif">
            <div>武汉大学</div>
        </td>
        <td>
            <img alt="" src="/style/images/case_ad_01.gif">
            <div>西安理工大学</div>
        </td>
    </tr></tbody>
</table>
<div class="nav-adcate-desc">雅昌还与国内数十家研究、教育单位，行业协会建立了密切的技术、人才合作交流。</div>