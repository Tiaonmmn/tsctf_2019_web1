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
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
	    <a href="<?php echo url('admin/theme/demo/'); ?>" class="on"><em><?php echo lang('a-men-71'); ?></em></a><span>|</span>
		<a href="http://www.HXCMS.com/help/" target="_blank"><em><?php echo lang('a-the-0'); ?></em></a>
	</div>
	<div class="table-list">
		<form action="" method="post" target='result'>
		<input name="type" id="type" type="hidden" value="1">
		<div class="pad-10">
			<div class="col-tab">
				<ul class="tabBut cu-li">
					<li onClick="SwapTab('table','on','',6,1);" class="on" id="tab_table_1"><?php echo lang('a-the-1'); ?></li>
					<li onClick="SwapTab('table','on','',6,2);" id="tab_table_2" class=""><?php echo lang('a-the-2'); ?></li>
					<li onClick="SwapTab('table','on','',6,3);" id="tab_table_3" class=""><?php echo lang('a-the-3'); ?></li>
					<li onClick="SwapTab('table','on','',6,4);" id="tab_table_4" class=""><?php echo lang('a-the-4'); ?></li>
					<li onClick="SwapTab('table','on','',6,5);" id="tab_table_5" class=""><?php echo lang('a-the-5'); ?></li>
					<li onClick="SwapTab('table','on','',6,6);" id="tab_table_6" class=""><?php echo lang('a-the-6'); ?></li>
				</ul>
				
				<div class="contentList pad-10" id="div_table_1" style="display: block;">
				<table width="100%" class="table_form">
				<tr>
					<th width="150"><?php echo lang('a-mod-35'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="" name="data1[modelid]" id="modelid" />
					<select name="test" onChange="$('#modelid').val(value);">
					<option value=""> -- </option>
					<?php if (is_array($model)) { $count=count($model);foreach ($model as $t) { ?>
					<option value="<?php echo $t['modelid']; ?>"> <?php echo $t['modelname']; ?> </option>
					<?php } } ?>
					</select>
					<div class="onShow"><?php echo lang('a-the-7'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-con-29'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="" name="data1[catid]" id="catid" />
					<select name="test" onChange="changeCatid(this.value)">
					<option value=""> -- </option>
					<?php echo $category; ?>
					</select>
					<div class="onShow"><?php echo lang('a-the-8'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-order'); ?>：</th>
					<td><input type="text" class="input-text" size="40" value="" name="data1[order]" id="order" />
					<select name="order_test" onChange="changeOrder(this.value)">
					<option value=""> -- </option>
					<option value="inputtime"> <?php echo lang('a-the-9'); ?> </option>
					<option value="updatetime"> <?php echo lang('a-the-10'); ?> </option>
					<option value="hits"> <?php echo lang('a-the-11'); ?> </option>
					</select>
					<div class="onShow"><?php echo lang('a-the-12'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-the-13'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="10" name="data1[num]" />
					<div class="onShow"><?php echo lang('a-the-14'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-con-45'); ?>： </th>
					<td>
					<input type="radio" value="0" name="data1[thumb]" /> <?php echo lang('a-no'); ?>&nbsp;&nbsp;
					<input type="radio" value="1" name="data1[thumb]" /> <?php echo lang('a-yes'); ?>&nbsp;&nbsp;
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-the-15'); ?>： </th>
					<td>
					<input type="radio" value="null" name="data1[more]" checked /> <?php echo lang('a-no'); ?>&nbsp;&nbsp;
					<input type="radio" value="1" name="data1[more]" /> <?php echo lang('a-yes'); ?>&nbsp;&nbsp;
					<div class="onShow"><?php echo lang('a-the-16'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-the-17'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="36000" name="data1[cache]" />
					<div class="onShow"><?php echo lang('a-the-18'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-the-19'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="t" name="data1[return]" />
					<div class="onShow"><?php echo lang('a-the-20'); ?></div>
					</td>
				</tr>
				</table>
				</div>
				
				<div class="contentList pad-10 hidden" id="div_table_2" style="display: none;">
				<table width="100%" class="table_form">
				<tr>
					<th width="150"><font color="red">*</font> <?php echo lang('a-mod-35'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="" name="data2[modelid]" id="mmodelid" />
					<select name="test" onChange="$('#mmodelid').val(value);">
					<option value=""> -- </option>
					<?php if (is_array($membermodel)) { $count=count($membermodel);foreach ($membermodel as $t) { ?>
					<option value="<?php echo $t['modelid']; ?>"> <?php echo $t['modelname']; ?> </option>
					<?php } } ?>
					</select>
					<div class="onShow"><?php echo lang('a-the-21'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-mem-30'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="" name="data2[groupid]" id="groupid" />
					<select name="test" onChange="changeGroup(this.value)">
					<option value=""> -- </option>
					<?php if (is_array($membergroup)) { $count=count($membergroup);foreach ($membergroup as $t) { ?>
					<option value="<?php echo $t['id']; ?>"> <?php echo $t['name']; ?> </option>
					<?php } } ?>
					</select>
					<div class="onShow"><?php echo lang('a-the-22'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-order'); ?>：</th>
					<td><input type="text" class="input-text" size="40" value="" name="data2[order]" id="morder" />
					<select name="order_test" onChange="changemOrder(this.value)">
					<option value=""> -- </option>
					<option value="regdate"> <?php echo lang('a-the-23'); ?> </option>
					<option value="credits"> <?php echo lang('a-the-24'); ?> </option>
					</select>
					<div class="onShow"><?php echo lang('a-the-12'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-the-13'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="10" name="data2[num]" />
					<div class="onShow"><?php echo lang('a-the-14'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-the-15'); ?>： </th>
					<td>
					<input type="radio" value="null" name="data2[more]" checked /> <?php echo lang('a-no'); ?>&nbsp;&nbsp;
					<input type="radio" value="1" name="data2[more]" /> <?php echo lang('a-yes'); ?>&nbsp;&nbsp;
					<div class="onShow"><?php echo lang('a-the-25'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-the-17'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="36000" name="data2[cache]" />
					<div class="onShow"><?php echo lang('a-the-18'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-the-19'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="t" name="data2[return]" />
					<div class="onShow"><?php echo lang('a-the-20'); ?></div>
					</td>
				</tr>
				</table>
				</div>
				
				<div class="contentList pad-10 hidden" id="div_table_3" style="display: none;">
				<table width="100%" class="table_form">
				<tr>
					<th width="150"><font color="red">*</font> <?php echo lang('a-the-26'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="" name="data3[modelid]" id="fmodelid" />
					<select name="test" onChange="$('#fmodelid').val(value);">
					<option value=""> -- </option>
					<?php if (is_array($formmodel)) { $count=count($formmodel);foreach ($formmodel as $t) { ?>
					<option value="<?php echo $t['tablename']; ?>"> <?php echo $t['modelname']; ?> </option>
					<?php } } ?>
					</select>
					<div class="onShow"><?php echo lang('a-the-27'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-order'); ?>：</th>
					<td><input type="text" class="input-text" size="40" value="" name="data3[order]" />
					<div class="onShow"><?php echo lang('a-the-12'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-the-28'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="" name="data3[cid]" />
					<div class="onShow"><?php echo lang('a-the-29'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-the-13'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="10" name="data3[num]" />
					<div class="onShow"><?php echo lang('a-the-14'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-the-17'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="36000" name="data3[cache]" />
					<div class="onShow"><?php echo lang('a-the-18'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-the-19'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="t" name="data3[return]" />
					<div class="onShow"><?php echo lang('a-the-20'); ?></div>
					</td>
				</tr>
				</table>
				</div>
				
				<div class="contentList pad-10 hidden" id="div_table_4" style="display: none;">
				<table width="100%" class="table_form">
				<tr>
					<th width="150"><font color="red">*</font> <?php echo lang('a-the-30'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="" name="data4[table]" />
					<div class="onShow"><?php echo lang('a-the-31'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-order'); ?>：</th>
					<td><input type="text" class="input-text" size="40" value="" name="data4[order]" />
					<div class="onShow"><?php echo lang('a-the-12'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-the-13'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="10" name="data4[num]" />
					<div class="onShow"><?php echo lang('a-the-14'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-the-17'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="36000" name="data4[cache]" />
					<div class="onShow"><?php echo lang('a-the-18'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-the-19'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="t" name="data4[return]" />
					<div class="onShow"><?php echo lang('a-the-20'); ?></div>
					</td>
				</tr>
				</table>
				</div>
				
				<div class="contentList pad-10 hidden" id="div_table_5" style="display: none;">
				<table width="100%" class="table_form">
				<tr>
					<th width="150"><font color="red">*</font> <?php echo lang('a-the-30'); ?>：</th>
					<td><input type="text" class="input-text" size="20" value="" name="data5[table]" />
					<div class="onShow"><?php echo lang('a-the-32'); ?></div>
					</td>
				</tr>
				<tr>
					<th><font color="red">*</font> <?php echo lang('a-the-37'); ?>：</th>
					<td><input type="text" class="input-text" size="40" value="" name="data5[where]" />
					<div class="onShow"><?php echo lang('a-the-33'); ?></div>
					</td>
				</tr>
				</table>
				</div>
				
				<div class="contentList pad-10 hidden" id="div_table_6" style="display: none;">
				<table width="100%" class="table_form">
				<tr>
					<th width="150"><font color="red">*</font> <?php echo lang('a-the-34'); ?>：</th>
					<td><input type="text" class="input-text" size="10" value="" name="data6[catid]" id="pcatid" />
					<select name="tesdt" onChange="$('#pcatid').val(this.value)">
					<option value=""> -- </option>
					<?php echo $category; ?>
					</select>
					<div class="onShow"><?php echo lang('a-the-35'); ?></div>
					</td>
				</tr>
				</table>
				</div>
				
				<div class="bk15"></div>
				<input type="submit" class="button" value="<?php echo lang('a-the-36'); ?>" name="submit" onClick="$('#load').show()" />
				<span id="load" style="display:none"><img src="<?php echo ADMIN_THEME; ?>images/loading.gif"></span>
			</div>
		</form>
	</div>
	
	<iframe name="result" frameborder="0" id="result" width="100%" height="120"></iframe>
</div>
<script type="text/javascript">
function changeCatid(value) {
	var catid=$("#catid").val();
	if (catid) {
		$("#catid").val(catid+","+value);
	} else {
		$("#catid").val(value);
	}
}
function changeOrder(value) {
	var order=$("#order").val();
	if (order) {
		$("#order").val(order+","+value);
	} else {
		$("#order").val(value);
	}
}
function changemOrder(value) {
	var morder=$("#morder").val();
	if (morder) {
		$("#morder").val(morder+","+value);
	} else {
		$("#morder").val(value);
	}
}
function changeGroup(value) {
	var groupid=$("#groupid").val();
	if (groupid) {
		$("#groupid").val(groupid+","+value);
	} else {
		$("#groupid").val(value);
	}
}
function SwapTab(name,cls_show,cls_hide,cnt,cur){
    $("#type").val(cur);
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
</script>
</body>
</html>