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
                <table border="0" cellpadding="0" cellspacing="0" class="datatable">
                    <thead>
                        <tr>
                            <td width="90">头像</td>
                            <td width="150">昵称</td>
                            <td width="140">绑定时间</td>
                            <td width="140">上次登录</td>
                            <td width="60">平台</td>
                            <td>操作</td>
                        </tr>
                    </thead>
                    <tbody>
                     <?php if (is_array($listdata)) { $count=count($listdata);foreach ($listdata as $t) { ?>
                      <tr>
                        <td><img src="<?php echo $t['avatar']; ?>"></td>
                        <td><?php echo $t['nickname']; ?></td>
                        <td><?php echo date("Y-m-d H:i:s", $t['addtime']); ?></td>
                        <td><?php if ($t['logintimes']) {  echo date("Y-m-d H:i:s", $t['logintimes']);  } else { ?>没有登录<?php } ?></td>
                        <td><?php echo $t['oauth_name']; ?></td>
                        <td><a href="<?php echo url("member/info/jie/", array("id"=>$t['id'])); ?>">解除绑定</a></td>
                      </tr>
                      <?php } } ?>
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