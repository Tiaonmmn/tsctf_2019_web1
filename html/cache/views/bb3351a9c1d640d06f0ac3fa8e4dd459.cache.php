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
<script type="text/javascript" src="<?php echo LANG_PATH; ?>lang.js"></script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<a href="<?php echo url('admin/ip'); ?>" class="on"><em><?php echo lang('a-men-67'); ?></em></a><span>|</span>
		<?php if (admin_auth($userinfo['roleid'], 'ip-add')) { ?><a href="<?php echo url('admin/ip/add'); ?>"><em><?php echo lang('a-add'); ?></em></a><span>|</span><?php } ?>
		<a href="<?php echo url('admin/ip/cache'); ?>"><em><?php echo lang('a-cache'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="explain-col">
		<form action="" method="post">
		Ip：<input type="text" class="input-text" size="20" name="kw" />
		&nbsp;&nbsp;
		<input type="submit" class="button" value="<?php echo lang('a-search'); ?>" name="submit" />&nbsp;&nbsp;
		</form>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" name="myform">
		<table width="100%">
		<thead>
		<tr>
			<th width="20" align="right"><input name="deletec" id="deletec" type="checkbox" onClick="setC()" /></th>
			<th width="120" align="left">Ip</th>
			<th width="130" align="left"><?php echo lang('a-aip-3'); ?></th>
			<th width="130" align="left"><?php echo lang('a-aip-4'); ?></th>
			<th align="left"><?php echo lang('a-aip-5'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
		<tr >
			<td align="right"><input name="del_<?php echo $t['id']; ?>" type="checkbox" class="deletec" /></td>
			<td align="left"><a href="<?php echo url('admin/ip/edit', array('id'=>$t['id'])); ?>"><?php echo $t['ip']; ?></a></td>
			<td align="left"><?php echo date(TIME_FORMAT, $t['addtime']); ?></td>
			<td align="left"><?php if ($t['endtime']) {  echo date(TIME_FORMAT, $t['endtime']);  } ?></td>
			<td align="left"><?php if ($t['endtime']) {  $time=round(($t['endtime']-$t['addtime'])/(3600)); echo $time>0?$time . lang('a-aip-12') : lang('a-aip-7');  } else {  echo lang('a-aip-9');  } ?></td>
		</tr>
		<?php } } ?>
		<tr >
		    <td colspan="9" align="left"> <input <?php if (!admin_auth($userinfo['roleid'], 'ip-del')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-del'); ?>" name="submit_del" />&nbsp;</td>
		</tr>
		</table>
		<?php echo $pagelist; ?>
		</form>
	</div>
</div>
<script type="text/javascript">
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