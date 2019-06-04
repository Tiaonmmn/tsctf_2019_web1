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
	<div class="content-menu ib-a blue line-x"style="padding:10px 0">
	    <a href="<?php echo url('admin/index/attack/'); ?>" class="on"><em><?php echo lang('a-men-66'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="explain-col">
		<form action="" method="post">
		IP：<input type="text" class="input-text" size="20" name="kw">
		&nbsp;&nbsp;
		<input type="submit" class="button" value="<?php echo lang('a-search'); ?>" name="submit">
		</form>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post">
		<table width="100%">
		<thead>
		<tr>
			<th width="130" align="left"><?php echo lang('a-time'); ?></th>
			<th width="50" align="left"><?php echo lang('a-aip-15'); ?></th>
			<th width="50" align="left"><?php echo lang('a-aip-16'); ?></th>
			<th width="100" align="left"><?php echo lang('a-aip-14'); ?></th>
			<th align="left"></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $k=>$t) {  		if ($t['ip'] && $ip && is_array($ip)) {
			if (isset($ip[$t['ip']]) && (empty($ip[$t['ip']]['endtime']) || ($ip[$t['ip']]['endtime'] - $ip[$t['ip']]['addtime']) >= 0)) {
				$t['attack'] = true;
			} else {
				foreach ($ip as $cip=>$test) {
					if (empty($cip) || strpos($cip, '*') === false) continue;
					$preg = '/^' . str_replace(array('*', '.'), array('[0-9]+', '\.'), $cip) . '$/';
					if (preg_match($preg, $t['ip'])) $t['attack'] = true;
				}
			}
		}
		?>
		<script type="text/javascript">
		function view_<?php echo $k; ?>() {
			var content = "<style>.table-list td,.table-list th{ padding-left:12px; font-weight:normal;}.table-list thead th{ height:30px; background:#eef3f7; border-bottom:1px solid #d5dfe8; font-weight:normal}.table-list tbody td,.table-list .btn{ border-bottom: #eee 1px solid; padding-top:5px; padding-bottom:5px}</style><table width='630' border='0' cellpadding='1' cellspacing='0' class='table-list'><tr><td width='10%' align=right><?php echo lang('a-aip-13'); ?></td><td width='90%'>&nbsp;<?php echo date(TIME_FORMAT, $t['time']); ?></td></tr><tr><td align=right><?php echo lang('a-aip-14'); ?></td><td>&nbsp;<a href='http://www.baidu.com/baidu?wd=<?php echo $t['ip']; ?>' target=_blank><?php echo $t['ip']; ?></a></td></tr><?php if ($t['attack']) { ?><tr><td align=right><?php echo lang('a-aip-5'); ?></td><td>&nbsp;<font color=red><?php echo lang('a-aip-20'); ?></font></td></tr><?php } ?><tr><td align=right><?php echo lang('a-aip-15'); ?></td><td>&nbsp;<?php echo $t['uid']; ?></td></tr><tr><td align=right><?php echo lang('a-aip-16'); ?></td><td>&nbsp;<?php echo $t['type']; ?></td></tr><tr><td align=right><?php echo lang('a-aip-17'); ?></td><td>&nbsp;<?php echo htmlspecialchars($t['val']); ?></td></tr><tr><td align=right><?php echo lang('a-aip-19'); ?></td><td>&nbsp;<?php echo htmlspecialchars($t['url']); ?></td></tr><tr><td align=right><?php echo lang('a-aip-18'); ?></td><td>&nbsp;<?php echo $t['user']; ?></td></tr></table>";
			window.top.art.dialog({title:'<?php echo lang('a-men-66'); ?>',fixed:true, content: content,width:700});
		}
		</script>
		<tr height="25">
			<td align="left"><?php echo date(TIME_FORMAT, $t['time']); ?></td>
			<td align="left"><?php echo $t['uid']; ?></td>
			<td align="left"><?php echo $t['type']; ?></td>
			<td align="left"><a href="<?php echo url('admin/index/attack', array('ip'=>$t['ip'])); ?>"><?php echo $t['ip']; ?></a></td>
			<td align="left"><a href="javascript:view_<?php echo $k; ?>();"><?php echo strcut(htmlspecialchars($t['url']), 50); ?></a></td>
		</tr>
		<?php } } ?>
		<tr height="25">
			<td colspan="8" align="left"><input type="button" class="button" value="<?php echo lang('a-ind-44'); ?>" name="submit_order" onClick="window.location.href='<?php echo url('admin/index/clearattack/'); ?>'">
			<div class="onShow"><?php echo lang('a-ind-45'); ?></div></td>
		</tr>
		</table>
		<?php echo $pagelist; ?>
		</form>
	</div>
</div>
</body>
</html>