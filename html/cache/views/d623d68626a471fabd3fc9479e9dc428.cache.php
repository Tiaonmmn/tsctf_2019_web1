<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo ADMIN_THEME; ?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/switchbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="content-menu ib-a blue line-x" style="padding-top:8px">
		<a class="on" href="<?php echo url('admin/index/bq'); ?>"><em><?php echo lang('dr003'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post">
		<table width="100%" class="table_form">
		<tr>
			<th width="200">程序名称： </th>
			<td><input class="input-text" type="text" name="data[cms]" value="<?php echo $data[cms]; ?>" size="30"/></td>
		</tr>

            <tr>
                <th width="200">版本名称： </th>
                <td><input class="input-text" type="text" name="data[name]" value="<?php echo $data[name]; ?>" size="30"/></td>
            </tr>
            <tr>
                <th width="200">版权所有： </th>
                <td><input class="input-text" type="text" name="data[company]" value="<?php echo $data[company]; ?>" size="50"/></td>
            </tr>
		<tr>
			<th>&nbsp;</th>
			<td><input class="button" type="submit" name="submit" value="<?php echo lang('a-submit'); ?>" /></td>
		</tr>
		</table>
		</form>
	</div>
</div>
<script type="text/javascript">
function add_menu() {
    var data = '<tr><td width="140"><?php echo lang('a-name'); ?>：<input class="input-text" type="text" name="menu[name][]" value="" size="10"/></td><td><?php echo lang('a-address'); ?>：<input class="input-text" type="text" name="menu[url][]" size="50"/></td><td>&nbsp;</td></tr>';
	$('#menu_body').append(data);
}
</script>
</body>
</html>