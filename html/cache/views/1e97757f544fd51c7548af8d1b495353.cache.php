<?php include $this->_include('member/header'); ?>
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dialog.js"></script>
<script type="text/javascript">var sitepath = "<?php echo SITE_PATH;  echo ENTRY_SCRIPT_NAME; ?>";</script>
<script type="text/javascript" src="<?php echo LANG_PATH; ?>lang.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/core.js"></script>
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
                <?php if ($memberconfig['uc_use']) { ?>
				<table width="100%" class="table_form ">
				<tbody>
				<tr>
					<th align="left" id="myContent">
                    <h1>头像保存后，您可能需要刷新一下本页面(按F5键)，才能查看最新的头像效果</h1><br>
			        <?php echo uc_avatar($memberinfo['uid']); ?>
					</th>
					<td width="210"align="left" valign="top">
					<?php if (uc_check_avatar($memberinfo['uid'])) { ?>
					<div class="avatar"><img src="<?php echo UC_API; ?>/avatar.php?uid=<?php echo $memberinfo['uid']; ?>&size=big"></div>
					<div class="avatar"><img src="<?php echo UC_API; ?>/avatar.php?uid=<?php echo $memberinfo['uid']; ?>&size=middle"></div>
					<div class="avatar"><img src="<?php echo UC_API; ?>/avatar.php?uid=<?php echo $memberinfo['uid']; ?>&size=small"></div>
					<?php } else { ?>
				    <div class="avatar"><img src="<?php echo get_member_avatar($memberinfo['uid']); ?>"></div>
					<?php } ?>
					</td>
				</tr>
				</tbody>
				</table>
			    <?php } else {  if (empty($memberconfig['avatar'])) { ?>
				<form action="" method="post">
				<table width="100%" class="table_form ">
				<tbody>
				<tr>
					<th width="100">会员名称：</th>
					<td><?php echo $memberinfo['username']; ?></td>
				</tr>
				<tr>
				  <th>缩略图：</th>
				  <td><input type="text" class="input-text" size="50" value="<?php echo $memberinfo['avatar']; ?>" name="data[avatar]" id="thumb">
				  <input type="button" style="width:66px;cursor:pointer;" class="button" onClick="preview('thumb')" value="预览图片">
				  <input type="button" style="width:66px;cursor:pointer;" class="button" onClick="uploadImage('thumb', 90, 90)" value="上传图片">
				  </td>
				</tr>
				 <tr>
					<th style="border:none">&nbsp;</th>
					<td style="border:none"><input type="submit" class="button" value="保 存" name="submit"></td>
				</tr>
				</tbody>
				</table>
				</form>
                <?php } else { ?>
				<script type="text/javascript" src="<?php echo $avatar_ext_path; ?>swfobject.js"></script>
                <script type="text/javascript">
                    var flashvars = {
                        'upurl':"<?php echo $avatar_return; ?>&callback=return_avatar&"
                    }; 
                    var params = {
                        'align':'middle',
                        'play':'true',
                        'loop':'false',
                        'scale':'showall',
                        'wmode':'window',
                        'devicefont':'true',
                        'id':'Main',
                        'bgcolor':'#ffffff',
                        'name':'Main',
                        'allowscriptaccess':'always'
                    }; 
                    var attributes = {
                        
                    }; 
                    swfobject.embedSWF("<?php echo $avatar_ext_path; ?>main.swf", "myContent", "490", "434", "9.0.0","<?php echo $avatar_ext_path; ?>expressInstall.swf", flashvars, params, attributes);
                
                    function return_avatar(data) {
                        if(data == 1) {
                            alert('上传成功');
                            window.location.reload();
                        } else {
                            alert('上传失败');
                        }
                    }
                </script> 
				<table width="100%" class="table_form">
				<tbody>
				<tr>
					<th align="left" width="500" style="padding:0px;margin:0px;">
						<div id="myContent"> 
						  <p>Loading ... </p> 
						</div>
					</th>
					<td align="left" valign="top">
					<?php if ($memberinfo['avatar'] == 'uploadfiles/member/' . $memberinfo['id'] . '/90x90.jpg') { ?>
					<div class="avatar"><img src="<?php echo image('uploadfiles/member/' . $memberinfo['id'] . '/90x90.jpg'); ?>"></div>
					<div class="avatar"><img src="<?php echo image('uploadfiles/member/' . $memberinfo['id'] . '/45x45.jpg'); ?>"></div>
					<div class="avatar"><img src="<?php echo image('uploadfiles/member/' . $memberinfo['id'] . '/30x30.jpg'); ?>"></div>
					<?php } else { ?>
				   <div class="avatar"><img src="<?php echo image($memberinfo['avatar']); ?>"></div>
					<?php } ?>
					</td>
				</tr>
				</tbody>
				</table>
                <?php }  } ?>
			</div>
        </div>
	</div>
    <div class="bottom"></div>
</div>
<!--Wrapper End-->
<?php include $this->_include('member/footer'); ?>