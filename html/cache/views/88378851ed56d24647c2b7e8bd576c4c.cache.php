<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo CMS_NAME; ?>网站管理系统 V<?php echo CMS_VERSION; ?> 安装向导</title>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_THEME; ?>../install/install.css" />
<script type="text/javascript">
function $(ID) {return document.getElementById(ID);}
</script>
</head>
<body>
<div class="width">
	<div class="m10">
    	<div class="logo"><span>安装成功</span><img src="<?php echo SITE_THEME; ?>../install/install.png" /></div>
        <div class="table">
        	<div class="left">
            	<div class="m10 f12">
                <p>非常感谢选择<?php echo CMS_NAME; ?>产品</p>
                <p>到这里，说明程序已经安装完成了，开始你的建站之旅吧。</p>
                <p>更多产品相关信息，敬请关注：</p>
                </div>
                 <div class="About">
                     <div class="ico_1"><a href="http://www.HXCMS.com/free/" target="_blank" >官网</a></div>
                     <div class="ico_2"><a href="http://www.dayrui.net" target="_blank" >论坛</a></div>
                 </div>
            </div>
            <div class="right">
            	<div class="m10 f12">
            	<p>网站后台地址：<a href="<?php echo url('admin'); ?>">点击进入后台管理中心</a></p>
                <p>管理员用户名：<font color="#0066FF"><?php echo $username;?></font></p>
                <p>管理员的密码：<font color="#FF0000"><?php echo $password;?> (请妥善保存)</font></p>
            </div>
            </div>
        </div>
		<div class="bnt">
			<input type="button" value="登录后台" class="n" onclick="window.location='<?php echo url('admin'); ?>';"/>
			<input type="button" value="网站首页" class="c" onclick="window.location='./';"/>
		</div>
    </div>
</div>
</body>
</html>
