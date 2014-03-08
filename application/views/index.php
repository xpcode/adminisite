<?php $this->load->view('/common/header.php'); ?>

<div class="banner bg_FFFFFF">
    <div class="container h320">
        <?php $this->load->view('/common/banner.php'); ?>
    </div>
</div>
<div class="main bg_grid">
    <div class="container">
        <div class="guide">
            <span class="font1">我们</span>
            <span class="font2">有的...</span>
        </div>
        <div class="pull-left w690">
            <div class="grid-group clearfix">
                <div class="grid">
                    <a href="/product/6"><img src="/style/images/index_r2_c2.gif" alt="广告宣传"></a></div>
                <div class="grid">
                    <a href="/product/2"><img src="/style/images/index_r2_c3.gif" alt="艺术导购"></a></div>
                <div class="grid">
                    <a href="/product/8"><img src="/style/images/index_r2_c4.gif" alt="拍卖预展"></a></div>
                <div class="grid">
                    <a href="/product/9"><img src="/style/images/index_r2_c5.gif" alt="地方分站"></a></div>
                <div class="grid">
                    <a href="/product/10"><img src="/style/images/index_r2_c9.gif" alt="艺术数据"></a></div>
                <div class="grid">
                    <a href="/product/11"><img src="/style/images/index_r2_c8.gif" alt="电子商务"></a></div>
                <div class="grid">
                    <a href="/product/12"><img src="/style/images/index_r2_c7.gif" alt="艺术宣传"></a></div>
                <div class="grid">
                    <a href="/product/13"><img src="/style/images/index_r2_c6.gif" alt="数字资产"></a></div>
            </div>
            <div class="guide">
                <span class="font1">你想</span>
                <span class="font2">知道的...</span>
            </div>
            <div class="qalist-group">
                <div class="qalist-group-bg clearfix">

                    <?php if(!empty($articles_qa_list)): ?>
                    <?php foreach ($articles_qa_list as $articles_qa): ?>
                        <?php if(!empty($articles_qa)): ?>

                        <?php foreach ($articles_qa as $key=>$value): ?>
                        <div class="qalist">
                            <?php if($key==0): ?>
                            <div class="qalistitem-title"><a href="/article/<?= $value['id'] ?>"><?= $value['title'] ?></a></div>
                            <?php else: ?>
                            <div class="qalist-item"><a href="/article/<?= $value['id'] ?>"><?= $value['title'] ?></a></div>
                            <?php endif ?>
                        </div>
                        <?php endforeach ?>

                        <?php endif ?>
                    <?php endforeach ?>
                    <?php endif ?>

                </div>
            </div>
            <div class="guide">
                <span class="font1">与我们</span>
                <span class="font2">合作的...</span>
            </div>
            <div class="icons-list clearfix">

                <?php if(!empty($cooperation_logos)): ?>
                <?php foreach ($cooperation_logos as $key=>$value): ?>
                <div class="icons-list-item">
                    <img src="<?= $value['filename'] ?>" alt=""></div>
                <?php endforeach ?>
                <?php endif ?>

            </div>
        </div>
        <div class="pull-right w280">
            <div class="tel">
                <img src="/style/images/index_tel.gif" alt=""></div>
            <div class="notice-block">
                <h3>
                    <img src="/style/images/bg_notice.gif" alt=""></h3>
                <ul>

                    <?php if(!empty($articles)): ?>
                    <?php foreach ($articles as $key=>$value): ?>
                    <li class="notice-block-item">
                        <a href=""><?= $value['title'] ?></a>
                    </li>
                    <?php endforeach ?>
                    <?php endif ?>

                </ul>
            </div>
            <div class="guide">
                <span class="font1">我们可以</span>
                <span class="font3">这样联系...</span>
            </div>
            <div class="contacts">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
            </div>
            <div>
                <img src="/style/images/index_r2.gif" alt=""></div>
        </div>
    </div>
</div>

<?php $this->load->view('/common/footer.php'); ?>