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
<script type="text/javascript">
function del(id){
	if(confirm('<?php echo lang('a-confirm'); ?>')){
		var url = "<?php echo url('admin/user/del/'); ?>&userid="+id;
		window.location.href=url;
	}
}
</script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<a href="<?php echo url('admin/user/'); ?>" class="on"><em><?php echo lang('a-use-5'); ?></em></a><span>|</span>
		<?php if (admin_auth($userinfo['roleid'], 'user-add')) { ?><a href="<?php echo url('admin/user/add'); ?>"><em><?php echo lang('a-use-6'); ?></em></a><?php } ?>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<table width="100%">
		<thead>
		<tr>
			<th width="20" align="left">ID</th>
			<th width="130" align="left"><?php echo lang('a-user'); ?></th>
			<th width="100" align="left"><?php echo lang('a-use-7'); ?></th>
			<th width="120" align="left"><?php echo lang('a-sit-21'); ?></th>
			<th width="120" align="left"><?php echo lang('a-use-8'); ?></th>
			<th width="120" align="left"><?php echo lang('a-use-9'); ?></th>
			<th align="left"><?php echo lang('a-option'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
		<tr>
			<td align="left"><?php echo $t['userid']; ?></td>
			<td align="left"><?php echo $t['username']; ?> (<?php echo $t['realname']; ?>)</td>
			<td align="left"><?php echo $t['rolename']; ?></td>
			<td align="left"><?php if ($t['site']) {  echo $sites[$t['site']]['SITE_NAME'];  } else {  echo lang('a-sit-22');  } ?></td>
			<td align="left"><a href="http://www.baidu.com/baidu?wd=<?php echo $t['lastloginip']; ?>" target=_blank><?php echo $t['lastloginip']; ?></a></td>
			<td align="left"><?php echo date(TIME_FORMAT,$t['lastlogintime']); ?></td>
			<td align="left">
			<?php if (admin_auth($userinfo['roleid'], 'user-edit')) { ?><a href="<?php echo url('admin/user/edit',array('userid'=>$t['userid'])); ?>"><?php echo lang('a-edit'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'user-del')) { ?><a href="javascript:del(<?php echo $t['userid']; ?>);"><?php echo lang('a-del'); ?></a> <?php } ?>
			</td>
		</tr>
		<?php } } ?>
		<tbody>
		</table>
	</div>
</div>
</body>
</html>