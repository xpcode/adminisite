<?php $this->
load->view('/common/header.php'); ?>

<script>JS_PATH = 'channel/list';</script>

<div id="content" class="span10">
	<!-- content starts -->

	<div class="row-fluid">
		<div class="box span12">
			<div class="box-header well">
				<h2> <i class="icon-info-sign"></i>
					操作指南
				</h2>
			</div>
			<div class="box-content">
				</p>
				<p>
					1. 左侧‘<b>管理面板</b>’内容按照网站页面导航一一对应
				</p>
				<p>
					2. 各个频道的‘<b>子频道管理</b>’在当前页面管理
				</p>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<?php $this->load->view('/pic/banner.php'); ?>

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2> <i class="icon-user"></i>
					频道列表
				</h2>

				<?php if(isset($ischildren)): ?>
				<div class="pull-right">
					[<a href="/admin/channel/add/<?= $pid ?>">增加同级频道</a>]
					[<a href="/admin/main">返回上级列表</a>]
				</div>
				<?php endif ?>
			</div>
			<div class="box-content">
				<div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper">
					<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
						<thead>
							<tr role="row">
								<th class="sorting_asc" rowspan="1" colspan="1">频道名称</th>
								<th class="sorting" rowspan="1" colspan="1">频道显示顺序</th>
								<th class="sorting" rowspan="1" colspan="1">更新时间</th>
								<th class="sorting" rowspan="1" colspan="1">操作</th>
							</tr>
						</thead>

						<tbody role="alert" aria-live="polite" aria-relevant="all">
							<?php foreach ($channels as $key => $value): ?>
							<tr class="<?= $key%2==0 ? 'odd': 'even' ?>">
								<td class="  sorting_1"><?= $value['name'] ?></td>
								<td class="center "><?= $value['chorder'] ?></td>
								<td class="center "><?= $value['modify_datetime'] ?></td>
								<td class="center ">
									<a href="/admin/channel/add/<?= $value['id'] ?>">
										<i class="icon-edit icon-white"></i>
										增加子频道
									</a>
									<a href="/admin/channel/update/<?= $value['id'] ?>">
										<i class="icon-edit icon-white"></i>
										修改
									</a>
									<?php if($value['pid']>0): ?>
									<a data-action="delete" href="/admin/channel/delete/<?= $value['id'] ?>">
										<i class="icon-trash icon-white"></i>
										删除
									</a>
									<?php else: ?>
									<a href="/admin/main/index/<?= $value['id'] ?>">
										<i class="icon-zoom-in icon-white"></i>  
										进入子频道                                            
									</a>
									<?php endif ?>
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
	
	<?php $this->load->view('/article/manage.php'); ?>

	<!-- content ends -->
</div>

<?php $this->
load->view('/common/footer.php'); ?>