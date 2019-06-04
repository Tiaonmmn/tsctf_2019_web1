<?php include $this->_include('header');  //自定义URL函数,网站上线后请将函数放在自定义函数库文件中,就可以随便更改url规则
function list_url($param, $name=NULL, $value=NULL) {
    unset($param['page']);
    if (!is_null($name) && !is_null($value)) {
        $param[$name] = $value;
    } elseif (!is_null($name) && is_null($value)) {
        unset($param[$name]);
    }
    /*这是伪静态url地址
    $url  = SITE_PATH;
    $url .= 'area-' . $param['area'];
    $url .= '-room-' . $param['room'];
    $url .= '-price-' . $param['price'];
    if ($name=='page')$url .= '-page-' . $value;
    */
    $url  = url('content/list', $param);//动态地址
    return $url;
}
?>

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
        <div calss="row">

            <div class="select-list">
                <p>
                    <a href="<?php echo list_url($param, 'area', 0); ?>" class="h4 <?php if (empty($param['area'])) { ?>b<?php } ?>">地区：</a>
                    <?php $list = linkagelist(1, $param['area']); ?><!--调用联动菜单id为1（地区）的列表数据-->
                    <?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
                    <a href="<?php echo list_url($param, 'area', $t['id']); ?>" class="button <?php if ($param['area']==$t['id']) { ?>color-alt <?php } else { ?>simple-grey<?php } ?> small round"><?php echo $t['name']; ?></a>
                    <?php } } ?>
                </p>
                <p>
                    <a href="<?php echo list_url($param, 'room', ''); ?>"  class="h4 <?php if (empty($param['room'])) { ?>b<?php } ?>">厅室：</a>
                    <?php $bedroom_rang = array('一室'=>'1','两室'=>'2','三室'=>'3','四室以上'=>'4_100'); ?><!--手动控制厅室循环-->
                    <?php if (is_array($bedroom_rang)) { $count=count($bedroom_rang);foreach ($bedroom_rang as $k=>$t) { ?>
                    <a href="<?php echo list_url($param, 'room', $t); ?>" class="button <?php if ($param['room']==$t) { ?>color-alt <?php } else { ?>simple-grey<?php } ?> small round"><?php echo $k; ?></a>
                    <?php } } ?>
                </p>
                <p>
                    <a href="<?php echo list_url($param, 'price', ''); ?>"  class="h4 <?php if (empty($param['price'])) { ?>b<?php } ?>">租金：</a>
                    <?php $price_rang = array('500元以下'=>'0_500','500-1000元'=>'500_1000','1000-1500元'=>'1000_1500','1500-2000元'=>'1500_2000','2000-4500元'=>'2000_4500','4500元以上'=>'4500_99999'); ?><!--手动控制价格循环-->
                    <?php if (is_array($price_rang)) { $count=count($price_rang);foreach ($price_rang as $k=>$t) { ?>
                    <a href="<?php echo list_url($param, 'price', $t); ?>"  class="button <?php if ($param['price']==$t) { ?>color-alt <?php } else { ?>simple-grey<?php } ?> small round"><?php echo $k; ?></a>
                    <?php } } ?>
                </p>
            </div>

            <!--根据url参数的地区id来判断sql查询区域id-->
            <?php $data = linkagedata(1, $param['area']);$quyu=$data['arrchilds'] ? @implode(',',$data['arrchilds']) : $data['id']; ?>
            <!--url分页规则-->
            <?php $rule = list_url($param, 'page', '[page]');  $return = $this->_listdata("catid=$catid INquyu=$quyu BWzujin=$param[price] shi=$param[room] page=$page pagesize=$pagesize urlrule=$rule order=updatetime more=1"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
            <!--urlrule表示按照本页的分页规则，more=1表示显示自定义字段内容，参考list教程-->
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
                    <p class="dec">租金：￥<?php echo $t['zujin']; ?>元（<?php echo $t['zujinleixing']; ?>），小区：<?php echo $t['xiaoqu']; ?>，<?php echo $t['shi']; ?>室，<?php echo $t['ting']; ?>厅，<?php echo $t['wei']; ?>卫，楼层<?php echo $t['louceng']; ?>/<?php echo $t['zongceng']; ?>。</p>
                    <p><?php echo $t[description]; ?></p>
                </div>
            </div>
            <?php } }  echo $pagelist; ?>

        </div>
    </div>
</div>


<?php include $this->_include('footer'); ?>