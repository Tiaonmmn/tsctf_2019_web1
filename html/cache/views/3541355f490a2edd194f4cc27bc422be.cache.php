<?php include $this->_include('header.html'); ?>
<form action="" method="post" name="myform" id="myform">
<div class="subnav">
	<div class="content-menu ib-a blue line-x" style="padding:10px 0">
        <a href="<?php echo url('admin/user/syn'); ?>" class="on"><em>会员同步转移</em></a>
	</div>
	<div class="bk10"></div>
    <div class="explain-col mb10">此功能作用是将本站会员信息整合进《HXCMS高级版》之中，实现会员的整合</div>
	<div class="table-list col-tab">

		<div class="contentList pad-10">
            <table width="100%" class="table_form">
            <?php if ($has_config) { ?>
                <tr>
                    <th>高级版主域名： </th>
                    <td>
                    <input class="input-text" type="text" name="data[domain]" value="<?php echo $domain; ?>" size="40" />
                    </td>
                </tr>
                <tr>
                    <th>转移会员积分为会员经验值： </th>
                    <td>
                    <input  type="radio" name="data[exp]" value="1" size="40" checked />是&nbsp;&nbsp;&nbsp;&nbsp;
                    <input  type="radio" name="data[exp]" value="0" size="40" />否
                    </td>
                </tr>
                <tr>
                    <th>转换会员模型： </th>
                    <td>
                        <?php if (is_array($userModels)) { $count=count($userModels);foreach ($userModels as $userModel) { ?>
                            <p>&nbsp;</p>
                            <p><?php echo $userModel['modelname']; ?> 转换为
                                <select name="data[model][<?php echo $userModel['modelid']; ?>]" id="data[model]">
                                    <?php if (is_array($newUserModels)) { $count=count($newUserModels);foreach ($newUserModels as $newUserModel) { ?>
                                    <option value="<?php echo $newUserModel['id']; ?>" <?php if ($newUserModel['id'] == 3) { ?>
                                        selected
                                    <?php } ?>><?php echo $newUserModel['name']; ?></option>
                                    <?php } } ?>
                                </select>
                            </p>
                        <?php } } ?>
                    </td>
                </tr>

                <tr>
                    <th width="200" style="border:none;">&nbsp;</th>
                    <td><input class="button" type="submit" name="submit" value="<?php if ($is_syn) { ?>再次转移<?php } else { ?>开始转移<?php } ?>" />
                        <?php if ($is_syn) { ?>
                        <div class="onShow"><?php echo lang('a-user-ex-1'); ?></div>
                        <?php } ?>
                    </td>
                </tr>
            <?php } else { ?>
                <tr>
                    <th>请先完成数据库配置： </th>
                    <td>
                        <div class="onShow">复制database.ini.php为database.user.ini.php并改为《HXCMS高级版》的数据库</div>
                    </td>
                </tr>
            <?php } ?>
            </table>
		</div>
	</div>
</div>
</form>
</body>
</html>