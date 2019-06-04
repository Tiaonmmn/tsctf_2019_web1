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
    <!--栏目循环 begin-->
    <?php $i=0; ?><!--循环控制变量-->
    <?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $c) { ?><!--循环子栏目且为内部栏目-->
    <?php if ($c['parentid']==$catid && $c['typeid']==1) { ?><!--判断当前栏目的子栏目并且循环该栏目的子栏目-->
    <?php if ($i%2==0) { ?><!--分两栏显示--><div class="container"><?php } ?>
    <div class="one-half">
        <div class=" myrow">
            <h4><a href="<?php echo $c['url']; ?>"><?php echo $c['catname']; ?></a></h4>
            <ul>
                <?php $return = $this->_listdata("catid=$c[catid] page=$page num=9 cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                <li><span id="date">(<?php echo date("m-d", $t['updatetime']); ?>)</span><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></li>
                <?php } } ?>
            </ul>
        </div>
    </div>
    <?php if ($i%2==1) { ?><!--最后一栏换行--></div><?php }  $i++;  }  } }  if ($i%2==1) { ?><!--如果栏目数不是偶数，就结束div盒--></div><?php } ?>
    <!--栏目循环 end-->
</div>


<?php include $this->_include('footer'); ?>