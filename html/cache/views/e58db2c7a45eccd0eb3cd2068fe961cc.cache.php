<?php include $this->_include('member/header'); ?>
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dialog.js"></script>
<!--Wrapper-->
<div id="wrapper">
	<div class="top"></div>
	<div class="center">
	    <div class="center_left">
	        <h3>内容管理</h3>
			<div class="menu_left">
			<ul>
            <?php if (is_array($navigation)) { $count=count($navigation);foreach ($navigation as $n=>$t) { ?>
                <li <?php if ($n && $modelid==$n) { ?>class="on"<?php } ?>><a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></li>
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
                            <td width="80">栏目</td>
                            <td width="130">更新时间</td>
                            <td width="80">操作</td>
                        </tr>
                    </thead>
                    <tbody>
						<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
						<tr>
							<td><input name="ids[]" type="checkbox" class="selectc" value="<?php echo $t['id']; ?>" /></td>
							<td><a href="<?php echo $t['url']; ?>" target="_blank"><?php echo $t['title']; ?></a></td>
							<td><a href="<?php echo url('member/content', array('modelid'=>$modelid,'catid'=>$t['catid'])); ?>"><?php echo $cats[$t['catid']]['catname']; ?></a></td>
							<td><?php if (date('Y-m-d')==date('Y-m-d',$t['updatetime'])) { ?>
							<span style="color:#F00"><?php echo date("Y-m-d H:i:s", $t['updatetime']); ?></span>
							<?php } else {  echo date("Y-m-d H:i:s", $t['updatetime']);  } ?></td>
							<td>
							<a href="<?php echo url('member/content/edit/', array('id'=>$t['id'])); ?>">修改</a>&nbsp;
							<a href="javascript:;" onClick="if(confirm('删除将会扣除一定的积分，确定吗？')){ window.location.href='<?php echo url('member/content/del/', array('id'=>$t['id'])); ?>'; }">删除</a>
							</td>
						</tr>
						<?php } } ?>
                    </tbody>
                </table>
                <div class="datatablepage">
                <table width="100%" border="0">
                  <tr>
                    <td>
					<input type="submit" class="button" value="刷新时间" name="submit" />
					<input type="button" class="button" value="发布文档" name="button" onclick="window.location.href='<?php echo url('member/content/add', array('modelid'=>$modelid)); ?>'" />
					</td>
                    <td align="right"><?php echo $pagelist; ?></td>
                  </tr>
                </table>
                </div>
                <div class="datatablepage">
                <span class="count">今天只能发表<em><?php echo $countinfo['posts']; ?></em>条信息，已经发表了<em><?php echo $countinfo['post']; ?></em>条</span>
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