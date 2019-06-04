<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo ADMIN_THEME; ?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/switchbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
<script type="text/javascript">
    var sitepath = "<?php echo SITE_PATH;  echo ENTRY_SCRIPT_NAME; ?>";
    var finecms_admin_document = "";
</script>
<script type="text/javascript" src="<?php echo LANG_PATH; ?>lang.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/core.js"></script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<?php if ($site) { ?>
	<div class="content-menu ib-a blue line-x">
		<a href="<?php echo url('admin/site/'); ?>"><em><?php echo lang('a-men-73'); ?></em></a><span>|</span>
		<a href="<?php echo url('admin/site/config', array('id'=>$param['id'])); ?>" class="on"><em><?php echo lang('a-sit-7'); ?></em></a>
	</div>
	<?php } ?>
	<div class="table-list">
		<form method="post" action="" id="myform" name="myform">
		<input name="typeid" id="typeid" type="hidden" value="<?php echo $typeid; ?>">
		<div class="pad-10">
			<div class="col-tab">
				<ul class="tabBut cu-li">
					<li onClick="SwapTab('setting','on','',3,1);" class="<?php if ($typeid==1) { ?>on<?php } ?>" id="tab_setting_1"><?php echo lang('a-men-12'); ?></li>
					<li onClick="SwapTab('setting','on','',3,2);" id="tab_setting_2" class="<?php if ($typeid==2) { ?>on<?php } ?>"><?php echo lang('a-men-13'); ?></li>
					<li onClick="SwapTab('setting','on','',3,3);" id="tab_setting_3" class="<?php if ($typeid==3) { ?>on<?php } ?>"><?php echo lang('dr011'); ?></li>
				</ul>
				
				<div class="contentList pad-10" id="div_setting_1" style="display: none;">
				<table width="100%" class="table_form">
				<tr>
					<th width="200"><?php echo lang('a-sit-3'); ?>： </th>
					<td><select name="data[SITE_LANGUAGE]">
					<?php if (is_array($langs)) { $count=count($langs);foreach ($langs as $t) {  if (is_dir(EXTENSION_DIR . 'language' . DIRECTORY_SEPARATOR . $t)) { ?>
					<option value="<?php echo $t; ?>" <?php if ($data['SITE_LANGUAGE']==$t) { ?>selected<?php } ?>><?php echo $t; ?></option>
					<?php }  } } ?>
					</select><div class="onShow"><?php echo lang('a-cfg-73'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-47'); ?>： </th>
					<td><select name="data[SITE_THEME]">
					<option value=""> -- </option>
					<?php echo $theme; ?>
					</select><div class="onShow"><?php echo lang('a-sit-2'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-48'); ?>： </th>
					<td><select name="data[SITE_TIMEZONE]">
					<option value=""> -- </option>
					<option value="-12" <?php if ($data['SITE_TIMEZONE']=="-12") { ?>selected<?php } ?>>(GMT -12:00)</option>
					<option value="-11" <?php if ($data['SITE_TIMEZONE']=="-11") { ?>selected<?php } ?>>(GMT -11:00)</option>
					<option value="-10" <?php if ($data['SITE_TIMEZONE']=="-10") { ?>selected<?php } ?>>(GMT -10:00)</option>
					<option value="-9" <?php if ($data['SITE_TIMEZONE']=="-9") { ?>selected<?php } ?>>(GMT -09:00)</option>
					<option value="-8" <?php if ($data['SITE_TIMEZONE']=="-8") { ?>selected<?php } ?>>(GMT -08:00)</option>
					<option value="-7" <?php if ($data['SITE_TIMEZONE']=="-7") { ?>selected<?php } ?>>(GMT -07:00)</option>
					<option value="-6" <?php if ($data['SITE_TIMEZONE']=="-6") { ?>selected<?php } ?>>(GMT -06:00)</option>
					<option value="-5" <?php if ($data['SITE_TIMEZONE']=="-5") { ?>selected<?php } ?>>(GMT -05:00)</option>
					<option value="-4" <?php if ($data['SITE_TIMEZONE']=="-4") { ?>selected<?php } ?>>(GMT -04:00)</option>
					<option value="-3.5" <?php if ($data['SITE_TIMEZONE']=="-3.5") { ?>selected<?php } ?>>(GMT -03:30)</option>
					<option value="-3" <?php if ($data['SITE_TIMEZONE']=="-3") { ?>selected<?php } ?>>(GMT -03:00)</option>
					<option value="-2" <?php if ($data['SITE_TIMEZONE']=="-2") { ?>selected<?php } ?>>(GMT -02:00)</option>
					<option value="-1" <?php if ($data['SITE_TIMEZONE']=="-1") { ?>selected<?php } ?>>(GMT -01:00)</option>
					<option value="0" <?php if ($data['SITE_TIMEZONE']=="0") { ?>selected<?php } ?>>(GMT)</option>
					<option value="1" <?php if ($data['SITE_TIMEZONE']=="1") { ?>selected<?php } ?>>(GMT +01:00)</option>
					<option value="2" <?php if ($data['SITE_TIMEZONE']=="2") { ?>selected<?php } ?>>(GMT +02:00)</option>
					<option value="3" <?php if ($data['SITE_TIMEZONE']=="3") { ?>selected<?php } ?>>(GMT +03:00)</option>
					<option value="3.5" <?php if ($data['SITE_TIMEZONE']=="3.5") { ?>selected<?php } ?>>(GMT +03:30)</option>
					<option value="4" <?php if ($data['SITE_TIMEZONE']=="4") { ?>selected<?php } ?>>(GMT +04:00)</option>
					<option value="4.5" <?php if ($data['SITE_TIMEZONE']=="4.5") { ?>selected<?php } ?>>(GMT +04:30)</option>
					<option value="5" <?php if ($data['SITE_TIMEZONE']=="5") { ?>selected<?php } ?>>(GMT +05:00)</option>
					<option value="5.5" <?php if ($data['SITE_TIMEZONE']=="5.5") { ?>selected<?php } ?>>(GMT +05:30)</option>
					<option value="5.75" <?php if ($data['SITE_TIMEZONE']=="5.75") { ?>selected<?php } ?>>(GMT +05:45)</option>
					<option value="6" <?php if ($data['SITE_TIMEZONE']=="6") { ?>selected<?php } ?>>(GMT +06:00)</option>
					<option value="6.5" <?php if ($data['SITE_TIMEZONE']=="6.6") { ?>selected<?php } ?>>(GMT +06:30)</option>
					<option value="7" <?php if ($data['SITE_TIMEZONE']=="7") { ?>selected<?php } ?>>(GMT +07:00)</option>
					<option value="8" <?php if ($data['SITE_TIMEZONE']=="" || $data['SITE_TIMEZONE']=="8") { ?>selected<?php } ?>>(GMT +08:00)</option>
					<option value="9" <?php if ($data['SITE_TIMEZONE']=="9") { ?>selected<?php } ?>>(GMT +09:00)</option>
					<option value="9.5" <?php if ($data['SITE_TIMEZONE']=="9.5") { ?>selected<?php } ?>>(GMT +09:30)</option>
					<option value="10" <?php if ($data['SITE_TIMEZONE']=="10") { ?>selected<?php } ?>>(GMT +10:00)</option>
					<option value="11" <?php if ($data['SITE_TIMEZONE']=="11") { ?>selected<?php } ?>>(GMT +11:00)</option>
					<option value="12" <?php if ($data['SITE_TIMEZONE']=="12") { ?>selected<?php } ?>>(GMT +12:00)</option>
					</select>&nbsp;<div class="onShow"><?php echo $string['SITE_TIMEZONE']; ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-102'); ?>： </th>
					<td><input class="input-text" type="text" name="data[SITE_TIME_FORMAT]" value="<?php echo $data['SITE_TIME_FORMAT']; ?>" size="25" /><div class="onShow"><?php echo $string['SITE_TIME_FORMAT']; ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-46'); ?>： </th>
					<td><input class="input-text" type="text" name="data[SITE_NAME]" value="<?php echo $data['SITE_NAME']; ?>" size="25" /><div class="onShow"><?php echo $string['SITE_NAME']; ?></div></td>
				</tr>
				<tr>
					<th><?php echo $string['SITE_TITLE']; ?>： </th>
					<td><input class="input-text" type="text" name="data[SITE_TITLE]" value="<?php echo $data['SITE_TITLE']; ?>" style="width:450px;" />
                        <div class="onShow"><?php echo lang('a-cfg-ex-2'); ?>：<?php echo '{'; ?>$SITE_TITLE}</div>
                    </td>

				</tr>
				<tr>
					<th><?php echo $string['SITE_KEYWORDS']; ?>：</th>
					<td class="y-bg"><textarea name="data[SITE_KEYWORDS]" style="width:510px;height:30px;" class="text"><?php echo $data['SITE_KEYWORDS']; ?></textarea>
                        <div class="onShow"><?php echo lang('a-cfg-ex-2'); ?>：<?php echo '{'; ?>$SITE_KEYWORDS}</div>
                    </td>
				</tr>
				<tr>
					<th><?php echo $string['SITE_DESCRIPTION']; ?>：</th>
					<td><textarea name="data[SITE_DESCRIPTION]" style="width:510px;height:40px;" class="text"><?php echo $data['SITE_DESCRIPTION']; ?></textarea>
                        <div class="onShow"><?php echo lang('a-cfg-ex-2'); ?>：<?php echo '{'; ?>$SITE_DESCRIPTION}</div>
                    </td>
				</tr>
                    <tr>
                        <th><?php echo $string['SITE_JS']; ?>：</th>
                        <td><textarea name="data[SITE_JS]" style="width:510px;height:40px;" class="text"><?php echo $data['SITE_JS']; ?></textarea>
                            <div class="onShow"><?php echo lang('a-cfg-ex-2'); ?>：<?php echo '{'; ?>$SITE_JS}</div>
                        </td>
                    </tr>
                <tr>
                    <th><?php echo $string['SITE_ICP']; ?>： </th>
                    <td><input class="input-text" type="text" name="data[SITE_ICP]" value="<?php echo $data['SITE_ICP']; ?>" style="width:300px;" />
                        <div class="onShow"><?php echo lang('a-cfg-ex-2'); ?>：<?php echo '{'; ?>$SITE_ICP}</div>
                    </td>
                </tr>
				<tr>
					<th><?php echo $string['SITE_BOTTOM_INFO']; ?>：</th>
					<td>
						<?php App::auto_load('fields');echo content_editor('SITE_BOTTOM_INFO',array(0=> $data['SITE_BOTTOM_INFO']), array('system'=>1,'pagebreak'=>1,'type' =>2,'height'=>'200')); ?>
                        <div class="onShow"><?php echo lang('a-cfg-ex-2'); ?>：<?php echo '{'; ?>$SITE_BOTTOM_INFO}</div>
					</td>
				</tr>
				</table>
				</div>
				<div class="contentList pad-10 hidden" id="div_setting_2" style="display: none;">
				<table width="100%" class="table_form">
				<tr>
					<th width="200"><?php echo lang('a-mod-204'); ?>： </th>
					<td><input name="data[SITE_THUMB_TYPE]" type="radio" value="1" <?php if ($data['SITE_THUMB_TYPE']==1) { ?>checked<?php } ?> /> <?php echo lang('a-mod-205'); ?> 
					&nbsp;&nbsp;&nbsp;<input name="data[SITE_THUMB_TYPE]" type="radio" value="0" <?php if (empty($data['SITE_THUMB_TYPE'])) { ?>checked<?php } ?> /> <?php echo lang('a-mod-206'); ?>
					<div class="onShow"><?php echo lang('a-mod-207'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-ind-49'); ?>： </th>
					<td><input name="data[SITE_WATERMARK]" type="radio" value="1" <?php if ($data['SITE_WATERMARK']==1) { ?>checked<?php } ?> onClick="setSateType(1)"> <?php echo lang('a-ind-50'); ?> 
					&nbsp;&nbsp;&nbsp;<input name="data[SITE_WATERMARK]" type="radio" value="2" <?php if ($data['SITE_WATERMARK']==2) { ?>checked<?php } ?> onClick="setSateType(2)" /> <?php echo lang('a-ind-51'); ?> 
					&nbsp;&nbsp;&nbsp;<input name="data[SITE_WATERMARK]" type="radio" value="0" <?php if ($data['SITE_WATERMARK']==0) { ?>checked<?php } ?> onClick="setSateType(0)" /> <?php echo lang('a-close'); ?></td>
				</tr>
				<tbody id="w_0">
				<tr class="w_1">
					<th><?php echo lang('a-ind-52'); ?>： </th>
					<td><input class="input-text" type="text" name="data[SITE_WATERMARK_ALPHA]" value="<?php echo $data['SITE_WATERMARK_ALPHA']; ?>" size="25" />
					<div class="onShow"><?php echo lang('a-ind-53'); ?></div></td>
				</tr>
				<tr class="w_1">
					<th><?php echo lang('a-sit-1'); ?>： </th>
					<td><select name="data[SITE_WATERMARK_IMAGE]">
						<option value=""> -- </option>
						<?php if (is_array($images)) { $count=count($images);foreach ($images as $t) {  if (strpos($t, '.png') !== false) { ?>
						<option value="<?php echo $t; ?>" <?php if ($data['SITE_WATERMARK_IMAGE']==$t) { ?>selected<?php } ?>><?php echo $t; ?></option>
						<?php }  } } ?>
						</select>
					<div class="onShow"><?php echo lang('a-sit-0'); ?></div></td>
				</tr>
				<tr class="w_2">
					<th><?php echo lang('a-ind-54'); ?>： </th>
					<td><input class="input-text" type="text" name="data[SITE_WATERMARK_TEXT]" value="<?php echo $data['SITE_WATERMARK_TEXT']; ?>" size="25" />
					<div class="onShow"><?php echo lang('a-ind-55'); ?></div></td>
				</tr>
				<tr class="w_2">
					<th><?php echo lang('a-cfg-69'); ?>： </th>
					<td><input class="input-text" type="text" name="data[SITE_WATERMARK_SIZE]" value="<?php echo $data['SITE_WATERMARK_SIZE']; ?>" size="25" />
					<div class="onShow"><?php echo lang('a-cfg-70'); ?></div></td>
				</tr>
				<tr>
					<th><?php echo lang('a-cfg-67'); ?>： </th>
					<td>
					<table width="400">
					<tr>
						<td><input type="radio" <?php if ($data['SITE_WATERMARK_POS']==1) { ?>checked=""<?php } ?> value="1" name="data[SITE_WATERMARK_POS]" /> <?php echo lang('a-cfg-58'); ?></td>
						<td><input type="radio" <?php if ($data['SITE_WATERMARK_POS']==2) { ?>checked=""<?php } ?> value="2" name="data[SITE_WATERMARK_POS]" /> <?php echo lang('a-cfg-59'); ?></td>
						<td><input type="radio" <?php if ($data['SITE_WATERMARK_POS']==3) { ?>checked=""<?php } ?> value="3" name="data[SITE_WATERMARK_POS]" /> <?php echo lang('a-cfg-60'); ?></td>
					</tr>
					<tr>
						<td><input type="radio" <?php if ($data['SITE_WATERMARK_POS']==4) { ?>checked=""<?php } ?> value="4" name="data[SITE_WATERMARK_POS]" /> <?php echo lang('a-cfg-61'); ?></td>
						<td><input type="radio" <?php if ($data['SITE_WATERMARK_POS']==5) { ?>checked=""<?php } ?> value="5" name="data[SITE_WATERMARK_POS]" /> <?php echo lang('a-cfg-62'); ?></td>
						<td><input type="radio" <?php if ($data['SITE_WATERMARK_POS']==6) { ?>checked=""<?php } ?> value="6" name="data[SITE_WATERMARK_POS]" /> <?php echo lang('a-cfg-63'); ?></td>
					</tr>
					<tr>
						<td><input type="radio" <?php if ($data['SITE_WATERMARK_POS']==7) { ?>checked=""<?php } ?> value="7" name="data[SITE_WATERMARK_POS]" /> <?php echo lang('a-cfg-64'); ?></td>
						<td><input type="radio" <?php if ($data['SITE_WATERMARK_POS']==8) { ?>checked=""<?php } ?> value="8" name="data[SITE_WATERMARK_POS]" /> <?php echo lang('a-cfg-65'); ?></td>
						<td><input type="radio" <?php if (empty($data['SITE_WATERMARK_POS'])) { ?>checked=""<?php } ?> value="" name="data[SITE_WATERMARK_POS]" /> <?php echo lang('a-cfg-66'); ?></td>
					</tr>
					</table>
					</td>
				</tr>
				</tbody>
				<tr>
					<th><?php echo lang('a-ind-56'); ?>： </th>
					<td>
					<input class="input-text" type="text" name="data[SITE_THUMB_WIDTH]" value="<?php echo $data['SITE_THUMB_WIDTH']; ?>" size="6" />
					x&nbsp;
					<input class="input-text" type="text" name="data[SITE_THUMB_HEIGHT]" value="<?php echo $data['SITE_THUMB_HEIGHT']; ?>" size="6" />
					&nbsp;px
					</td>
				</tr>
				</table>
				<script type="text/javascript">
				function setSateType(id) {
					if (id == 0) {
						$('.w_1').hide();
						$('.w_2').hide();
						$('#w_0').hide();
					} else if(id == 1) {
						$('.w_2').hide();
						$('.w_1').show();
						$('#w_0').show();
					} else if(id == 2) {
						$('.w_1').hide();
						$('.w_2').show();
						$('#w_0').show();
					}
				}
				setSateType(<?php echo (int)$data['SITE_WATERMARK'] ?>);
				</script>
				</div>

                <div class="contentList pad-10 hidden" id="div_setting_3" style="display: none;">
                    <table width="100%" class="table_form">

                        <tr>
                            <th width="200"><?php echo lang('a-cfg-74'); ?>： </th>
                            <td><input name="data[SITE_MOBILE]" type="radio" value="true" <?php if ($data['SITE_MOBILE']==true) { ?>checked<?php } ?> /> <?php echo lang('a-open'); ?>
                                &nbsp;&nbsp;&nbsp;<input name="data[SITE_MOBILE]" type="radio" value="false" <?php if (empty($data['SITE_MOBILE'])) { ?>checked<?php } ?> /> <?php echo lang('a-close'); ?>
                                <div class="onShow"><?php echo lang('a-cfg-72'); ?></div>
                            </td>
                        </tr>
                        <tr>
                            <th><?php echo lang('dr012'); ?>： </th>
                            <td><input class="input-text" type="text" name="data[SITE_MURL]" value="<?php echo $data['SITE_MURL']; ?>" size="40" /><div class="onShow"><?php echo $string['SITE_MURL']; ?></div></td>
                        </tr>
                    </table>
                </div>

				<div class="bk15"></div>
				<input type="submit" class="button" value="<?php echo lang('a-submit'); ?>" name="submit" />
			</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
$('#div_setting_<?php echo $typeid; ?>').show();
function SwapTab(name,cls_show,cls_hide,cnt,cur){
	for(i=1;i<=cnt;i++){
		if(i==cur){
			$('#div_'+name+'_'+i).show();
			$('#tab_'+name+'_'+i).attr('class',cls_show);
			$('#typeid').val(i);
		}else{
			$('#div_'+name+'_'+i).hide();
			$('#tab_'+name+'_'+i).attr('class',cls_hide);
		}
	}
}
</script>