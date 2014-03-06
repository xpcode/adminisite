<?php $this->load->view('/common/header.php'); ?>

<script>JS_PATH='product/list';</script>

<div class="span10" id="content">
	<!-- content starts -->

	<?php $this->load->view('/pic/banner.php'); ?>

	<br>

	<?php $this->load->view('/channel/bar.php'); ?>

	<?php if($cur_channel['ctype']==1): ?>
	
	<?php $this->load->view('/article/manage.php'); ?>

	<?php elseif($cur_channel['ctype']==2): ?>

	<?php $this->load->view('/pic/manage.php'); ?>
	
	<?php endif ?>

	<!-- content ends -->
</div>

<?php $this->load->view('/common/footer.php'); ?>