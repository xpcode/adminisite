<?php $this->load->view('/common/header.php'); ?>
<div class="banner mb50">
    <div class="container">
        <?php $this->load->view('/common/banner.php'); ?>
    </div>
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

                <?php if(!empty($rtext_list) AND is_array($rtext_list)): ?>

				<?php foreach ($rtext_list as $key=>$value): ?>

                <div class="list-block">
                    <div class="list-item-large clearfix">
                        <div class="pull-left article-img-small">
                            <img width="396" height="132" alt="" src="<?= $value['img'] ?>"></div>
                        <div class="pull-right w295px">
                            <h4 class="article-title-small"><?= $value['title'] ?></h4>
                            <div class="article-content-small">
                                <?= $value['intro'] ?>
                                <a class="more" href="">更多信息</a>
                            </div>
                            <div class="article-date-small"><?= $value['modify_datetime'] ?></div>
                        </div>
                    </div>
                </div>

                <?php endforeach ?>

                <?php endif ?>

                <?php if(!empty($pagination)): ?>

                <?= $pagination ?>

                <?php endif ?>

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('/common/footer.php'); ?>