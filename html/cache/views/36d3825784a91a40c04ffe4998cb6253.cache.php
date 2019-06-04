<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo ADMIN_THEME; ?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/switchbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<a href="<?php echo url('admin/ip'); ?>"><em><?php echo lang('a-men-67'); ?></em></a><span>|</span>
		<a href="<?php echo url('admin/ip/add'); ?>" class="on"><em><?php echo lang('a-add'); ?></em></a><span>|</span>
		<a href="<?php echo url('admin/ip/cache'); ?>"><em><?php echo lang('a-cache'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post">
		<input name="id" type="hidden" value="<?php echo $data['id']; ?>">
		<table width="100%" class="table_form">
		<tr>
			<th width="200">Ip： </th>
			<td><input class="input-text" type="text" name="data[ip]" value="<?php echo $data['ip']; ?>" style="width:168px" required />
			<div class="onShow"><?php echo lang('a-aip-11'); ?></div>
			</td>
		</tr>
		<tr>
			<th><?php echo lang('a-aip-2'); ?>： </th>
			<td><?php echo content_date('endtime', array(0=>$data['endtime'])); ?>
			<div class="onShow"><?php echo lang('a-aip-10'); ?></div>
			</td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td><input class="button" type="submit" name="submit" value="<?php echo lang('a-submit'); ?>" /></td>
		</tr>
		</table>
		</form>
	</div>
</div>
</body>
</html>