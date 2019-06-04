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
function del(id) {
	if(confirm('<?php echo lang('a-mod-16'); ?>')){
		var url = "<?php echo url('admin/model/del/',array('typeid'=>$typeid)); ?>&modelid="+id;
		window.location.href=url;
	}
}
function cdisabled(id, c) {
    if (c == 1) {
		var url = "<?php echo url('admin/model/cdisabled/',array('typeid'=>$typeid)); ?>&modelid="+id;
		window.location.href=url;
		return true;
	}
	if (confirm('<?php echo lang('a-mod-17'); ?>')) {
		var url = "<?php echo url('admin/model/cdisabled/',array('typeid'=>$typeid)); ?>&modelid="+id;
		window.location.href=url;
	}
}
</script>
<title>admin</title>
</head>
<body>
<form action="" method="post">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<a href="<?php echo url('admin/model/index',  array('typeid'=>$typeid)); ?>" class="on"><em><?php echo lang('a-aut-14'); ?></em></a><span>|</span>
		<?php if (admin_auth($userinfo['roleid'], 'model-add')) { ?><a href="<?php echo url('admin/model/add', array('typeid'=>$typeid)); ?>"><em><?php echo lang('a-add'); ?></em></a><span>|</span><?php }  if (admin_auth($userinfo['roleid'], 'model-import')) { ?><a href="<?php echo url('admin/model/import', array('typeid'=>$typeid)); ?>"><em><?php echo lang('a-import'); ?></em></a><span>|</span><?php }  if (admin_auth($userinfo['roleid'], 'model-cache')) { ?><a href="<?php echo url('admin/model/cache', array('typeid'=>$typeid)); ?>"><em><?php echo lang('a-cache'); ?></em></a><?php } ?>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<table width="100%">
			<thead>
			<tr>
				<th width="30" align="left">ID</th>
				<th width="70" align="left"><?php echo lang('a-mod-18'); ?></th>
				<th width="60" align="left"><?php echo lang('a-name'); ?></th>
				<th width="150" align="left"><?php echo lang('a-mod-19'); ?></th>
				<th align="left"><?php echo lang('a-option'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) {  $setting=string2array($t['setting']);$disable = isset($setting['disable']) && $setting['disable'] == 1 ? 1 : 0; ?>
			<tr>
				<td align="left"><?php echo $t['modelid']; ?></td>
				<td align="left"><?php echo $typename[$t['typeid']]; ?></td>
				<td align="left"><?php echo $t['modelname']; ?></td>
				<td align="left"><?php echo preg_replace('/\_([0-9]+)\_/', '_' . $siteid . '_', $t['tablename']); ?></td>
				<td align="left">
				<?php if (admin_auth($userinfo['roleid'], 'model-fields')) { ?><a href="<?php echo url('admin/model/fields/',array('typeid'=>$typeid, 'modelid'=>$t['modelid'])); ?>"><?php echo lang('a-aut-18'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'model-edit')) { ?><a href="<?php echo url('admin/model/edit',array('typeid'=>$typeid,'modelid'=>$t['modelid'])); ?>"><?php echo lang('a-edit'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'model-cdisabled')) { ?><a href="javascript:cdisabled(<?php echo $t['modelid']; ?>, <?php echo $disable; ?>);"><?php if ($disable) { ?><font color=red><?php echo lang('a-qi'); ?></font><?php } else {  echo lang('a-jin');  } ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'model-export')) { ?><a href="<?php echo url('admin/model/export',array('typeid'=>$typeid, 'modelid'=>$t['modelid'])); ?>"><?php echo lang('a-export'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'model-del')) { ?><a href="javascript:del(<?php echo $t['modelid']; ?>);"><?php echo lang('a-del'); ?></a> <?php } ?>
				</td>
			</tr>
			<?php } } ?>
			<tbody>
		</table>
	</div>
</div>
</body>
</html>