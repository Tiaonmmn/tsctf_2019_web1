<?php include $this->_include('header'); ?>
<div id="breadcrumb">
    <!-- breadcrumb starts-->
    <div class="container">
        <div class="one-half">
            <h4><?php echo $cat[catname]; ?></h4>
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
        <div class="three-fourth">

            <div class="blog-post">
                <div class="permalink">
                    <h4><?php echo $title; ?></h4>
                </div>
                <ul class="post-meta">
                    <li><i class="icon-time"></i> <?php echo date("Y-m-d H:i:s", $updatetime); ?> </li>
                    <!-- Date -->
                    <li><i class="icon-user"></i><a href="#"><?php echo $username; ?></a></li>
                    <!-- Author -->
                    <li><i class="icon-thumbs-up"></i><a href="#"><script type="text/javascript" src="<?php echo url('api/hits',array('id'=>$id, 'hits'=>$hits)); ?>"></script></a></li>
                    <!-- Category -->
                </ul>
                <!-- End post-meta -->
                <div class="post-intro">
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
                    <!--标签关键字 begin-->
                    <?php if ($kws=get_tag_data($keywords)) { ?>
                    <div class="articlekey"><strong>TAG：</strong>
                        <?php if (is_array($kws)) { $count=count($kws);foreach ($kws as $t) { ?>
                        <a href="<?php echo tag_url($t); ?>"><?php echo $t; ?></a>
                        <?php } } ?>
                    </div>
                    <?php } ?>
                    <!--标签关键字 end-->
                </div>
                <div class="horizontal-line">
                </div>
                <div class="articlebook">
                    <?php if ($prev_page) { ?><p><strong>上一篇：</strong><a href="<?php echo $prev_page['url']; ?>"><?php echo $prev_page['title']; ?></a> </p><?php }  if ($next_page) { ?><p><strong>下一篇：</strong><a href="<?php echo $next_page['url']; ?>"><?php echo $next_page['title']; ?></a> </p><?php } ?>
                </div>
                <?php if (plugin('digg')) { ?><div class="clear blank10"></div><script type="text/javascript" src="<?php echo url('digg/index/show', array('id'=>$id)); ?>"></script><?php }  if (plugin('mood')) { ?><div class="clear blank10"></div><script type="text/javascript" src="<?php echo url('mood/index/show', array('id'=>$id)); ?>"></script><?php }  if ($commentCfg) { ?>
                <!-- 多说评论框 start -->
                <div class="ds-thread" data-thread-key="<?php echo $id; ?>" data-title="<?php echo $title; ?>" data-url="<?php echo $pageurl; ?>"></div>
                <!-- 多说评论框 end -->
                <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
                <script type="text/javascript">
                    var duoshuoQuery = {short_name:"dayruicms"};
                    (function() {
                        var ds = document.createElement('script');
                        ds.type = 'text/javascript';ds.async = true;
                        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                        ds.charset = 'UTF-8';
                        (document.getElementsByTagName('head')[0]
                        || document.getElementsByTagName('body')[0]).appendChild(ds);
                    })();
                </script>
                <!-- 多说公共JS代码 end -->
                <?php } ?>


            </div>


        </div>

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
            <div class="widget">
                <h4 class="widget-title">热门TAG</h4>
                <ul class="popular-tags">
                    <?php $return = $this->_listdata("action=tag catid=$catid num=20"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                    <li><a href="<?php echo $t[url]; ?>"><i class="icon-tag"></i><?php echo $t[name]; ?></a></li>
                    <?php } } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<?php include $this->_include('footer'); ?>