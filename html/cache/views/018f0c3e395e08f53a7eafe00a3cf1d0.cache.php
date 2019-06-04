<?php include $this->_include('member/header'); ?>
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dialog.js"></script>
<script type="text/javascript" src="<?php echo LANG_PATH; ?>lang.js"></script>
<script type="text/javascript">var sitepath = "<?php echo SITE_PATH;  echo ENTRY_SCRIPT_NAME; ?>";</script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/core.js"></script>
<!--Wrapper-->
<div id="wrapper">
	<div class="top"></div>
	<div class="center">
	    <div class="center_left">
	        <h3>资料信息</h3>
			<div class="menu_left">
			<ul>
            <?php if (is_array($navigation)) { $count=count($navigation);foreach ($navigation as $n=>$t) { ?>
                <li <?php if ($n==$a) { ?> class="on"<?php } ?>><a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></li>
            <?php } } ?>
			</ul>
			</div>
        </div>
		<div class="center_right">
            <div class="title_right1"></div>
			<div class="content_info">    
                <form action="" method="post">
                <table width="100%" class="table_form ">
                <tbody>
                <tr>
                    <th width="100">会员名称：</th>
                    <td><?php echo $memberinfo['username']; ?></td>
                </tr>
                <tr>
                    <th>安全邮箱：</th>
                    <td><?php echo $memberinfo['email']; ?></td>
                </tr>
                <tr>
                    <th>会员昵称：</th>
                    <td><input name="data[nickname]" type="text" class="input-text" value="<?php echo $memberinfo['nickname']; ?>" /></td>
                </tr>
                <tr>
                <?php echo $data_fields; ?>
                <tr>
                    <th style="border:none">&nbsp;</th>
                    <td style="border:none"><input type="submit" class="button" value="保 存" name="submit"></td>
                </tr>
                </tbody>
                </table>
                </form>
			</div>
        </div>
	</div>
    <div class="bottom"></div>
</div>
<!--Wrapper End-->
<?php include $this->_include('member/footer'); ?>