<?php include $this->_include('member/header'); ?>
<script type="text/javascript">
function checkuser() {
	$('#err_username').html('');
	$.getJSON('<?php echo SITE_PATH;  echo ENTRY_SCRIPT_NAME; ?>?s=member&c=register&a=checkuser&id='+Math.random(), { username:$('#username').val()}, function(data){ 
		if (data.result==1) {
			$('#err_username').html(data.msg);
		} else {
			$('#err_username').html(data.msg);
		} 
	});
}
function checkemail() {
	$('#err_email').html('');
	$.getJSON('<?php echo SITE_PATH;  echo ENTRY_SCRIPT_NAME; ?>?s=member&c=register&a=checkemail&id='+Math.random(), { email:$('#email').val()}, function(data){ 
	   if (data.result==1) {
			$('#err_email').html(data.msg);
		} else {
			$('#err_email').html(data.msg);
		}
	});
}
function checkpass() {
	var pass1 = $('#password').val();
	var pass2 = $('#password2').val();
	if (pass1 != pass2) {
		$('#checkpassword2').html('<span>两次密码不一致</span>');
		$('#password').focus();
		return false;
	} else {
	    $('#checkpassword2').html('<span>正确</span>');
	}
}
</script>
<div id="wrapper">
	<div class="top"></div>
	<form method="post" action="" name="myform" id="myform">
	<div class="center1 password_management">
        <div class="title_r">会员注册</div>
        <div class="token_process">
            <ul>
            <?php if (count($membermodel)>1) { ?>
            <li>会员模型：<select name="data[modelid]" style="height:29px;"> <?php if (is_array($membermodel)) { $count=count($membermodel);foreach ($membermodel as $t) { ?><option value="<?php echo $t['modelid']; ?>" <?php if ($memberconfig['modelid']==$t['modelid']) { ?>selected<?php } ?>><?php echo $t['modelname']; ?></option><?php } } ?> </select>
            </li>
            <?php } ?>
            <li>会员账号：<input type="text" class="input_text" name="data[username]" id="username" onblur="checkuser()" />
            <span id="err_username" class="tips_info"></span>
            </li>
            <li>会员密码：<input type="password" class="input_text" name="data[password]" id="password"/>
            </li>
            <li>确认密码：<input type="password" class="input_text" name="data[password2]" id="password2" onblur="checkpass()" />
            <span id="checkpassword2" class="tips_info"></span>
            </li>
            <li>安全邮箱：<input type="text" class="input_text" onblur="checkemail()" name="data[email]" id="email" />
            <span id="err_email" class="tips_info"></span>
            </li>
            <?php if ($memberconfig['regcode']) { ?>
            <li>注册验证：<input type="text" class="input_text" name="code" style="width:100px" />
            <img id="code" src="<?php echo url("api/captcha/", array("width"=>100, "height"=>30)); ?>" align="absmiddle" title="看不清楚？换一张" onclick="document.getElementById('code').src='<?php echo url("api/captcha/", array("width"=>0, "height"=>30)); ?>&'+Math.random();" style="cursor:pointer; margin-top:-3px;">
            </li>
            <?php } ?>
            <li><input type="submit" value="注 册" class="btn" name="submit"/></li>
            </ul>
        </div>
    </div>
	</form>
    <div id="index_bottom"></div>
</div>
<?php include $this->_include('member/footer'); ?>