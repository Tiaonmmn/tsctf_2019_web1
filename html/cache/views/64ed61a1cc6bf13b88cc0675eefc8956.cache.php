<?php include $this->_include('header.html'); ?>
<div id="layerslider">
    <!--layer slider starts-->
    <div class="slider-shadow-top">
    </div>
    <div class="slider-shadow-bottom">
    </div>
    <div class="ls-layer" style="slidedirection: top; slidedelay: 6000; durationin: 1500; durationout: 1500; delayout: 500;">
        <img src="<?php echo SITE_THEME; ?>images/1.png" class="ls-bg" alt="">
    </div>
    <div class="ls-layer" style="slidedirection: right; slidedelay: 5000; durationin: 1500; durationout: 1500;">
        <img src="<?php echo SITE_THEME; ?>images/2.png" class="ls-bg" alt="">
    </div>
</div>
<div id="content">
    <div class="home-intro">
        <div class="container">
            <div class="three-fourth">
                <h4>HXCMS企业管理系统</h4>
                <p>
                    业界真正的免费开源软件，无任何版权限制
                </p>
            </div>
            <div class="one-fourth">
                <a href="http://www.HXCMS.com/free/" class="button grey huge round">查看详情</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="one-third">
            <div class="feature-block"><!-- features blocks starts -->
                <div class="feature-block-title">
                    <h4>免费开源</h4>
                </div>
                <p>HXCMS企业网站管理系统将永久真正的免费并彻底的开放所有源代码，所有功能免费开放。</p>
            </div>
        </div>
        <div class="one-third">
            <div class="feature-block">
                <div class="feature-block-title">
                    <h4>无版权限制</h4>
                </div>
                <p>HXCMS企业网站管理系统作为公益产品，无版权限制，无论是个人或企业都可以修改版权。 </p>
            </div>
        </div>
        <div class="one-third">
            <div class="feature-block">
                <div class="feature-block-title">
                    <h4>经验丰富的开发团队</h4>
                </div>
                <p>我们凭借在互联网行业积累的强大技术底蕴，持续为客户提供优秀可靠的产品和服务。</p>
            </div>
        </div><!--features block ends-->
    </div>
    <div class="intro-features">
    <!--栏目循环 begin-->
    <?php $i=0; ?><!--循环控制变量-->
    <?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $c) { ?><!--循环子栏目且为内部栏目-->
    <?php if ($c['parentid']==0 && $c['typeid']==1) { ?><!--判断当前栏目的子栏目并且循环该栏目的子栏目-->
    <?php if ($i%2==0) { ?><!--分两栏显示--><div class="container"><?php } ?>
    <div class="one-half">
        <div class=" myrow">
            <h4><?php echo $c['catname']; ?></h4>
            <ul>
                <?php $return = $this->_listdata("catid=$c[catid] num=5 cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                <li><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></li>
                <?php } } ?>
            </ul>
        </div>
    </div>
    <?php if ($i%2==1) { ?><!--最后一栏换行--></div><?php }  $i++;  }  } }  if ($i%2==1) { ?><!--如果栏目数不是偶数，就结束div盒--></div><?php } ?>
    <!--栏目循环 end-->
    </div>
    <div class=" clients-wrapp">
        <div class="container">
            <?php if (plugin('link')) { ?> <!--判断友情链接插件是否存在，若存在就执行下面的-->
            <div class="flexslider clients-slider "><!-- flex slider starts -->
                <ul class="slides client-block">
                    <li>
                        <?php $return = $this->_listdata("table=link.link order=listorder_asc cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?><!--循环输出友情链接数据，list教程有详细介绍-->
                        <div class="one-fifth">
                            <a href="<?php echo $t['url']; ?>" target="_blank" title="<?php echo $t['introduce']; ?>" class="tooltip"><img src="<?php echo image($t[logo]); ?>" alt="<?php echo $t['name']; ?>"/></a>
                        </div>
                        <?php } } ?>
                    </li>
                </ul>
            </div><!-- flex slider ends -->
            <?php } ?>
        </div>
    </div>
</div>
<?php include $this->_include('footer.html'); ?>
