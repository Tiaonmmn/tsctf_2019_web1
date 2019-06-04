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
		var url = "<?php echo url('admin/auth/del/'); ?>&roleid="+id;
		window.location.href=url;
	}
}
</script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<a href="<?php echo url('admin/auth/'); ?>" class="on"><em><?php echo lang('a-aut-7'); ?></em></a><span>|</span>
		<?php if (admin_auth($userinfo['roleid'], 'auth-add')) { ?><a href="<?php echo url('admin/auth/add'); ?>"><em><?php echo lang('a-aut-8'); ?></em></a><span>|</span><?php }  if (admin_auth($userinfo['roleid'], 'auth-cache')) { ?><a href="<?php echo url('admin/auth/cache'); ?>"><em><?php echo lang('a-cache'); ?></em></a><?php } ?>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<table width="100%">
		<thead>
		<tr>
			<th width="30">ID</th>
			<th width="150" align="left"><?php echo lang('a-name'); ?></th>
			<th width="250" align="left"><?php echo lang('a-desc'); ?></th>
			<th align="left"><?php echo lang('a-option'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
		<tr>
			<td align="center"><?php echo $t['roleid']; ?></td>
			<td align="left"><?php echo $t['rolename']; ?></td>
			<td align="left"><?php echo $t['description']; ?></td>
			<td align="left">
			<?php if (admin_auth($userinfo['roleid'], 'auth-list')) { ?><a href="<?php echo url('admin/auth/list',array('roleid'=>$t['roleid'])); ?>"><?php echo lang('a-aut-9'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'user-index')) { ?><a href="<?php echo url('admin/user/index',array('roleid'=>$t['roleid'])); ?>"><?php echo lang('a-aut-10'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'auth-edit')) { ?><a href="<?php echo url('admin/auth/edit',array('roleid'=>$t['roleid'])); ?>"><?php echo lang('a-edit'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'auth-del')) { ?><a href="javascript:del(<?php echo $t['roleid']; ?>);"><?php echo lang('a-del'); ?></a>  <?php } ?>
			</td>
		</tr>
		<?php } } ?>
		<tbody>
		</table>
	</div>
</div>
</body>
</html>