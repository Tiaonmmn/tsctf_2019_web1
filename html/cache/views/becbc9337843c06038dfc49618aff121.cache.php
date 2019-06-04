<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CMS_NAME; ?>网站管理系统 V<?php echo CMS_VERSION; ?> 安装向导</title>
<link href="<?php echo SITE_THEME; ?>../install/install.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="width">
	<div class="m10">
    	<div class="logo"><span>使用说明</span><img src="<?php echo SITE_THEME; ?>../install/install.png" /></div>
        <div class="table">
			<div class="nr">
				<div class="nr-n">
					<p>一、《HXCMS企业版》由成都天睿信息技术有限公司提供升级与维护</p>
					<br />
					<p>二、《FineCM企业版》程序简介</p>
					<p>     HXCMS企业版诞生于2009年底，以Ci框架为基础开发的一套以简单、实用、开源为目录的CMS建站系统，主要目标用户锁定在个人站长，在经历了多年的发展，目前的版本无论在功能，还是在易用性方面，都有了长足的发展和进步。</p>

					<br />
					<p>三、《FineCM企业版》推荐开发者进行二次开发和发行</p>
					<p>HXCMS企业版免费并开放源代码，推荐开发者或公司在此基础上进行二次开发或者发行，支持修改程序版权并发行新的程序（如改成xiaocms、dacms都行），我们一直提倡免费开源，希望在此基础上开发的开发者也能保持免费开源，为本土的开源事业做一点贡献。</p>
					<p>     HXCMS企业版开发组会持续保持对程序的维护，保证及时都漏洞的修复，广大站长可以完全的放心使用程序，Git开放地址：http://git.oschina.net/dayrui/finecms。</p>

				</div>
			</div>
        </div>
		<div class="bnt">
			<form action="<?php echo url('install/'); ?>" method="post" id="dform">
			<input type="hidden" name="step" value="2"/>
			<input type="submit" class="n" value="下一步安装"/>
			</form>
		</div>
    </div>
</div>
</body>
</html>
