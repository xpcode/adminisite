<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div data-original-title="" class="box-header well">
			<h2> <i class="icon-user"></i>
				文章列表
			</h2>

			<div class="pull-right">
				<?php if($cur_channel['id']==7): ?>
				[<a href="/admin/<?=$cur_channel['code']?>/add/<?=$cur_channel['id']?>">添加文章</a>]
				<?php else: ?>
				[<a href="/admin/<?=$cur_channel['code']?>/add">添加文章</a>]
				<?php endif ?>
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
						<?php foreach ($articles as $key => $value): ?>
						<tr class="<?= $key%2==0 ? 'odd': 'even' ?>">
							<td class="  sorting_1" style="width:30%"><?= $value['title'] ?></td>
							<td class="center " style="width:40%"><?= $value['intro'] ?></td>
							<td class="center "><?= $value['modify_datetime'] ?></td>
							<td class="center ">
								<a href="/admin/<?=$cur_channel['code']?>/update/<?= $value['id'] ?>">
									<i class="icon-edit icon-white"></i>
									修改
								</a>
								<a data-action="delete" href="/admin/<?=$cur_channel['code']?>/delete/<?= $value['id'] ?>">
									<i class="icon-trash icon-white"></i>
									删除
								</a>
								<a data-action="recommend" href="/admin/<?=$cur_channel['code']?>/recommend/<?= $value['id'] ?>">
									<i class="icon-trash icon-white"></i>
									<?php if($value['recommend']==0): ?>
									推荐到首页
									<?php else: ?>
									取消推荐
									<?php endif ?>
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