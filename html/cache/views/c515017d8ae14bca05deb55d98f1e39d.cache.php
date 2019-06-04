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

        <?php $return = $this->_listdata("catid=$catid page=$page order=updatetime"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
        <div class="blog-post">
            <div class="permalink">
                <h4><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></h4>
            </div>
            <ul class="post-meta">
                <li><i class="icon-time"></i> <?php echo date("Y-m-d", $t['updatetime']); ?> </li>
                <!-- Date -->
                <li><i class="icon-user"></i><a href="#"><?php echo $t[username]; ?></a></li>
                <!-- Author -->
                <li><i class="icon-tags"></i><a href="<?php echo $cats[$t[catid]][url]; ?>"><?php echo $cats[$t[catid]][catname]; ?></a></li>
                <!-- Category -->
            </ul>
            <!-- End post-meta -->
            <div class="post-intro">
                <p><?php echo $t[description]; ?></p>
            </div>
        </div>
        <?php } }  echo $pagelist; ?>
    </div>
</div>
</div>

<?php include $this->_include('footer'); ?>