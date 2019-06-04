<?php $meta_title="提示信息";  include $this->_include('header'); ?>
<div id="breadcrumb">
    <!-- breadcrumb starts-->
    <div class="container">
        <div class="one-half">
            <h4><?php echo $catname; ?></h4>
        </div>
        <div class="one-half">
            <nav id="breadcrumbs">
                <!--breadcrumb nav starts-->
                <ul>
                    <li>您当前位置：</li>
                    <li><a  href="<?php echo SITE_PATH; ?>">首页</a> > 提示信息</li>
                </ul>
            </nav>
            <!--breadcrumb nav ends -->
        </div>
    </div>
</div>
<style type="text/css">
<!--
.content{ 
    padding:46px 10px 10px 10px; font-size:14px; height:64px; text-align:center;
}
.bottom{
    background:#e4ecf7; margin: 0 1px 1px 1px;line-height:26px; *line-height:30px; height:26px; text-align:center
}
-->
</style>
<div id="content" style="margin-bottom:100px;margin-top:100px;">
    <div class="container">
        <div class="one">
            <!--begin-->
            <div class="item-list">
                <div class="title">提示信息</div>
                <div class="content"><?php echo $msg; ?></div>
                <div class="bottom">
                <?php if ($url) { ?>
                    <a href="<?php echo $url; ?>">如果您的浏览器没有自动跳转，请点击这里</a>
                <meta http-equiv="refresh" content="<?php echo $time; ?>; url=<?php echo $url; ?>">
                <?php } else {  if ($i) { ?><a href="javascript:history.back();" >[点这里返回上一页]</a><?php }  } ?>
                </div>
            </div>
            <!--end-->
        </div>
    </div>
</div>
<?php include $this->_include('footer'); ?>