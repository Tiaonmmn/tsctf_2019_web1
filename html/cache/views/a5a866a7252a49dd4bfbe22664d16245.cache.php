<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<link href="<?php echo ADMIN_THEME; ?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/switchbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dialog.js"></script>
</head>
<body>
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
    </div>
</div>
<style type="text/css">
.sbul{ margin:10px;}
.sbul li{ line-height:30px;}
.button{ margin-top:20px;}
.subnav,.ifm{ display:none;}
html{ _overflow-y:scroll}
</style>
<div class="pad-10">


    <div class="bk10"></div>
    <div class="explain-col">
        <font color="red"><b>缓存更新完成之后，请按F5刷新整个页面。</b></font>
    </div>
    <div class="bk10"></div>
    <div class="table-list">
        <table width="100%" id="dr_result">
            <?php if (is_array($caches)) { $count=count($caches);foreach ($caches as $cache) { ?>
            <tr>
                <td width="200" style="height:15px;line-height:15px;padding:0" align="left">
                    <?php
                    if (isset($cache[3])) {
                    $msg = lang('a-ind-' . $cache[0]) . $cache[3]['text'];
                    } else {
                    $msg = lang('a-ind-' . $cache[0]);
                    }
                    $id++;
                     echo $msg; ?>
                </td>
                <td align="left" id="dr_cache_<?php echo $cache[0]; ?>_<?php echo $cache[3][site]; ?>">
                    ....
                </td>
            </tr>
            <?php } } ?>
        </table>
    </div>

</div>
<script type="text/javascript">
<?php if (is_array($caches)) { $count=count($caches);foreach ($caches as $cache) { ?>
    $.ajax({
        type: "GET",
        url: "<?php echo url('admin/'.$cache[1].'/'.$cache[2]); ?>&siteid=<?php echo $cache[3][site]; ?>&"+Math.random(),
        contentType: "application/json; charset=utf-8",
        dataType: "text",
        success: function (data) {
            $("#dr_cache_<?php echo $cache[0]; ?>_<?php echo $cache[3][site]; ?>").html("<font color=green>√</font>");
        }
    });
<?php } } ?>
$.ajax({
    type: "GET",
    url: "<?php echo url('admin/index/cache'); ?>&show=1&"+Math.random(),
    contentType: "application/json; charset=utf-8",
    dataType: "text",
    success: function (data) {
        $("#dr_cache_<?php echo $cache[0]; ?>").html("<font color=green>√</font>");
    }
});
</script>
</body>
</html>