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
		<a href="<?php echo url('admin/theme/index')?>" class="on"><em><?php echo lang('a-men-47'); ?></em></a><span>|</span>
		<?php if (admin_auth($userinfo['roleid'], 'theme-add')) { ?><a href="<?php echo url('admin/theme/add', array('cpath'=>$cpath))?>"><em><?php echo lang('a-add'); ?></em></a><span>|</span><?php } ?>
		<a href="<?php echo url('admin/theme/cache')?>"><em><?php echo lang('a-cache'); ?></em></a><span>|</span>
        <a href="http://store.HXCMS.com/index.php?c=category&id=14" target="_blank"><em>在线模板</em></a>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<table width="100%" cellspacing="0" id="imgPreview">
		<tbody>
		<?php if ($istop) { ?>
		<tr>
			<td align="left"><a href="<?php echo $pdir; ?>"><img src="<?php echo ADMIN_THEME; ?>images/folder-closed.gif"><?php echo lang('a-att-5'); ?></a></td><td></td>
		</tr>
		<?php }  if (is_array($dlist)) { $count=count($dlist);foreach ($dlist as $k=>$t) { ?>
		<tr>
		    <td align="left">
			<input name="id" id="thumb_<?php echo $k; ?>" type="hidden" value="<?php echo $dir;  echo $t['name']; ?>">
			<img src="<?php echo $t['ico']; ?>"> &nbsp;<a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></td>
			<td width="70%">
			<?php if (admin_auth($userinfo['roleid'], 'theme-del')) { ?>
			&nbsp;<a href="javascript:;" onClick="if(confirm('<?php echo lang('a-confirm'); ?>')){ window.location.href='<?php echo url('admin/theme/del',array('name'=>$t['dir'])); ?>'; }" title="<?php echo lang('a-del'); ?>">×</a>
			<?php } ?>
			</td>
		</tr>
		<?php } }  if (is_array($flist)) { $count=count($flist);foreach ($flist as $k=>$t) { ?>
		<tr>
			<td align="left">
			<input name="id" id="thumb_<?php echo $k; ?>" type="hidden" value="<?php echo $dir;  echo $t['name']; ?>">
			<img src="<?php echo $t[ico]; ?>">
			<a href="<?php echo url('admin/theme/edit', array('dir'=>$t['dir'])); ?>"><?php echo $t['name']; ?></a></td>
			<td width="70%">
			<?php if (admin_auth($userinfo['roleid'], 'theme-del')) { ?>
			&nbsp;<a href="javascript:;" onClick="if(confirm('<?php echo lang('a-confirm'); ?>')){ window.location.href='<?php echo url('admin/theme/del',array('name'=>$t['dir'])); ?>'; }" title="<?php echo lang('a-del'); ?>">×</a>
			<?php } ?>
			</td>
		</tr>
		<?php } } ?>
		</tbody>
		</table>
	</div>
	<div class="bk10"></div>
</div>
</body>
</html>