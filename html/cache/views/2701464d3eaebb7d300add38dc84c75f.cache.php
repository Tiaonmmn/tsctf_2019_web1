<?php include $this->_include('header'); ?>
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
                    <li><a  href="<?php echo SITE_PATH; ?>">首页</a> > <?php echo catpos($catid, ' &gt;&nbsp;&nbsp;'); ?></li>
                </ul>
            </nav>
            <!--breadcrumb nav ends -->
        </div>
    </div>
</div>

<div id="content">
<div class="container">
    <div class="one">
        <div class="one-fourth sidebar">
            <div class="widget">
                <?php $Pcat = getParentData($catid);  if ($Pcat) { ?>
                <h4 class="widget-title"><?php echo $Pcat['catname']; ?></h4>
                <ul class="sidebar-nav">

                    <?php $data = getCatNav($catid);  if (is_array($data)) { $count=count($data);foreach ($data as $t) { ?>
                    <li><a <?php if ($t['catid']==$catid) { ?> style="font-weight: bold"<?php } ?> href="<?php echo $t['url']; ?>"><i class="icon-angle-right"></i> <?php echo $t['catname']; ?></a></li>
                    <?php } } ?>
                </ul>
                <?php } else { ?>
                <h4 class="widget-title"><?php echo $catname; ?></h4>
                <?php } ?>
            </div>
        </div>
        <div class="three-fourth">

            <?php echo $content; ?>
            <!--文章内容分页 begin-->
            <?php if ($contentpage) { ?>
            <div class="cpage">
                <?php if (is_array($contentpage)) { $count=count($contentpage);foreach ($contentpage as $i=>$u) { ?>
                <a<?php if ($page!=$i) { ?> href="<?php echo $u; ?>"<?php } ?>><?php echo $i; ?></a>
                <?php } } ?>
            </div>
            <div class="clear blank10"></div>
            <?php } ?>
            <!--文章内容分页 end-->
        </div>
    </div>
</div>
</div>



<?php include $this->_include('footer'); ?>