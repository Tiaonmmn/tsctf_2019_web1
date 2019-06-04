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
$(function(){
	
});

function confirm_del() {
    if (confirm('<?php echo lang('a-confirm'); ?>')) {
	    $('#load').show();
		return true; 
	} else {
	    return false;
	}
}
function setC() {
	if($("#deletec").attr('checked')) {
		$(".deletec").attr("checked",true);
	} else {
		$(".deletec").attr("checked",false);
	}
}
</script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<a href="<?php echo url('admin/site/'); ?>" class="on"><em><?php echo lang('a-men-73'); ?></em></a><span>|</span>
		<?php if (admin_auth($userinfo['roleid'], 'site-add')) { ?><a href="<?php echo url('admin/site/add'); ?>"><em><?php echo lang('a-sit-4'); ?></em></a><?php } ?>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" name="myform">
		<table width="100%">
		<thead>
		<tr>
			<th width="20" align="left"><input name="deletec" id="deletec" type="checkbox" onClick="setC()" /></th>
			<th width="20" align="left">ID </th>
			<th width="150" align="left"><?php echo lang('a-sit-5'); ?></th>
			<th width="250"  align="left"><?php echo lang('a-sit-6'); ?></th>
			<th align="left"><?php echo lang('a-option'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $id=>$t) { ?>
		<tr>
			<td align="left"><input name="ids[]" type="checkbox" value="<?php echo $id; ?>" <?php if ($id==1) { ?>disabled=""<?php } else { ?>class="deletec"<?php } ?> /></td>
			<td align="left"><?php echo $id; ?></td>
			<td align="left"><?php echo $t['SITE_NAME']; ?></td>
			<td align="left"><a href="http://<?php echo $t['DOMAIN'];  echo SITE_PATH; ?>" target="_blank">http://<?php echo $t['DOMAIN'];  echo SITE_PATH; ?></a></td>
			<td align="left">
			<?php if (admin_auth($userinfo['roleid'], 'site-edit')) { ?><a href="<?php echo url('admin/site/edit',array('id'=>$id)); ?>"><?php echo lang('a-edit'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'site-config')) { ?><a href="<?php echo url('admin/site/config',array('id'=>$id)); ?>"><?php echo lang('a-sit-7'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'site-del')) { ?><a <?php if ($id==1) { ?>href="javascript:;" style="color:#999999"<?php } else { ?>href="<?php echo url('admin/site/del',array('id'=>$id)); ?>"<?php } ?>><?php echo lang('a-del'); ?></a><?php } ?>
			</td>
		</tr>
		<?php } } ?>
		<tr>
			<td colspan="6" align="left"><input <?php if (!admin_auth($userinfo['roleid'], 'site-del')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-del'); ?>" name="submit" onclick="return confirm_del()" /></td>
		</tr>
		</tbody>
		</table>
		</form>
    </div>
</div>
</body>
</html>