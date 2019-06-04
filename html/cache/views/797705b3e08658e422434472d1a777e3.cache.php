<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $meta_title; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
<link href="<?php echo SITE_THEME; ?>member/images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
</head>
<body>
<!--Header-->
<div id="headerAll">
	<div id="header">
    	<div id="top">
		    <a class="logo" href="<?php echo SITE_PATH; ?>" ><cite>会员中心</cite></a>
        	<div class="right_info">
            <ul>
            <?php if ($memberinfo) { ?>
            <li>欢迎您，<a href="<?php echo url('member/space/', array('userid'=>$memberinfo['id'])); ?>"><?php if ($memberinfo['nickname']) {  echo $memberinfo['nickname'];  } else {  echo $memberinfo['username'];  } ?></a></li>
            <li><a href="<?php echo url('member/content/'); ?>">管理</a></li>
			<li><a href="<?php echo url('member/pms/inbox'); ?>">消息</a></li>
			<li><a href="<?php echo url('member/login/out'); ?>">退出</a></li>
            <?php } else { ?>
            <li><a href="<?php echo url('member/register'); ?>">注册</a></li>
            <li><a href="<?php echo url('member/login'); ?>">登录</a></li>
            <?php } ?>
            </ul>
            </div>
        </div>
    	<div id="menu">
        	<ul>
            <?php if ($memberinfo) { ?>
            <li><a href="<?php echo url('member'); ?>"><span>会员首页</span></a></li>
			<li><a href="<?php echo url('member/info/edit/'); ?>"><span>资料信息</span></a></li>
			<li><a href="<?php echo url('member/content/'); ?>"><span>内容管理</span></a></li>
			<li><a href="<?php echo url('member/pms/inbox'); ?>"><span>短消息</span></a></li>
            <?php if (plugin('pay')) { ?><li><a href="<?php echo url('pay/member'); ?>"><span>资金管理</span></a></li><?php }  if (plugin('shop')) { ?><li><a href="<?php echo url('shop/member'); ?>"><span>购物管理</span></a></li><?php } ?>
			<li><a href="<?php echo url('member/login/out'); ?>"><span>安全退出</span></a></li>
			<?php } else { ?>
			<li><a href="<?php echo SITE_PATH; ?>"><span>首页</span></a></li>
			<?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==0 && $t['ismenu']) { ?>
			<li><a href="<?php echo $t['url']; ?>"><span><?php echo $t['catname']; ?></span></a></li>
			<?php }  } }  } ?>
            </ul>
        </div>
    </div>
</div>
<!--Header End-->