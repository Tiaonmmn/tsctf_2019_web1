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
		<a href="<?php echo url('admin/site/'); ?>"><em><?php echo lang('a-men-73'); ?></em></a><span>|</span>
		<a href="<?php echo url('admin/site/add'); ?>" class="on"><em><?php echo lang('a-sit-4'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post">
		<table width="100%" class="table_form">
		<tr>
			<th width="200"><?php echo lang('a-sit-5'); ?>： </th>
			<td><input class="input-text" type="text" name="data[name]" value="<?php echo $data['SITE_NAME']; ?>" size="25" required /></td>
		</tr>
		<tr>
			<th><?php echo lang('a-sit-6'); ?>： </th>
			<td><input class="input-text" type="text" name="data[url]" value="<?php echo $data['DOMAIN']; ?>" size="35" required />
			<div class="onShow"><?php echo lang('a-sit-10'); ?></div>
			</td>
		</tr>
		<tr>
			<th><?php echo lang('a-sit-11'); ?>： </th>
			<td><select name="data[siteid]" <?php if ($edit) { ?>disabled=""<?php } ?>>
			<option value=0> -- </option>
			<?php unset($site[$id]);  if (is_array($site)) { $count=count($site);foreach ($site as $id=>$t) {  if ($t['SITE_EXTEND_ID']==0) { ?><option value="<?php echo $id; ?>" <?php if ($id==$data['SITE_EXTEND_ID']) { ?> selected<?php } ?>> <?php echo $t['SITE_NAME']; ?> </option><?php }  } } ?>
			</select>
			<div class="onShow"><?php echo lang('a-sit-12'); ?></div>
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