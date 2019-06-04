

<section id="copyrights">
    <section class="container">

        <div id="copyright"><?php echo html_entity_decode($SITE_BOTTOM_INFO); ?></div>
        <div class="one-half">
            <p>
                Powered by <?php echo CMS_NAME; ?> v<?php echo CMS_VERSION; ?> .<a rel="nofollow" href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $SITE_ICP; ?></a>
            </p>
        </div>
        <div class="one-half">
            <ul class="copyright_links">
                <?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==0 && $t['ismenu']) { ?>
                <li><a href="<?php echo $t['url']; ?>"><?php echo $t['catname']; ?></a></li>
                <?php }  } } ?>
            </ul>
        </div>
    </section>
</section>
</div>
<!-- main wrapp starts-->
</div>
<!-- main container ends-->
</body>
</html>