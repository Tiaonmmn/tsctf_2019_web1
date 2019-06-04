<?php $meta_title='提示信息';  include $this->_include('member/header'); ?>
<!--Wrapper-->
<div id="wrapper">
	<div class="top"></div>
	<div class="center1" style="height: 200px;min-height: 200px">
		<div class="title_r"><b>提示信息</b></div>
		<div class="pm_index" style="text-align:center;padding:50px 0 50px 0;">
                <h3 class="message-title" <?php if ($result) { ?> style=" color:#000"<?php } else { ?> style=" color: #F00"<?php } ?>><?php echo $msg; ?></h3>
                <?php if ($url) { ?>
                <p class="message-intro">
                     <a href="<?php echo $url; ?>">如果您的浏览器没有自动跳转，请点击这里</a>
                     <meta http-equiv="refresh" content="<?php echo $time; ?>; url=<?php echo $url; ?>">
                </p>
                <?php } ?>
                <p class="message-action">
                    <a class="back" href="javascript:history.go(-1)">后退到上一页</a> |
                    <a class="forward" href="<?php echo SITE_PATH; ?>">前往首页</a>
                </p>
		</div>
	</div>
    <div class="bottom"></div>
</div>
<!--Wrapper End-->
<?php include $this->_include('member/footer'); ?>