<?php include $this->_include('member/header'); ?>
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
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
                    <th>原密码：</th>
                    <td><input name="data[password1]" type="password" class="input-text" value="" /></td>
                </tr>
                <tr>
                    <th>新密码：</th>
                    <td><input name="data[password2]" type="password" class="input-text" value="" /></td>
                </tr>
                <tr>
                    <th>确认密码：</th>
                    <td><input name="data[password3]" type="password" class="input-text" value="" /></td>
                </tr>
                <tr>
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