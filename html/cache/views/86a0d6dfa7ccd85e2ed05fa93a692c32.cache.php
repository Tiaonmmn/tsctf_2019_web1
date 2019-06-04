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
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dialog.js"></script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<a href="<?php echo url('admin/member/pms/'); ?>" class="on"><em><?php echo lang('a-mem-57'); ?></em></a><span>|</span>
		<a href="<?php echo url('admin/member/pms/', array('type'=>'send')); ?>"><em><?php echo lang('a-mem-58'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" name="myform">
		<table width="100%">
		<thead>
		<tr>
			<th width="20" align="right"><input name="deletec" id="deletec" type="checkbox" onClick="setC()"></th>
			<th width="330" align="left"><?php echo lang('a-mem-59'); ?></th>
			<th width="80" align="left"><?php echo lang('a-mem-60'); ?></th>
			<th width="90" align="left"><?php echo lang('a-mem-61'); ?></th>
			<th width="155" align="left"><?php echo lang('a-mem-62'); ?></th>
			<th align="left"><?php echo lang('a-mem-63'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
		<tr height="25">
			<td align="right"><input name="ids[]" type="checkbox" class="deletec" value="<?php echo $t[id]; ?>"></td>
			<td align="left"> <a href="<?php echo url('admin/member/pms',array('type'=>'show','id'=>$t['id'])); ?>"><?php echo $t['title']; ?></a></td>
			<td align="left"><?php echo $t['sendname']; ?></td>
			<td align="left"><?php echo $t['toname']; ?></td>
			<td align="left"><?php echo date(TIME_FORMAT, $t['sendtime']); ?></td>
			<td align="left"><?php echo $t['isadmin'] ? lang('a-mem-64') : lang('a-mem-65'); ?></td>
		</tr>
		<?php } } ?>
		<tr height="25">
			<td colspan="5" align="left"> 
			<input type="submit" class="button" value="<?php echo lang('a-del'); ?>" name="submit" onclick="return confirm_del()">&nbsp;
			</td>
		</tr>
		</table>
		<?php echo $pagelist; ?>
		</form>
	</div>
</div>
<script type="text/javascript">
function confirm_del() {
    if (confirm('<?php echo lang('a-confirm'); ?>')) { 
	    document.myform.submit();
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
</body>
</html>