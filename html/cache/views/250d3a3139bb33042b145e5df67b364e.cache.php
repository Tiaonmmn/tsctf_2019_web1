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
                <table class="datatable" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <td width="22"><input name="selectc" id="selectc" type="checkbox" onClick="setC()"></td>
                            <td>标题</td>
                            <td width="130">收藏时间</td>
                            <td width="80">操作</td>
                        </tr>
                    </thead>
                    <tbody>
                     <?php if (is_array($data)) { $count=count($data);foreach ($data as $t) { ?>
                      <tr>
                        <td><input name="ids[]" type="checkbox" class="selectc" value="<?php echo $t['id']; ?>"></td>
                        <td><a href="<?php echo $t['url']; ?>" target="_blank" title="访问"><?php echo $t['title']; ?></a></td>
                        <td><?php echo date("Y-m-d H:i:s", $t['adddate']); ?></td>
                        <td><a href="<?php echo $t['url']; ?>" target="_blank" title="访问">访问</a></td>
                      </tr>
                      <?php } } ?>
                    </tbody>
                </table>
                <div class="datatablepage">
                <table width="100%" border="0">
                  <tr>
                    <td width="100"><input type="submit" class="button" value="删除" name="submit"></td>
                    <td align="right"><?php echo $pagelist; ?></td>
                  </tr>
                </table>
                </div>
               </form>
		    </div>
        </div>
	</div>
    <div class="bottom"></div>
</div>
<!--Wrapper End-->
<script language="javascript">
function setC() {
	if($("#selectc").attr('checked')) {
		$(".selectc").attr("checked",true);
	} else {
		$(".selectc").attr("checked",false);
	}
}
</script>
<?php include $this->_include('member/footer'); ?>