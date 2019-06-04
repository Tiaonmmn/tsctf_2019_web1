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
<div id="content" style="margin-bottom: 20px;">

    <div class="container">
        <div calss="row" style="margin-bottom: 20px">
            <?php $data = getCatNav($catid);  if (is_array($data)) { $count=count($data);foreach ($data as $t) { ?>
            <a href="<?php echo $t['url']; ?>" class="button <?php if ($t['catid']==$catid) { ?>color-alt<?php } else { ?>simple-grey<?php } ?> small round"><?php echo $t['catname']; ?></a>
            <?php } } ?>
        </div>
        <ul id="portfolio-container" class="three-columns">

            <?php $return = $this->_listdata("catid=$catid page=$page order=updatetime"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
            <li class="isotope-item">
                <div class="item-wrapp">
                    <div class="portfolio-item">
                        <a href="<?php echo $t['url']; ?>" class="item-permalink"><i class="icon-link"></i></a>
                        <a href="<?php echo thumb($t['thumb']); ?>" data-rel="prettyPhoto" class="item-preview"><i class="icon-zoom-in"></i></a>
                        <img src="<?php echo thumb($t['thumb'], 290, 190); ?>" style="width: 283px;height: 190px;" alt="<?php echo $t[title]; ?>"/>
                    </div>
                    <div class="portfolio-item-title">
                        <a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a>
                    </div>
                </div>
            </li>

            <?php } } ?>
        </ul>


        <!-- Pagination -->
        <?php echo $pagelist; ?>
        <!-- End pagination -->
    </div>

</div>
<?php include $this->_include('footer'); ?>