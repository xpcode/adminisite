<?php $this->
load->view('/common/header.php'); ?>

<script>JS_PATH='article/list';</script>

<div class="span10" id="content">
	<!-- content starts -->

	<div>
		<ul class="breadcrumb clearfix">
			<li>所属频道：</li>
			<li>
				<?php if($cur_channel_id == 0): ?>
				<strong>所有频道</strong>
				<?php else: ?>
				<a href="/admin/product">所有频道</a>
				<?php endif ?>
			</li>
			<?php foreach ($channels as $key => $value): ?>
			<li>
				<span class="divider">|</span>
				<?php if($cur_channel_id == $value['id']): ?>
				<strong><?= $value['name'] ?></strong>
				<?php else: ?>
				<a href="/admin/product/index/<?= $value['id'] ?>"><?= $value['name'] ?></a>
				<?php endif ?>
			</li>
			<?php endforeach ?>
		</ul>
	</div>

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2> <i class="icon-user"></i>
					文章列表
				</h2>

				<div class="pull-right">
					[<a href="/admin/product/add">添加文章</a>]
				</div>
			</div>
			<div class="box-content">
				<div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper">
					<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
						<thead>
							<tr role="row">
								<th class="sorting" rowspan="1" colspan="1">文章标题</th>
								<th class="sorting_asc" rowspan="1" colspan="1">简介</th>
								<th class="sorting" rowspan="1" colspan="1">更新时间</th>
								<th class="sorting" rowspan="1" colspan="1">操作</th>
							</tr>
						</thead>

						<tbody role="alert" aria-live="polite" aria-relevant="all">
							<?php foreach ($contacts as $key => $value): ?>
							<tr class="<?= $key%2==0 ? 'odd': 'even' ?>">
								<td class="  sorting_1"><?= $value['title'] ?></td>
								<td class="center "><?= $value['intro'] ?></td>
								<td class="center "><?= $value['modify_datetime'] ?></td>
								<td class="center ">
									<a href="/admin/product/update/<?= $value['id'] ?>">
										<i class="icon-edit icon-white"></i>
										修改
									</a>
									<a data-action="delete" href="/admin/product/delete/<?= $value['id'] ?>">
										<i class="icon-trash icon-white"></i>
										删除
									</a>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<div class="row-fluid">
						<div class="span12 center">
							<?= $pagination ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/span-->

	</div>

	<!-- content ends -->
</div>

<?php $this->
load->view('/common/footer.php'); ?>