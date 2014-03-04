<?php $this->load->view('/common/header.php'); ?>

<script>JS_PATH='product/list';</script>

<div class="span10" id="content">
	<!-- content starts -->

	<?php $this->load->view('/channel/bar.php'); ?>

	<?php $this->load->view('/pic/banner.php'); ?>

	<?php $this->load->view('/article/manage.php'); ?>

	<!-- content ends -->
</div>

<?php $this->load->view('/common/footer.php'); ?>