<?php include $this->_include('member/header'); ?>
<!--Wrapper-->
<div id="wrapper">
	<div id="index_top"></div>
	<!--Container-->
	<div id="container" class="index_bg">
	    <!--Content-->
	    <div id="content">
	        <!--My_info-->
	        <div class="my_info">
	            <table width="560" border="0" cellpadding="0" cellspacing="0">
                <tr>
                <td width="10%" rowspan="2"><a href="<?php echo url('member/space/', array('userid'=>$memberinfo['id'])); ?>" target="_blank"><img src="<?php echo get_member_avatar($memberinfo['id']); ?>" width="40" height="40" border="0" /></a></td>
                <td width="25%">会员模型： <?php echo $membermodel[$memberinfo['modelid']]['modelname']; ?></td>
                <td width="29%">会员组： <?php echo $membergroup[$memberinfo['groupid']]['name']; ?></td>
                <td width="36%">积分： <?php echo $memberinfo['credits']; ?></td>
                </tr>
                <tr>
                <td height="25" colspan="3" style="padding-top:5px;">注册时间： <?php echo date('Y年m月d日', $memberinfo['regdate']); ?>&nbsp;&nbsp;
                <?php if (!$memberinfo['status']) { ?><span style="color:#F00"><b>您还没有通过审核！</b></span><?php } ?></td>
                </tr>
                </table>
            </div>
			<?php if ($membergroup[$memberinfo['groupid']]['filesize']) { ?>
		    <div style="background-color:#FFFCED;border:1px solid #FFBE7A;line-height:20px;width:540px;padding:8px 10px;margin-left:35px;">
			会员附件总空间： <?php echo $membergroup[$memberinfo['groupid']]['filesize']; ?> MB，已用：<?php echo formatFileSize(count_member_size($memberinfo['id'])); ?>
			</div>
			<?php } ?>
	        <div class="faq">
                <div class="title"><h3>我的文章</h3></div>
                <ul>
                <?php $return = $this->_listdata("order=updatetime userid=$memberinfo[id] username=$memberinfo[username] sysadd=0 num=10 cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
			    <li><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></li>
				<?php } } ?>
                </ul>
            </div>
        </div>
	    <!--Content End-->

	    <!--Sidebar-->
	    <div id="sidebar">
	        <div class="title mb7"><h3>快捷入口</h3></div>
	        <div class="tool_list">
                <dl>
                    <a href="<?php echo url('member/info/edit'); ?>">
                    <b class="icon1"></b>
                      <dt>会员资料</dt>
                      <dd>完善会员资料信息</dd>
                     <span >
                     完善
                     </span> 
                     </a>
                </dl>
                <dl>
                    <a href="<?php echo url('member/info/avatar'); ?>">
                    <b class="icon1"></b>
                      <dt>会员头像</dt>
                      <dd>上传会员头像</dd>
                     <span >
                     查看
                     </span> 
                     </a>
                </dl>
				<dl>
                    <a href="<?php echo url('member/content/attachment'); ?>">
                    <b class="icon1"></b>
                      <dt>会员附件</dt>
                      <dd>图片、文件管理</dd>
                     <span >
                     管理
                     </span> 
                     </a>
                </dl>
                <dl>
                    <a href="<?php echo url('member/content/'); ?>">
                    <b class="icon1"></b>
                      <dt>内容信息</dt>
                      <dd>我发布的内容信息</dd>
                     <span >
                     管理
                     </span> 
                     </a>
                </dl>
                <dl>
                    <a href="<?php echo url('member/space/', array('userid'=>$memberinfo['id'])); ?>">
                    <b class="icon1"></b>
                      <dt>个人中心</dt>
                      <dd>查看会员主页</dd>
                     <span >
                     查看
                     </span> 
                     </a>
                </dl>
            </div>
        </div>
	    <!--Sidebar End-->
    </div>
	<!--Container End-->
    <div id="index_bottom"></div>
</div>
<!--Wrapper End-->
<?php include $this->_include('member/footer'); ?>