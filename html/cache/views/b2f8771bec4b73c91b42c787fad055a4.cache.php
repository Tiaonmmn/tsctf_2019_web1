<?php if ($memberinfo) { ?>
您好，<?php echo $memberinfo['username'];  if ($memberinfo['nickname']) { ?>(<?php echo $memberinfo['nickname']; ?>)<?php } ?>&nbsp;&nbsp;&nbsp;
<a href="<?php echo url('member'); ?>">个人中心</a>&nbsp;&nbsp;&nbsp;
<a href="<?php echo url('member/content/'); ?>">内容管理</a>&nbsp;&nbsp;&nbsp;
<a href="<?php echo url('member/login/out'); ?>">安全退出</a>
<?php } else { ?>
<a href="<?php echo url('member/register'); ?>">免费注册</a>&nbsp;&nbsp;&nbsp;
<a href="<?php echo url('member/login'); ?>">会员登录</a>&nbsp;&nbsp;&nbsp;
<?php if ($memberconfig['isoauth']) {  if (is_array($memberconfig['oauth'])) { $count=count($memberconfig['oauth']);foreach ($memberconfig['oauth'] as $name=>$t) {  if ($t['appid'] && $t['appkey']) { ?>
<a href="<?php echo url("member/login/oauth", array("name"=>$name)); ?>"><img src="<?php echo SITE_THEME; ?>images/<?php echo strtolower($name); ?>_login.gif" align="absmiddle" border="0"></a>&nbsp;&nbsp;
<?php }  } }  }  } ?>