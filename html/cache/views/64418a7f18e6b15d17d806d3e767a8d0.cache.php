<?php include $this->_include('header'); ?>
	<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dialog.js"></script>
	<script type="text/javascript">var sitepath = "<?php echo SITE_PATH;  echo ENTRY_SCRIPT_NAME; ?>";</script>
    <script type="text/javascript" src="<?php echo LANG_PATH; ?>lang.js"></script>
	<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/core.js"></script>


<div id="breadcrumb">
	<!-- breadcrumb starts-->
	<div class="container">
		<div class="one-half">
			<h4><?php echo $form_name; ?></h4>
		</div>
		<div class="one-half">
			<nav id="breadcrumbs">
				<!--breadcrumb nav starts-->
				<ul>
					<li>您当前位置：</li>
					<li><a  href="<?php echo SITE_PATH; ?>">首页</a> > <?php if ($joindata && $joindata['typeid'] == 1) { ?><!--表示关联的内容模型-->
						<?php echo catpos($cdata['catid'], ' &gt;&nbsp;&nbsp;'); ?> &gt;&nbsp;&nbsp;<a href="<?php echo $cdata['url']; ?>"><?php echo $cdata['title']; ?></a> &gt;&nbsp;&nbsp;
						<?php }  echo $form_name; ?> </li>
				</ul>
			</nav>
			<!--breadcrumb nav ends -->
		</div>
	</div>
</div>


<div id="content">
<div class="container">
	<div class="one">
		<!--begin-->
		<div class="piclist">
			<div class="item-list">
				<form action="<?php echo url('form/post',array('modelid'=>$modelid, 'cid'=>$cid)); ?>" method="post">
				<table width="100%" class="table_form ">
				<?php echo $fields;  if ($code) { ?>
				<tr>
					<th>验证码：</th>
					<td><input name="code" type="text" class="input-text" size=10 /><img src="<?php echo url('api/captcha', array('width'=>80,'height'=>25)); ?>" align="absmiddle"></td>
				</tr>
				<?php } ?>
				<tr>
					<th width="100" style="border:none">&nbsp;</th>
					<td style="border:none"><input type="submit" class="button" value="提 交" name="submit"></td>
				</tr>
				</table>
				</form>
			</div>
		</div>
		<!--end-->
	</div>
</div>
</div>
<?php include $this->_include('footer'); ?>