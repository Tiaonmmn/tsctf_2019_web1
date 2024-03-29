<?php include $this->_include('header'); ?>
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dialog.js"></script>
<script type="text/javascript">var sitepath = "<?php echo SITE_PATH;  echo ENTRY_SCRIPT_NAME; ?>";</script>
<script type="text/javascript" src="<?php echo LANG_PATH; ?>lang.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/core.js"></script>

<div id="breadcrumb">
    <!-- breadcrumb starts-->
    <div class="container">
        <div class="one-half">
            <h4>我要投稿</h4>
        </div>
        <div class="one-half">
            <nav id="breadcrumbs">
                <!--breadcrumb nav starts-->
                <ul>
                    <li>您当前位置：</li>
                    <li><a  href="<?php echo SITE_PATH; ?>">首页</a> > 我要投稿</li>
                </ul>
            </nav>
            <!--breadcrumb nav ends -->
        </div>
    </div>
</div>


<div id="content">
<div class="container">
    <div class="one">
    <!--begin-->
    <div class="piclist">
		<div class="item-list" style="padding:20px;">
        	<?php if ($select) { ?>
    		<!--选择栏目的模板-->
            <form action="" method="post">
            <input name="select" type="hidden" value="1" />
              <p>无论您事实上是否在投稿之前认真阅读本文，只要您按照<?php echo $SITE_NAME; ?>成功投稿，您的行为仍然表示您无条件接受了本投稿须知。</p>
              <p><strong>一、不接受的投稿</strong><br />
                <?php echo $SITE_NAME; ?>不接受依法禁止出版、传播或者含有下列内容之一的作品：<br />
                1、反对宪法所确定的基本原则的；<br />
                2、危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；<br />
                3、损害国家荣誉和利益的；<br />
                4、煽动民族仇恨、民族歧视，破坏民族团结的；<br />
                5、破坏国家宗教政策，宣扬邪教和封建迷信的；<br />
                6、散布谣言，扰乱社会秩序，破坏社会稳定的；<br />
                7、散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；<br />
                8、侮辱或者诽谤他人，侵害他人合法权益的；<br />
                9、含有法律、行政法规禁止的其他内容的；</p>
              <p><strong>二、审稿和发表</strong><br />
                一般情况下，<?php echo $SITE_NAME; ?>编辑对每一篇作品按照规定的标准进行审阅，所有违法、重复、质量粗糙的稿件不予发布，审阅将在收到作者投稿后七个工作日内完成。</p>
              <p><strong>三、关于剽窃、抄袭</strong><br />
                1、<?php echo $SITE_NAME; ?>一经发现负有移除剽窃、抄袭作品将会删除，<?php echo $SITE_NAME; ?>对他人在网站上实施的此类侵权行为不承担法律责任，侵权的法律责任概由剽窃、抄袭者本人承担。<br />
                2、如果有用户投诉<?php echo $SITE_NAME; ?>上已发布的内容侵犯了自己的知识产权，我们会在第一时间内先删除涉嫌侵权的内容，并核实产权归属问题，请投诉人提供身份证明及版权证明。</p>
               <div style="text-align:center;padding:20px;">
               <select name="catid">
               <option> -选择投稿栏目- </option>
               <?php echo $category; ?>
               </select>
               &nbsp;<input type="submit" class="button" value="我要投稿" name="submit">
               </div>
            </form> 
            <?php } else { ?>
    		<!--投稿的模板-->
            <form action="" method="post">
			<table width="100%" class="table_form">
			<tr>
				<th width="100">投稿栏目：</th>
				<td><?php echo $cats[$catid]['catname']; ?></td>
			</tr>
            <?php if ($model['content']['title']['show']) { ?>
            <tr>
                <th><font color="red">*</font>&nbsp;<?php echo $model['content']['title']['name']; ?>：</th>
                <td><input type="text" class="input-text" size="50" id="title" value="<?php echo $data['title']; ?>" name="data[title]" onBlur="get_kw()" required />
                <div class="onShow" id="title_text"></div></td>
            </tr>
            <?php }  if ($model['content']['keywords']['show']) { ?>
            <tr>
                <th><?php echo $model['content']['keywords']['name']; ?>：</th>
                <td><input type="text" class="input-text" size="50" id="keywords" value="<?php echo $data['keywords']; ?>" name="data[keywords]" />
                <div class="onShow"><?php echo lang('a-con-44'); ?></div></td>
            </tr>
            <?php }  if ($model['content']['thumb']['show']) { ?>
            <tr>
                <th><?php echo $model['content']['thumb']['name']; ?>：</th>
                <td><input type="text" class="input-text" size="50" value="<?php echo $data['thumb']; ?>" name="data[thumb]" id="thumb" />
                <input type="button" style="width:66px;cursor:pointer;" class="button" onClick="preview('thumb')" value="<?php echo lang('a-mod-118'); ?>">
                <input type="button" style="width:66px;cursor:pointer;" class="button" onClick="uploadImage('thumb', 1)" value="<?php echo lang('a-mod-119'); ?>">
                <div id="urlTip" class="onShow"><?php echo lang('a-pic'); ?></div></td>
            </tr>
            <?php }  if ($model['content']['description']['show']) { ?>
            <tr>
                <th><?php echo $model['content']['description']['name']; ?>：</th>
                <td><textarea style="width:490px;height:66px;" id="description" name="data[description]"><?php echo $data['description']; ?></textarea></td>
            </tr>
            <?php }  echo $data_fields; ?>
			<tr>
				<th>验证码：</th>
				<td><input name="code" type="text" class="input-text" size=10 /><img id="code" src="<?php echo url("api/captcha/", array("width"=>80, "height"=>28)); ?>" align="absmiddle" title="看不清楚？换一张" onclick="document.getElementById('code').src='<?php echo url("api/captcha/", array("width"=>80, "height"=>28)); ?>&'+Math.random();" style="cursor:pointer;" /></td>
			</tr>
			<tr>
				<th style="border:none">&nbsp;</th>
				<td style="border:none"><input type="submit" class="button" value="提 交" name="submit"></td>
			</tr>
			</table>
			</form>
            <?php } ?>
        </div>
    </div>
    <!--end-->
</div>
</div>
</div>
<?php include $this->_include('footer'); ?>