<?php $this->
load->view('/common/header.php'); ?>
<div class="banner mb50">
    <div class="container">
        <img src="/style/images/banner_news.gif" alt=""></div>
</div>
<div class="container">
    <div class="main mb112">
        <div class="clearfix">
            <div class="subnav pull-left">
                <h2>营销动态</h2>
                <div class="hr"></div>

                <?php $this->load->view('/common/subnav.php'); ?>

                <div class="telphone">
                    <div class="title">全国免费电话 :</div>
                    <div class="numbers">400-690-1016</div>
                </div>
            </div>
            <div class="content pull-left">
                <?php $this->load->view('/common/crumbs.php'); ?>

                <div class="article">
                        <h3 class="article-title"><?= $articleinfo['title'] ?></h3>
                        <div class="article-date"><?= date('Y-m-d', strtotime($articleinfo['modify_datetime'])) ?></div>
                        <hr class="article-hr">
                        <div class="article-content">
                            <?= $articleinfo['content'] ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php $this->
load->view('/common/footer.php'); ?>