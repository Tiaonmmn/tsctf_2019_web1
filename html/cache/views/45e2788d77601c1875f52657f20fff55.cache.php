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
	<?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $c) {  if ($c['parentid']==$catid && $c['typeid']==1) { ?>
	<div class="container">
		<div calss="row" style="margin-bottom: 20px">
			<a href="<?php echo $c['url']; ?>" class="button color-alt small round"><?php echo $c['catname']; ?></a>
		</div>
		<ul id="portfolio-container" class="three-columns">
			<?php $return = $this->_listdata("catid=$c[catid] order=updatetime num=6"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
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
	</div>
	<?php }  } } ?>
	<!--栏目循环 end-->
</div>

<?php include $this->_include('footer'); ?>