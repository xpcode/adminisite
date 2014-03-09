<?php $this->load->view('/common/header.php'); ?>

<div class="banner bg_F4A814 mb50">
    <div class="container">
        <?php $this->load->view('/common/banner.php'); ?>
    </div>
</div>

<script>JS_PATH = 'mcase';</script>

<div class="container">
    <div class="main mb112">
        <div class="clearfix">
            <div class="subnav pull-left">
                <h2>案例展示</h2>
                <div class="hr"></div>
                
                <?php $this->load->view('/common/subnav.php'); ?>

                <div class="telphone">
                    <div class="title">全国免费电话 :</div>
                    <div class="numbers">400-690-1016</div>
                </div>
            </div>
            <div class="content pull-left">
                <?php $this->load->view('/common/crumbs.php'); ?>

                <?php if($cur_channel['id']==14 AND !empty($channels_2) AND !empty($cur_channel_2)): ?>
                
                <?php $this->load->view('/mcase/sp_detail.php'); ?>

                <?php else: ?>

                <div class="list-block non-border">
                    <?php if($cur_channel['ctype']==1): ?>
                    
                    <h3 class="area-title"><?= $cur_channel['name'] ?></h3>

                    <?php $this->load->view('/common/rtext_list.php'); ?>

                	<?php elseif($cur_channel['ctype']==2): ?>

                	<?php $this->load->view('/common/pic_list.php'); ?>
                	
                	<?php endif ?>

                </div>

                <?php if(!empty($pagination)): ?>
                <?= $pagination ?>
                <?php endif ?>

                <?php endif ?>

            </div>
        </div>
    </div>
</div>

<?php $this->load->view('/common/footer.php'); ?>