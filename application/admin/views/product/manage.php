<?php $this->
load->view('/common/header.php'); ?>
<div class="span10" id="content">
	<!-- content starts -->

	<?php $this->
	load->view('/common/nav.php'); ?>

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2> <i class="icon-user"></i>
					列表
				</h2>
				<div class="box-icon">
					<a class="btn btn-minimize btn-round" href="#">
						<i class="icon-chevron-up"></i>
					</a>
					<a class="btn btn-close btn-round" href="#">
						<i class="icon-remove"></i>
					</a>
				</div>
			</div>
			<div class="box-content">
				<div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper">
					<div class="row-fluid">
						<div class="span6">
							<div id="DataTables_Table_0_length" class="dataTables_length">
								<label>
									<select name="DataTables_Table_0_length" size="1" aria-controls="DataTables_Table_0">
										<option value="10" selected="selected">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select>
									records per page
								</label>
							</div>
						</div>
						<div class="span6">
							<div class="dataTables_filter" id="DataTables_Table_0_filter">
								<label>
									Search:
									<input type="text" aria-controls="DataTables_Table_0"></label>
							</div>
						</div>
					</div>
					<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
						<thead>
							<tr role="row">
								<th class="sorting_asc" rowspan="1" colspan="1" style="width: 199px;">标题</th>
								<th class="sorting" rowspan="1" colspan="1" style="width: 168px;">简介</th>
								<th class="sorting" rowspan="1" colspan="1" style="width: 90px;">所属</th>
								<th class="sorting" rowspan="1" colspan="1" style="width: 96px;">更新时间</th>
								<th class="sorting" rowspan="1" colspan="1" style="width: 366px;">操作</th>
							</tr>
						</thead>

						<tbody role="alert" aria-live="polite" aria-relevant="all">
							<tr class="odd">
								<td class="  sorting_1">Abdullah</td>
								<td class="center ">2012/02/01</td>
								<td class="center ">Staff</td>
								<td class="center ">
									<span class="label label-important">Banned</span>
								</td>
								<td class="center ">
									<a href="#" class="btn btn-success">
										<i class="icon-zoom-in icon-white"></i>
										View
									</a>
									<a href="#" class="btn btn-info">
										<i class="icon-edit icon-white"></i>
										Edit
									</a>
									<a href="#" class="btn btn-danger">
										<i class="icon-trash icon-white"></i>
										Delete
									</a>
								</td>
							</tr>
							<tr class="even">
								<td class="  sorting_1">Abraham</td>
								<td class="center ">2012/03/01</td>
								<td class="center ">Member</td>
								<td class="center ">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center ">
									<a href="#" class="btn btn-success">
										<i class="icon-zoom-in icon-white"></i>
										View
									</a>
									<a href="#" class="btn btn-info">
										<i class="icon-edit icon-white"></i>
										Edit
									</a>
									<a href="#" class="btn btn-danger">
										<i class="icon-trash icon-white"></i>
										Delete
									</a>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="row-fluid">
						<div class="span12">
							<div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div>
						</div>
						<div class="span12 center">
							<div class="dataTables_paginate paging_bootstrap pagination">
								<ul>
									<li class="prev disabled">
										<a href="#">上一页</a>
									</li>
									<li class="active">
										<a href="#">1</a>
									</li>
									<li>
										<a href="#">2</a>
									</li>
									<li>
										<a href="#">3</a>
									</li>
									<li>
										<a href="#">4</a>
									</li>
									<li class="next">
										<a href="#">下一页</a>
									</li>
								</ul>
							</div>
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