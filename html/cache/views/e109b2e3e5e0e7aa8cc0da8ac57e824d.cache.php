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
		<a href="<?php echo url('admin/member/group/'); ?>" class="on"><em><?php echo lang('a-mem-30'); ?></em></a><span>|</span>
		<a href="<?php echo url('admin/member/group/', array('type'=>'add')); ?>"><em><?php echo lang('a-add'); ?></em></a><span>|</span>
		<a href="<?php echo url('admin/member/group/', array('type'=>'cache')); ?>"><em><?php echo lang('a-cache'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" name="myform">
		<input name="form" id="list_form" type="hidden" value="order">
		<table width="100%">
		<thead>
		<tr>
			<th width="20" align="right"><input name="deletec" id="deletec" type="checkbox" onClick="setC()" /></th>
			<th width="33" align="left"><?php echo lang('a-order'); ?></th>
			<th width="90" align="left"><?php echo lang('a-name'); ?></th>
			<th width="55" align="center"><?php echo lang('a-mem-76'); ?></th>
			<th width="55" align="center"><?php echo lang('a-mem-77'); ?></th>
			<th width="55" align="center"><?php echo lang('a-mem-78'); ?></th>
			<th width="55" align="center"><?php echo lang('a-mem-79'); ?></th>
			<th width="80" align="center"><?php echo lang('a-mem-80'); ?></th>
			<th width="80" align="center"><?php echo lang('a-mem-81'); ?></th>
			<th width="80" align="center"><?php echo lang('a-mem-125'); ?></th>
			<th align="left"><?php echo lang('a-option'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
		<tr height="25">
			<td align="right"><input name="del_<?php echo $t['id']; ?>" type="checkbox" class="deletec"></td>
			<td align="left"><input type="text" name="order_<?php echo $t['id']; ?>" class="input-text" style="width:25px;margin:none;" value="<?php echo $t['listorder']; ?>" /></td>
			<td align="left"><?php echo $t['name']; ?></td>
			<td align="center"><?php echo $t['credits']; ?></td>
			<td align="center"><?php echo $t['allowpost']; ?></td>
			<td align="center"><?php echo $t['allowpms']; ?></td>
			<td align="center"><?php if (empty($t['filesize'])) {  echo lang('a-mem-82');  } else {  echo $t['filesize']; ?>MB<?php } ?></td>
			<td align="center"><?php echo $t['allowattachment'] ? "<font color=green>√</font>" : "<font color=red>×</font>" ?></td>
			<td align="center"><?php echo $t['auto'] ? "<font color=red>×</font>" : "<font color=green>√</font>" ?></td>
			<td align="center"><?php echo !$t['postverify'] ? "<font color=red>×</font>" : "<font color=green>√</font>" ?></td>
			<td align="left"><?php $del = url('admin/member/group/',array('type'=>'delete','id'=>$t['id']));?>
			<a href="<?php echo url('admin/member/group',array('type'=>'edit','id'=>$t['id'])); ?>"><?php echo lang('a-edit'); ?></a> | 
			<a href="javascript:;" onClick="if(confirm('<?php echo lang('a-confirm'); ?>')){ window.location.href='<?php echo $del; ?>'; }"><?php echo lang('a-del'); ?></a>
			</td>
		</tr>
		<?php } } ?>
		<tr height="25">
			<td colspan="9" align="left"> 
			<input type="submit" class="button" value="<?php echo lang('a-del'); ?>" name="submit_del" onClick="$('#list_form').val('del');return confirm_del()" />&nbsp;
			<input type="submit" class="button" value="<?php echo lang('a-order'); ?>" name="submit_order" onClick="$('#list_form').val('order')" />&nbsp;
			</td>
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
function confirm_del() {
    if (confirm('<?php echo lang('a-confirm'); ?>')) { 
	    document.myform.submit();
		return true; 
	} else {
	    return false;
	}
}
</script>
</body>
</html>