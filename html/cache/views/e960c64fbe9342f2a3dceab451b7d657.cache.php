<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo ADMIN_THEME; ?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
<title>admin</title>
    <style>
        .pp  p{
            line-height:35px;
        }
    </style>
</head>
<body style="font-weight: normal;">
<div class="subnav">
<div class="table-list">
	<form method="post" action="" id="myform" name="myform">
	<div class="pad-10">
		<div class="col-tab">
			<ul class="tabBut cu-li">
				<li onClick="SwapTab('setting','on','',7,1);" id="tab_setting_1" class="<?php if ($type==1) { ?>on<?php } ?>"><?php echo lang('a-men-65'); ?></li>
				<li onClick="SwapTab('setting','on','',7,2);" id="tab_setting_2" class="<?php if ($type==2) { ?>on<?php } ?>"><?php echo lang('a-men-14'); ?></li>
				<li onClick="SwapTab('setting','on','',7,3);" id="tab_setting_3" class="<?php if ($type==3) { ?>on<?php } ?>"><?php echo lang('a-men-15'); ?></li>
				<li onClick="SwapTab('setting','on','',7,4);" id="tab_setting_4" class="<?php if ($type==4) { ?>on<?php } ?>"><?php echo lang('a-men-16'); ?></li>
				<li onClick="SwapTab('setting','on','',7,5);" id="tab_setting_5" class="<?php if ($type==5) { ?>on<?php } ?>"><?php echo lang('a-men-17'); ?></li>
				<li onClick="SwapTab('setting','on','',7,6);" id="tab_setting_6" class="<?php if ($type==6) { ?>on<?php } ?>"><?php echo lang('t-003'); ?></li>
				<li onClick="SwapTab('setting','on','',7,7);" id="tab_setting_7" class="<?php if ($type==7) { ?>on<?php } ?>"><?php echo lang('t-008'); ?></li>
			</ul>
			<div class="contentList pad-10 hidden" id="div_setting_7" style="display: none;">
				<table width="100%" class="table_form">
					<tbody>
					<tr>
						<th width="327px"><?php echo $string['SITE_COMMENT_SWITCH']; ?>：</th>
						<td ><input name="data[SITE_COMMENT]" type="radio" value="true" <?php if ($data['SITE_COMMENT']) { ?>checked<?php } ?>> <?php echo lang('a-open'); ?>
							&nbsp;&nbsp;&nbsp;<input name="data[SITE_COMMENT]" type="radio" value="false" <?php if ($data['SITE_COMMENT']==false) { ?>checked<?php } ?>> <?php echo lang('a-close'); ?>
							&nbsp;&nbsp;&nbsp;<div class="onShow"><?php echo lang('a-con-ex-com'); ?></div></td>
					</tr>
					</tbody>
				</table>
			</div>

			<div class="contentList pad-10 hidden" id="div_setting_6" style="display: none;">
            <table width="100%" class="table_form">
				<tbody>
					<tr>
						<th width="200"><?php echo $string['SYS_MODE']; ?>： </th>
						<td class="pp">
							<p>
							<input name="data[SYS_MODE]" type="radio" value="0" <?php if ($data['SYS_MODE']==0) { ?>checked<?php } ?>> <?php echo lang('t-004'); ?>
							</p>
							<p><input name="data[SYS_MODE]" type="radio" value="1" <?php if ($data['SYS_MODE']==1) { ?>checked<?php } ?>> <?php echo lang('t-005'); ?> </p>
							<p><input name="data[SYS_MODE]" type="radio" value="2" <?php if ($data['SYS_MODE']==2) { ?>checked<?php } ?>> <?php echo lang('t-006'); ?> </p>
						</td>
					</tr>
					<tr>
						<th> </th>
						<td class="pp"><div style="margin-left:-3px" class="onShow"><?php echo lang('t-007'); ?></div></td>
					</tr>
				</tbody>
            </table>
            </div>

			<div class="contentList pad-10 hidden" id="div_setting_1" style="display: none;">
			<table width="100%" class="table_form">
			<tbody>
				<tr>
					<th><?php echo $string['SITE_ADMINLOG']; ?>： </th>
					<td><input name="data[SITE_ADMINLOG]" type="radio" value="true" <?php if ($data['SITE_ADMINLOG']) { ?>checked<?php } ?>> <?php echo lang('a-open'); ?>
					&nbsp;&nbsp;&nbsp;<input name="data[SITE_ADMINLOG]" type="radio" value="false" <?php if ($data['SITE_ADMINLOG']==false) { ?>checked<?php } ?>> <?php echo lang('a-close'); ?>
					&nbsp;&nbsp;&nbsp;<div class="onShow"><?php echo lang('a-ind-104'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo $string['SYS_ILLEGAL_CHAR']; ?>： </th>
					<td><input name="data[SYS_ILLEGAL_CHAR]" type="radio" value="true" <?php if ($data['SYS_ILLEGAL_CHAR']) { ?>checked<?php } ?>> <?php echo lang('a-open'); ?> 
					&nbsp;&nbsp;&nbsp;<input name="data[SYS_ILLEGAL_CHAR]" type="radio" value="false" <?php if ($data['SYS_ILLEGAL_CHAR']==false) { ?>checked<?php } ?>> <?php echo lang('a-close'); ?>
					&nbsp;&nbsp;&nbsp;<div class="onShow"><?php echo lang('a-ind-105'); ?></div></td>
				</tr>
                <tr>
                    <th><?php echo $string['SYS_MEMBER']; ?>： </th>
                    <td><input name="data[SYS_MEMBER]" type="radio" value="true" <?php if ($data['SYS_MEMBER']) { ?>checked<?php } ?>> <?php echo lang('a-open'); ?>
                        &nbsp;&nbsp;&nbsp;<input name="data[SYS_MEMBER]" type="radio" value="false" <?php if ($data['SYS_MEMBER']==false) { ?>checked<?php } ?>> <?php echo lang('a-close'); ?>
                        &nbsp;&nbsp;&nbsp;<div class="onShow"><?php echo lang('t-001'); ?></div></td>
                </tr>
				<tr>
					<th><?php echo $string['SYS_ATTACK_LOG']; ?>： </th>
					<td><input name="data[SYS_ATTACK_LOG]" type="radio" value="true" <?php if ($data['SYS_ATTACK_LOG']) { ?>checked<?php } ?> onclick="$('#atmaill').show();"> <?php echo lang('a-open'); ?> 
					&nbsp;&nbsp;&nbsp;<input name="data[SYS_ATTACK_LOG]" type="radio" value="false" <?php if ($data['SYS_ATTACK_LOG']==false) { ?>checked<?php } ?> onclick="$('#atmaill').hide();"> <?php echo lang('a-close'); ?>
					&nbsp;&nbsp;&nbsp;<div class="onShow"><?php echo lang('a-ind-106'); ?></div></td>
				</tr>
				<tr id="atmaill" <?php if (empty($data['SYS_ATTACK_LOG'])) { ?>style="display:none"<?php } ?>>
					<th><?php echo $string['SYS_ATTACK_MAIL']; ?>： </th>
					<td><input name="data[SYS_ATTACK_MAIL]" type="radio" value="true" <?php if ($data['SYS_ATTACK_MAIL']) { ?>checked<?php } ?>> <?php echo lang('a-yes'); ?> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="data[SYS_ATTACK_MAIL]" type="radio" value="false" <?php if ($data['SYS_ATTACK_MAIL']==false) { ?>checked<?php } ?>> <?php echo lang('a-no'); ?>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="onShow"><?php echo lang('a-ind-107'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo $string['SITE_ADMIN_CODE']; ?>： </th>
					<td><input name="data[SITE_ADMIN_CODE]" type="radio" value="true" <?php if ($data['SITE_ADMIN_CODE']) { ?>checked<?php } ?>> <?php echo lang('a-open'); ?> 
					&nbsp;&nbsp;&nbsp;<input name="data[SITE_ADMIN_CODE]" type="radio" value="false" <?php if ($data['SITE_ADMIN_CODE']==false) { ?>checked<?php } ?>> <?php echo lang('a-close'); ?>
					&nbsp;&nbsp;&nbsp;<div class="onShow"><?php echo lang('a-ind-108'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo $string['SITE_ADMIN_PAGESIZE']; ?>： </th>
					<td><input class="input-text" type="text" name="data[SITE_ADMIN_PAGESIZE]" value="<?php if (isset($data['SITE_ADMIN_PAGESIZE'])) {  echo $data['SITE_ADMIN_PAGESIZE'];  } else { ?>8<?php } ?>" style="width:86px" />
					&nbsp;&nbsp;&nbsp;<div class="onShow"><?php echo lang('a-ind-109'); ?></div></td>
				</tr>
			    <tr>
					<th><?php echo lang('a-cfg-3'); ?>： </th>
					<td><input class="input-text" type="text" name="data[SITE_SYSMAIL]" value="<?php echo $data['SITE_SYSMAIL']; ?>" size="30"/><div class="onShow"><?php echo $string['SITE_SYSMAIL']; ?></div>
					</td>
				</tr>
			    <tr>
					<th><?php echo $string['SYS_GEE_CAPTCHA_ID']; ?>： </th>
					<td><input class="input-text" type="text" name="data[SYS_GEE_CAPTCHA_ID]" value="<?php echo $data['SYS_GEE_CAPTCHA_ID']; ?>" size="50"/>
					</td>
				</tr>
			    <tr>
					<th><?php echo $string['SYS_GEE_PRIVATE_KEY']; ?>： </th>
					<td><input class="input-text" type="text" name="data[SYS_GEE_PRIVATE_KEY]" value="<?php echo $data['SYS_GEE_PRIVATE_KEY']; ?>" size="50"/>
					</td>
				</tr>
			</tbody>   
			</table>
			</div>

			<div class="contentList pad-10 hidden" id="div_setting_2" style="display: none;">
			<table width="100%" class="table_form">
				<tbody>
				<tr>
					<th width="200"><?php echo lang('a-ind-57'); ?>：</th>
					<td class="y-bg">
					 <input type="radio" <?php if ($data['SITE_MAIL_TYPE']==1) { ?> checked=""<?php } ?> onClick="showsmtp(this)" value="1" checkbox="mail_type" name="data[SITE_MAIL_TYPE]"> <?php echo lang('a-ind-58'); ?>   
					 <input type="radio" <?php if ($data['SITE_MAIL_TYPE']==0) { ?> checked=""<?php } ?> onClick="showsmtp(this)" value="0" checkbox="mail_type" name="data[SITE_MAIL_TYPE]" <?php if(substr(strtolower(PHP_OS), 0, 3) == 'win') echo 'disabled'; ?>> <?php echo lang('a-ind-59'); ?> 
					</td>
				</tr>
				</tbody>
				<tbody style="<?php if ($data['SITE_MAIL_TYPE']==0) { ?>display:none<?php } ?>" id="smtpcfg">
				<tr>
					<th><?php echo lang('a-ind-60'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_MAIL_SERVER']; ?>" size="30" id="mail_server" name="data[SITE_MAIL_SERVER]" class="input-text"></td>
				</tr>  
				<tr>
					<th><?php echo lang('a-ind-61'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_MAIL_PORT']; ?>" size="30" id="mail_port" name="data[SITE_MAIL_PORT]" class="input-text"></td>
				</tr> 
				<tr>
					<th><?php echo lang('a-ind-62'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_MAIL_FROM']; ?>" size="30" id="mail_from" name="data[SITE_MAIL_FROM]" class="input-text"></td>
				</tr>   
				<tr>
					<th><?php echo lang('a-ind-63'); ?>：</th>
					<td class="y-bg">
					<input type="radio" <?php if ($data['SITE_MAIL_AUTH']==1) { ?>checked=""<?php } ?> value="1" id="mail_auth" name="data[SITE_MAIL_AUTH]"> <?php echo lang('a-open'); ?>	
					<input type="radio" <?php if ($data['SITE_MAIL_AUTH']==0) { ?>checked=""<?php } ?> value="0" id="mail_auth" name="data[SITE_MAIL_AUTH]"> <?php echo lang('a-close'); ?></td>
				</tr> 
				<tr>
					<th><?php echo lang('a-ind-64'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_MAIL_USER']; ?>" size="30" id="mail_user" name="data[SITE_MAIL_USER]" class="input-text"></td>
				</tr> 
				<tr>
					<th><?php echo lang('a-ind-65'); ?>：</th>
					<td class="y-bg"><input type="password" value="<?php echo $data['SITE_MAIL_PASSWORD']; ?>" size="30" id="mail_password" name="data[SITE_MAIL_PASSWORD]" class="input-text"></td>
				</tr>
				</tbody>
				<tbody>
				<tr>
					<th><?php echo lang('a-ind-66'); ?>：</th>
					<td class="y-bg"><input type="text" value="" size="30" id="mail_to" name="mail_to" class="input-text"> 
					<input type="button" value="<?php echo lang('a-ind-67'); ?>" onClick="javascript:test_mail();" class="button"></td>
				</tr>           
				</tbody>
			</table>
			</div>

			<div class="contentList pad-10 hidden" id="div_setting_3" style="display: none;">
			<table width="100%" class="table_form">
				<tbody>
				<tr>
					<th width="200"><?php echo lang('a-ind-68'); ?>： </th>
					<td class="y-bg">
					 <input type="text" value="<?php echo $data['SITE_MAP_UPDATE']; ?>" size="10" name="data[SITE_MAP_UPDATE]" class="input-text">
					<div class="onShow"><?php echo $string['SITE_MAP_UPDATE']; ?></div>
					</td>
				</tr>
				</tbody>
				<tr>
					<th><?php echo lang('a-ind-69'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_MAP_TIME']; ?>" size="10" name="data[SITE_MAP_TIME]" class="input-text">
					<div class="onShow"><?php echo $string['SITE_MAP_TIME']; ?></div></td>
				</tr>  
				<tr>
					<th><?php echo lang('a-ind-70'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_MAP_NUM']; ?>" size="10" name="data[SITE_MAP_NUM]" class="input-text">
					<div class="onShow"><?php echo $string['SITE_MAP_NUM']; ?></div></td>
				</tr> 
				<tr>
					<th><?php echo lang('a-ind-71'); ?>：</th>
					<td class="y-bg">
					<input type="radio" <?php if ($data['SITE_MAP_AUTO']==true) { ?> checked=""<?php } ?> value="true" checkbox="auto" name="data[SITE_MAP_AUTO]"> <?php echo lang('a-open'); ?>    
					&nbsp;&nbsp;
					<input type="radio" <?php if ($data['SITE_MAP_AUTO']==false) { ?> checked=""<?php } ?> value="false" checkbox="auto" name="data[SITE_MAP_AUTO]"> <?php echo lang('a-close'); ?> 
					<div class="onShow"><?php echo $string['SITE_MAP_AUTO']; ?></div></td>
				</tr>   
			</table>
			</div>

			<div class="contentList pad-10 hidden" id="div_setting_4" style="display: none;">
			<table width="100%" class="table_form">
				<tr>
					<th width="200"><?php echo lang('a-ind-72'); ?>： </th>
					<td><input class="input-text" type="text" name="data[SITE_SEARCH_PAGE]" value="<?php echo $data['SITE_SEARCH_PAGE']; ?>" size="10"/>
					<div class="onShow"><?php echo lang('a-ind-73'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-74'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_SEARCH_DATA_CACHE']; ?>" size="10" name="data[SITE_SEARCH_DATA_CACHE]" class="input-text">
					<div class="onShow"><?php echo lang('a-ind-75'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-76'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_SEARCH_URLRULE']; ?>" size="40" name="data[SITE_SEARCH_URLRULE]" class="input-text"><div class="onShow"><?php echo lang('a-ind-77'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-78'); ?>： </th>
					<td class="y-bg">
					<input type="radio" <?php if ($data['SITE_SEARCH_TYPE']==1) { ?> checked=""<?php } ?> value="1" checkbox="auto" name="data[SITE_SEARCH_TYPE]" onclick="setSearchType(1)"> <?php echo lang('a-ind-79'); ?>   
					&nbsp;&nbsp;
					<input type="radio" <?php if ($data['SITE_SEARCH_TYPE']==2) { ?> checked=""<?php } ?> value="2" checkbox="auto" name="data[SITE_SEARCH_TYPE]" onclick="setSearchType(2)"> Sphinx 
					</td>
				</tr>
				<tbody id="search_1">
				<tr>
					<th><?php echo lang('a-ind-80'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_SEARCH_INDEX_CACHE']; ?>" size="10" name="data[SITE_SEARCH_INDEX_CACHE]" class="input-text">
					<div class="onShow"><?php echo lang('a-ind-81'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-82'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_SEARCH_KW_FIELDS']; ?>" size="50" name="data[SITE_SEARCH_KW_FIELDS]" class="input-text">
					<div class="onShow"><?php echo lang('a-ind-83'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-84'); ?>：</th>
					<td class="y-bg"><input type="radio" <?php if ($data['SITE_SEARCH_KW_OR']==true) { ?> checked=""<?php } ?> value="true" checkbox="auto" name="data[SITE_SEARCH_KW_OR]"> OR    
					&nbsp;&nbsp;
					<input type="radio" <?php if ($data['SITE_SEARCH_KW_OR']==false) { ?> checked=""<?php } ?> value="false" checkbox="auto" name="data[SITE_SEARCH_KW_OR]"> AND 
					<div class="onShow"><?php echo lang('a-ind-85'); ?></div></td>
				</tr>
				</tbody>
				<tbody id="search_2">
				<tr>
					<th><?php echo lang('a-ind-86'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_SEARCH_SPHINX_HOST']; ?>" size="30" name="data[SITE_SEARCH_SPHINX_HOST]" class="input-text"></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-87'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_SEARCH_SPHINX_PORT']; ?>" size="10" name="data[SITE_SEARCH_SPHINX_PORT]" class="input-text"></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-88'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_SEARCH_SPHINX_NAME']; ?>" size="30" name="data[SITE_SEARCH_SPHINX_NAME]" class="input-text"></td>
				</tr>
				</tbody>
			</table>
			<script type="text/javascript">
			function setSearchType(id) {
				$('#search_1').hide();
				$('#search_2').hide();
				$('#search_'+id).show();
			}
			setSearchType(<?php echo $data['SITE_SEARCH_TYPE']; ?>);
			</script>
			</div>

			<div class="contentList pad-10 hidden" id="div_setting_5" style="display: none;">
			<table width="100%" class="table_form">
				<tr>
					<th width="200"><?php echo lang('a-ind-89'); ?>：</th>
					<td><input class="input-text" type="text" name="data[SITE_KEYWORD_NUMS]" value="<?php echo $data['SITE_KEYWORD_NUMS']; ?>" size="10"/>
					<div class="onShow"><?php echo lang('a-ind-90'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-91'); ?>： </th>
					<td class="y-bg">
					<input type="radio" <?php if ($data['SITE_TAG_LINK']) { ?> checked=""<?php } ?> value="true" checkbox="auto" name="data[SITE_TAG_LINK]" /> <?php echo lang('a-yes'); ?>
					&nbsp;&nbsp;&nbsp;
					<input type="radio" <?php if (empty($data['SITE_TAG_LINK'])) { ?> checked=""<?php } ?> value="false" checkbox="auto" name="data[SITE_TAG_LINK]" /> <?php echo lang('a-no'); ?> &nbsp;&nbsp;&nbsp;<div class="onShow"><?php echo lang('a-ind-92'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-93'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_KEYWORD_CACHE']; ?>" size="10" name="data[SITE_KEYWORD_CACHE]" class="input-text">
					<div class="onShow"><?php echo lang('a-ind-81'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-94'); ?>：</th>
					<td><input class="input-text" type="text" name="data[SITE_TAG_PAGE]" value="<?php echo $data['SITE_TAG_PAGE']; ?>" size="10"/>
					<div class="onShow"><?php echo lang('a-ind-95'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-96'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_TAG_CACHE']; ?>" size="10" name="data[SITE_TAG_CACHE]" class="input-text">
					<div class="onShow"><?php echo lang('a-ind-81'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-97'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_TAG_URLRULE']; ?>" size="40" name="data[SITE_TAG_URLRULE]" class="input-text"><div class="onShow"><?php echo lang('a-ind-98'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-99'); ?>：</th>
					<td class="y-bg"><input type="text" value="<?php echo $data['SITE_TAG_URL']; ?>" size="40" name="data[SITE_TAG_URL]" class="input-text"><div class="onShow"><?php echo lang('a-ind-100'); ?></div></td>
				</tr>
				</tbody>
			</table>
			</div>

			<div class="bk15"></div>
			<input type="submit" class="button" value="<?php echo lang('a-submit'); ?>" name="submit">
		</div>
	</div>
	</form>
</div>
</div>
</body>
</html>
<script type="text/javascript">
$('#div_setting_<?php echo $type; ?>').show();
function SwapTab(name,cls_show,cls_hide,cnt,cur){
	for(i=1;i<=cnt;i++){
		if(i==cur){
			$('#div_'+name+'_'+i).show();
			$('#tab_'+name+'_'+i).attr('class',cls_show);
		}else{
			$('#div_'+name+'_'+i).hide();
			$('#tab_'+name+'_'+i).attr('class',cls_hide);
		}
	}
}
function showsmtp(obj,hiddenid){
	hiddenid = hiddenid ? hiddenid : 'smtpcfg';
	var status = $(obj).val();
	if(status == 1) $("#"+hiddenid).show();
	else $("#"+hiddenid).hide();
}
function test_mail() {
    var mail_type = $('input[checkbox=mail_type][checked]').val();
	$.post('<?php echo url('admin/index/ajaxmail'); ?>&submit=1&mail_to='+$('#mail_to').val(),{mail_type:mail_type,mail_server:$('#mail_server').val(),mail_port:$('#mail_port').val(),mail_user:$('#mail_user').val(),mail_password:$('#mail_password').val(),mail_auth:$('#mail_auth').val(),mail_auth:$('#mail_auth').val(),mail_from:$('#mail_from').val()}, function(data){
	    alert(data);
	});
} 
</script>