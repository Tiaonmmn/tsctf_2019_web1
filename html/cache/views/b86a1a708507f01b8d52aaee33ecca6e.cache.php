<thead>
<tr>
    <th width="20" align="left"><input name="deletec" id="deletec" type="checkbox" onClick="setC()" /></th>
    <th width="40" align="left"><?php echo lang('a-order'); ?></th>
    <th width="40" align="left">ID </th>
    <th align="left" id="t_title"><?php echo lang('a-con-26'); ?></th>
    <th width="50" align="left"><?php echo lang('a-con-30'); ?></th>
    <th width="150" align="left"><?php echo lang('a-con-31'); ?></th>
    <th align="left"><?php echo lang('a-option'); ?></th>
</tr>
</thead>
<tbody>
<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
<tr>
    <td align="left"><input name="del_<?php echo $t['id']; ?>_<?php echo $t['catid']; ?>" type="checkbox" class="deletec" /></td>
    <td align="left"><input type="text" name="order_<?php echo $t['id']; ?>" class="input-text" style="width:25px; height:15px;" value="<?php echo $t['listorder']; ?>"></td>
    <td align="left"><?php echo $t['id']; ?></td>
    <td align="left">
        <div id="s_title" style="height:20px;overflow: hidden;">
            <a href="<?php if ($a!='index') {  echo url('admin/content/editverify',array('id'=>$t['id']));  } else {  echo url('admin/content/edit',array('id'=>$t['id']));  } ?>" title="<?php echo $t['title']; ?>"><?php echo $t['title']; ?></a>
        </div>
    </td>
    <td align="left"><a <?php if ($t['sysadd']) { ?>style="color:red;" title="<?php echo lang('a-con-35'); ?>"<?php } ?> href="<?php echo url('admin/content/index',array('kw'=>$t['username'],'modelid'=>$t['modelid'],'stype'=>($t['sysadd']?2:1))); ?>"><?php echo $t['username']; ?></a></td>
    <td align="left"><span style="<?php if (date('Y-m-d', $t['updatetime']) == date('Y-m-d')) { ?>color:#F00<?php } ?>"><?php echo date(TIME_FORMAT, $t['updatetime']); ?></span></td>
    <td align="left">
        <?php if ($a=='verify') {  $del = url('admin/content/delverify/',array('catid'=>$t['catid'],'id'=>$t['id'])); if (admin_auth($userinfo['roleid'], 'content-editverify')) { ?><a href="<?php echo url('admin/content/editverify',array('id'=>$t['id'])); ?>"><?php echo lang('a-edit'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'content-delverify')) { ?><a href="javascript:;" clz="1" onClick="if(confirm('<?php echo lang('a-confirm'); ?>')){ window.location.href='<?php echo $del; ?>'; }"><?php echo lang('a-del'); ?></a> <?php }  } else {  if (is_array($join)) { $count=count($join);foreach ($join as $j) { ?>
        <a href="<?php echo url('admin/form/list',array('cid'=>$t['id'], 'modelid'=>$j['modelid'])); ?>"><?php echo $j['modelname']; ?></a> |
        <?php } }  $del = url('admin/content/del/',array('catid'=>$t['catid'],'id'=>$t['id']));?>
        <a href="<?php echo $site_url;  echo $t['url']; ?>" clz="1" target="_blank"><?php echo lang('a-cat-23'); ?></a> |
        <?php if (admin_auth($userinfo['roleid'], 'content-edit')) { ?><a href="<?php echo url('admin/content/edit',array('id'=>$t['id'])); ?>"><?php echo lang('a-edit'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'content-duplicate')) { ?><a href="<?php echo url('admin/content/duplicate',array('id'=>$t['id'])); ?>"><?php echo lang('a-duplicate'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'content-del')) { ?><a href="javascript:;" clz="1" onClick="if(confirm('<?php echo lang('a-confirm'); ?>')){ window.location.href='<?php echo $del; ?>'; }"><?php echo lang('a-del'); ?></a> <?php }  } ?>
    </td>
</tr>
<?php } } ?>