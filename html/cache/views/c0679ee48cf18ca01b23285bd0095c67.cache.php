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
		<a href="<?php echo url('admin/content/index', array('catid'=>$catid,'modelid'=>$modelid)); ?>" <?php if ($a=='index' && $recycle==0) { ?>class="on"<?php } ?>><em><?php echo lang('a-con-19'); ?>(<?php echo $total; ?>)</em></a><span>|</span>
		<a href="<?php echo url('admin/content/verify', array('catid'=>$catid,'status'=>3, 'modelid'=>$modelid)); ?>" <?php if ($status==3) { ?>class="on"<?php } ?>><em><?php echo lang('a-con-21'); ?>(<?php echo $count[1]; ?>)</em></a><span>|</span>
		<a href="<?php echo url('admin/content/verify', array('catid'=>$catid,'status'=>2, 'modelid'=>$modelid)); ?>" <?php if ($status==2) { ?>class="on"<?php } ?>><em><?php echo lang('a-con-22'); ?>(<?php echo $count[2]; ?>)</em></a><span>|</span>
		<a href="<?php echo url('admin/content/index', array('catid'=>$catid,'recycle'=>1, 'modelid'=>$modelid)); ?>" <?php if ($recycle==1) { ?>class="on"<?php } ?>><em><?php echo lang('a-con-23'); ?>(<?php echo $count[0]; ?>)</em></a><span>|</span>
		<?php if (admin_auth($userinfo['roleid'], 'content-add')) { ?><a href="<?php echo url('admin/content/add', array('catid'=>$catid,'modelid'=>$modelid)); ?>"><em><?php echo lang('a-con-24'); ?></em></a><?php } ?>
	</div>
	<div class="bk10"></div>
	<div class="explain-col">
		<form action="" method="post">
		<input name="form" type="hidden" value="search" />
		<?php echo lang('a-con-25'); ?>： 
		<select id="catid" name="catid">
			<option value="0"> ---- </option>
			<?php echo $category; ?>
		</select>
		&nbsp;&nbsp;
		<select name="stype">
			<option selected="" value="0"><?php echo lang('a-con-26'); ?></option>
			<option value="1"><?php echo lang('a-con-27'); ?></option>
			<option value="2"><?php echo lang('a-con-28'); ?></option>
		</select>
		<input type="text" class="input-text" size="25" name="kw" /><input type="submit" class="button" value="<?php echo lang('a-search'); ?>" name="submit" />
		</form>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" name="myform">
		<input name="form" id="list_form" type="hidden" value="order" />
		<table width="100%">
            <?php include $this->_include($tpl); ?>
		<tr>
			<td colspan="99" align="left">
			<input <?php if (!admin_auth($userinfo['roleid'], 'content-edit')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-order'); ?>" name="submit_order" onClick="$('#list_form').val('order')" <?php if ($a=='verify') { ?>disabled<?php } ?> />&nbsp;
			<input <?php if (($a=='index' && !admin_auth($userinfo['roleid'], 'content-del')) || ($a=='verify' && !admin_auth($userinfo['roleid'], 'content-delverify'))) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-del'); ?>" name="submit_del" onClick="$('#list_form').val('del');return confirm_del();" />&nbsp;
			<?php if ($a=='verify') { ?>
			<input <?php if (!admin_auth($userinfo['roleid'], 'content-verify')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-con-36'); ?>" name="submit_status_1" onClick="$('#list_form').val('status_1')" />&nbsp;
			<input <?php if (!admin_auth($userinfo['roleid'], 'content-verify')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-con-37'); ?>" name="submit_status_0" onClick="$('#list_form').val('status_0')" />&nbsp;
			<input <?php if (!admin_auth($userinfo['roleid'], 'content-verify')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-con-38'); ?>" name="submit_status_2" onClick="$('#list_form').val('status_2')" />&nbsp;
			<?php } else {  if ($recycle) { ?>
			<input <?php if (!admin_auth($userinfo['roleid'], 'content-edit')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-con-36'); ?>" name="submit_status_1" onClick="$('#list_form').val('status_1')" />&nbsp;
			<?php } else { ?>
			<input <?php if (!admin_auth($userinfo['roleid'], 'content-edit')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-con-39'); ?>" name="submit_status_3" onClick="$('#list_form').val('status_3')" />&nbsp;
			<?php } ?>
            <input <?php if (!admin_auth($userinfo['roleid'], 'content-weixin')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('dr008'); ?>" name="submit_status_5" onClick="$('#list_form').val('status_5')" />&nbsp;
			<?php echo lang('a-con-40'); ?>
			<select name="movecatid">
			<option value="0"> ---- </option>
			<?php echo $category; ?>
			</select>
			<input <?php if (!admin_auth($userinfo['roleid'], 'content-edit')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-con-41'); ?>" name="submit_move" onClick="$('#list_form').val('move')" />&nbsp;
			<?php } ?>
			</td>
		</tr>

        <?php if ($diy_file) { ?>
        <tr>
            <td colspan="99" align="left" style="font-size:12px">
                当前使用的是模型格式默认模板（views/admin/content_default.html），您可以将默认模板文件复制命名为（<?php echo $diy_file; ?>），这样方便您重新布局列表显示。
            </td>
        </tr>
        <?php } ?>
		</tbody>
		</table>
		<?php echo str_replace('<a>共' . $total . '条</a>', '<a>耗时' . runtime() . '秒</a><a>共' . $total . '条</a>', $pagelist); ?>
		</form>
	</div>
</div>
<script type="text/javascript">
$(function(){
    window.top.art.dialog({id:'clz'}).close();
	$('a').click(
		function(){
		    var clz = $(this).attr('clz');
			if (clz != '1') window.top.art.dialog({ id:'clz',title:'loading',fixed:true,lock:false,content: '<img src="<?php echo ADMIN_THEME; ?>images/onLoad.gif">' });
		}
	);
    $('input[type="submit"]').click(
		function(){
            var type = $(this).attr('name');
            if(type != 'submit_status_5')
                window.top.art.dialog({ id:'clz',title:'loading',fixed:true,lock:false,content: '<img src="<?php echo ADMIN_THEME; ?>images/onLoad.gif">' });
		}
	);
	if ($(document).width() <= 900) {
	    $('#s_title').css('width', '150px');
		$('#t_title').attr('width', '150');
	}
});
function confirm_del() {
    if (confirm('<?php echo lang('a-confirm'); ?>')) { 
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