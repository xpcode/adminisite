<?php $this->load->view('/common/header.php'); ?>

<div class="banner bg_EDEEE8 mb50">
    <div class="container">
        <?php $this->load->view('/common/banner.php'); ?>
    </div>
</div>

<script>JS_PATH = 'contact';</script>

<div class="container">
    <div class="main mb112">
        <div class="clearfix">
            <div class="subnav pull-left">
                <h2>业务联系</h2>
                <div class="hr"></div>
                
                <?php $this->load->view('/common/subnav.php'); ?>

                <div class="telphone">
                    <div class="title">全国免费电话 :</div>
                    <div class="numbers">400-690-1016</div>
                </div>
            </div>
            <div class="content pull-left">

                <?php $this->load->view('/common/crumbs.php'); ?>

                <div class="list-block non-border">
                    <h3 class="area-title"><?=$cur_channel['name']?></h3>
                    <?=$cur_channel['attrs']?>
                </div>

                <div class="list-block non-border">
                    <h4 class="types-title">项目洽谈</h4>

                    <?php $this->load->view('/contact/clist.php'); ?>

                </div>

            </div>
        </div>
    </div>
</div>

<?php $this->load->view('/common/footer.php'); ?>