<?php $this->
load->view('/common/header.php'); ?>

<script>JS_PATH = 'contact/list';</script>

<div id="content" class="span10">
	<!-- content starts -->

	<div>
		<ul class="breadcrumb clearfix">
			<li>所属频道：</li>
			<li>
				<?php if($cur_channel['id'] == 0): ?>
				<strong>所有频道</strong>
				<?php else: ?>
				<a href="/admin/contact">所有频道</a>
				<?php endif ?>
			</li>
			<?php foreach ($channels as $key => $value): ?>
			<li>
				<span class="divider">|</span>
				<?php if($cur_channel['id'] == $value['id']): ?>
				<strong><?= $value['name'] ?></strong>
				<?php else: ?>
				<a href="/admin/contact/index/<?= $value['id'] ?>"><?= $value['name'] ?></a>
				<?php endif ?>
			</li>
			<?php endforeach ?>
		</ul>
	</div>

	<?php $this->load->view('/pic/banner.php'); ?>

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2> <i class="icon-user"></i>
					联系人列表
				</h2>

				<div class="pull-right">
					[<a href="/admin/contact/add">添加联系人</a>]
				</div>
			</div>
			<div class="box-content">
				<div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper">
					<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
						<thead>
							<tr role="row">
								<th class="sorting" rowspan="1" colspan="1">联系人所属公司或部门</th>
								<th class="sorting_asc" rowspan="1" colspan="1">联系人姓名</th>
								<th class="sorting" rowspan="1" colspan="1">电话</th>
								<th class="sorting" rowspan="1" colspan="1">邮箱</th>
								<th class="sorting" rowspan="1" colspan="1">更新时间</th>
								<th class="sorting" rowspan="1" colspan="1">操作</th>
							</tr>
						</thead>

						<tbody role="alert" aria-live="polite" aria-relevant="all">
							<?php foreach ($contacts as $key => $value): ?>
							<tr class="<?= $key%2==0 ? 'odd': 'even' ?>">
								<td class="  sorting_1"><?= $value['project'] ?></td>
								<td class="  sorting_1"><?= $value['name'] ?></td>
								<td class="center "><?= $value['tel'] ?></td>
								<td class="center "><?= $value['email'] ?></td>
								<td class="center "><?= $value['modify_datetime'] ?></td>
								<td class="center ">
									<a href="/admin/contact/update/<?= $value['id'] ?>">
										<i class="icon-edit icon-white"></i>
										修改
									</a>
									<a data-action="delete" href="/admin/contact/delete/<?= $value['id'] ?>">
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