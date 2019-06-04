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
    	<div class="logo"><span>数据配置</span><img src="<?php echo SITE_THEME; ?>../install/install.png" /></div>
        <iframe id="db_tester" name="db_tester" style="display:none;"></iframe>
		<form action="<?php echo url('install/'); ?>" method="post" id="db_form" target="db_tester">
			<input type="hidden" name="step" value="db_test"/>
			<input type="hidden" name="tdb_host" id="tdb_host"/>
			<input type="hidden" name="tdb_user" id="tdb_user"/>
			<input type="hidden" name="tdb_pass" id="tdb_pass"/>
			<input type="hidden" name="tdb_name" id="tdb_name"/>
			<input type="hidden" name="ttb_pre"  id="ttb_pre"/>
			<input type="hidden" name="ttb_test" id="ttb_test"/>
		</form>
		<div class="set">
			<form action="<?php echo url('install/'); ?>" method="post" id="dform" onsubmit="return check();">
			<input type="hidden" name="step" value="5"/>
			<div class="left">
				<li>数据服务器</li>
				<li>数据库帐号</li>
				<li>数据库密码</li>
				<li>数据库名称</li>
				<li>数据表前缀</li>
				<li>管理员户名</li>
				<li>管理员密码</li>
			</div>
			<div class="right">
				<li><input name="db_host" type="text" id="db_host" value="localhost" class="on" onblur="this.className='on'" onfocus="this.className='in'"/><span>通常为localhost或服务器IP地址</span></li>
				<li><input name="db_user" type="text" id="db_user" value="" class="on" onblur="this.className='on'" onfocus="this.className='in'"/><span>数据库用户名</span></li>
				<li><input name="db_pass" type="text" id="db_pass" value="" class="on" onblur="this.className='on'" onfocus="this.className='in'"/><span>数据库密码</li>
				<li><input name="db_name" type="text" id="db_name" value="" onblur="$('ttb_test').value=0;test();void(0);" class="on" onblur="this.className='on'" onfocus="this.className='in'"/><span>数据库名称，如不了解请联系你的空间商</li>
				<li><input name="tb_pre" type="text" id="tb_pre" value="fn_" class="on" onblur="this.className='on'" onfocus="this.className='in'"/><span><input type="button" value="测试数据库连接" onclick="$('ttb_test').value=1;test();void(0);" class="n"/></span><span id="tip" style="color:blue;display:none;">安装正在进行，请稍候...</span></li>
				<li><input name="username" type="text" id="username" value="admin" class="on" onblur="this.className='on'" onfocus="this.className='in'"/><span>只能使用小写字母(a-z)、数字(0-9)</span></li>
				<li><input name="password" type="text" id="password" value="admin" class="on" onblur="this.className='on'" onfocus="this.className='in'"/><span class="red"><input name="import" type="checkbox" id="checkbox" value="1" checked align="bottom"/>安装演示数据(首次使用推荐安装)</span></li>
			</div>
		</div>
		<div class="bnt">
			<input type="button" value="上一步" class="n" onclick="history.back(-1);"/>
			<input type="submit" value="下一步" class="n" id="submit"/>
			<input type="button" value="取消" class="c" onclick="if(confirm('您确定要退出安装向导吗？')) window.close();"/>
		</div>
		</form>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
function test() {
	if($('db_host').value == '') {
		alert('请填写数据库服务器');
		$('db_host').focus();
		return;
	}
	$('tdb_host').value = $('db_host').value;

	if($('db_user').value == '') {
		alert('请填写数据库用户名');
		$('db_user').focus();
		return;
	}
	$('tdb_user').value = $('db_user').value;
	$('tdb_pass').value = $('db_pass').value;

	if($('db_name').value == '') {
		alert('请填写数据库名');
		$('db_name').focus();
		return;
	}
	$('tdb_name').value = $('db_name').value;

	if($('tb_pre').value == '') {
		alert('请填写数据表前缀');
		$('tb_pre').focus();
		return;
	}
	$('ttb_pre').value = $('tb_pre').value;
	$('db_form').submit();
}
function check() {
	if($('db_host').value == '') {
		alert('请填写数据库服务器');
		$('db_host').focus();
		return false;
	}

	if($('db_user').value == '') {
		alert('请填写数据库用户名');
		$('db_user').focus();
		return false;
	}

	if($('db_name').value == '') {
		alert('请填写数据库名');
		$('db_name').focus();
		return false;
	}

	if($('tb_pre').value == '') {
		alert('请填写数据表前缀');
		$('tb_pre').focus();
		return false;
	}

	if($('username').value.length < 4) {
		alert('超级管理员户名最少4位');
		$('username').focus();
		return false;
	}

	if(!$('username').value.match(/^[a-z0-9]+$/)) {
		alert('超级管理员户名只能使用小写字母(a-z)、数字(0-9)');
		$('username').focus();
		return false;
	}

	if($('password').value.length < 4) {
		alert('超级管理员密码最少4位');
		$('password').focus();
		return false;
	}
	
	$('tip').style.display = '';
	$('submit').disabled = true;
	return true;
}
</script>