
<div id="footer">
  <p><a href="<?php echo SITE_URL; ?>"><span>首页</span></a>
    <?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==0 && $t['ismenu']) { ?>
    <a href="<?php echo $t['url']; ?>"><span><?php echo $t['catname']; ?></span></a>
    <?php }  } } ?>
  </p>
  <p>Powered by <?php echo CMS_NAME; ?> v<?php echo CMS_VERSION; ?> © 2012,Processed in <?php echo runtime(); ?> second(s).</p>
</div>
</body>
</html>