<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $sites[$siteid]['SITE_NAME']; ?>-<?php echo lang('admin'); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" href="<?php echo ADMIN_THEME; ?>v2/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo ADMIN_THEME; ?>v2/css/bootstrap-responsive.css" />
<link rel="stylesheet" href="<?php echo ADMIN_THEME; ?>v2/css/style.css" />
<link rel="stylesheet" href="<?php echo ADMIN_THEME; ?>v2/css/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="<?php echo ADMIN_THEME; ?>images/table_form.css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dialog.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dtree.js"></script>
<script type="text/javascript">
    var mypath='<?php echo ADMIN_THEME; ?>';
    var sitepath = '<?php echo SITE_PATH;  echo ENTRY_SCRIPT_NAME; ?>';
    var finecms_admin_document = "<?php isset($data['catid']) && isset($cats[$data['catid']]['setting']['document'])?$cats[$data['catid']]['setting']['document']:'';?>";
</script>
<script type="text/javascript" src="<?php echo LANG_PATH; ?>lang.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/core.js"></script>
<script type="text/javascript">
    $(function(){
        //var is_member_hide = 0;
        if ($('#navigation').height() >= 80) {
            //$("#dr_member").hide();
            //is_member_hide = 1;
            $(".dr_module_menu").remove();
            $("#dr_select_module").show();
        }
        /*
         if ($(window).width() <= 1024) {
         if ($('.main-nav').width() > 600 && is_member_hide == 0) {
         $("#dr_top_nav").hide();
         }
         $("#dr_search_submit").hide();
         } else if ($(window).width() < 1400) {
         if ($('.main-nav').width() > 800 && is_member_hide == 0) {
         $("#dr_top_nav").hide();
         }
         }
         */
        //$("#D_M_9").html($("#dr_tree").html());
        $("#dr_select_site, #dr_select_module").bind({
            'mouseover':function(){
                $(this).addClass("open");
            },
            'mouseout':function(){
                $(this).removeClass("open");
            }
        });
        $("#dr_member").bind({
            'mouseover':function(){
                $(this).addClass("open");
            },
            'mouseout':function(){
                $(this).removeClass("open");
            }
        });
        $('.toggle-nav').click(function(e){
            e.preventDefault();
            hideNav();
        });
        wSize();
        $(".toggle-subnav").click(function (e) {
            e.preventDefault();
            var $el = $(this);
            $el.parents(".subnav").toggleClass("subnav-hidden").find('.subnav-menu,.subnav-content').slideToggle("fast");
            $el.find("i").toggleClass("icon-angle-down").toggleClass("icon-angle-right");

            if($("#left").hasClass("mobile-show") || $("#left").hasClass("sidebar-fixed")){
                getSidebarScrollHeight();
                $("#left").getNiceScroll().resize().show();
            }
        });
                $("#sitelist li").click(function(){
                    var id=$(this).attr('id');

                });
            });
            function getSidebarScrollHeight(){
                var $el = $("#left"),
                        $w = $(window),
                        $nav = $("#navigation");
                var height = $w.height();

                if(($nav.hasClass("navbar-fixed-top") && $w.scrollTop() == 0) || $w.scrollTop() == 0) height -= 40;

                if($el.hasClass("sidebar-fixed") || $el.hasClass("mobile-show")){
                    $el.height(height);
                }
            }
            function hideNav(){
                $("#left").toggle().toggleClass("forced-hide");
                if($("#left").is(":visible")) {
                    $("#main").css("margin-left", $("#left").width());
                } else {
                    $("#main").css("margin-left", 0);
                }

                if($('.dataTable').length > 0){
                    var table = $.fn.dataTable.fnTables(true);
                    if ( table.length > 0 ) {
                        $(table).each(function(){
                            if($(this).hasClass("dataTable-scroller")){
                                $(this).dataTable().fnDraw();
                            }
                        });
                        $(table).dataTable().fnAdjustColumnSizing();
                    }
                }

                if($(".calendar").length > 0){
                    $(".calendar").fullCalendar("render");
                }
            }
            if(!Array.prototype.map)
                Array.prototype.map = function(fn,scope) {
                    var result = [],ri = 0;
                    for (var i = 0,n = this.length; i < n; i++){
                        if(i in this){
                            result[ri++]  = fn.call(scope ,this[i],i,this);
                        }
                    }
                    return result;
                };

            var getWindowSize = function(){
                return ["Height","Width"].map(function(name){
                    return window["inner"+name] ||
                            document.compatMode === "CSS1Compat" && document.documentElement[ "client" + name ] || document.body[ "client" + name ]
                });
            }
            window.onload = function (){
                if(!+"\v1" && !document.querySelector) { // for IE6 IE7
                    document.body.onresize = resize;
                } else {
                    window.onresize = resize;
                }
                function resize() {
                    wSize();
                    return false;
                }
            }
            function wSize(){
                var str=getWindowSize();
                var strs= new Array(); //定义一数组
                strs=str.toString().split(","); //字符分割
                var heights = strs[0]-80,Body = $('body');$('#rightMain').height(heights);
            }
            function _M(mid, sid, url, name) {
                $('.main-nav > li, .dropdown-menu > li').removeClass("active");
                $('#_M_'+mid).addClass("active");
                $(".d_menu").hide();
                $("#D_M_"+mid).show();
                _MP(sid, url);
            }
            function _MP(id, url) {
                $("#rightMain").attr('src', url);
                $(".subnav-menu > li").removeClass("dropdown");
                $("#_MP_"+id).addClass("dropdown");
                $("#_MP_"+id).parent().show();
                $("#_MP_"+id).parent().parent().attr('class', 'subnav');
                if (url.indexOf('http') == -1) {
                    //dr_loading();
                }
            }
            function _MAP(mid, sid, url) {
                $('.main-nav > li').removeClass("active");
                $('#_M_'+mid).addClass("active");
                $(".d_menu").hide();
                $("#D_M_"+mid).show();
                dr_clear_map();
                _MP(sid, url);
            }
            function logout(){
                if (confirm("<?php echo lang('a-com-19'); ?>"))
                    top.location = '<?php echo url("admin/login/logout/"); ?>';
                return false;
            }
            function dr_get_map() {
                $("#dr_backdrop").show();
                $("#modal-map").show();
            }
            function dr_clear_map() {
                $("#dr_backdrop").hide();
                $("#modal-map").hide();
            }
</script>
</head>
<body scroll="no" style="overflow:hidden">

<div id="navigation">
    <div class="container-fluid">
        <a href="<?php echo SITE_URL; ?>" id="brand" target="_blank"><?php echo CMS_CMS; ?></a>
        <a href="javascript:;" class="toggle-nav" rel="tooltip" data-placement="bottom"><i class="icon-reorder"></i></a>
        <ul class="main-nav">
            <?php if (is_array($menu['top'])) { $count=count($menu['top']);foreach ($menu['top'] as $k=>$t) { ?>
            <li id="_M_<?php echo $k; ?>" class="<?php if ($k==0) { ?>active<?php } ?> ">
                <a href="javascript:_M(<?php echo $k; ?>,<?php echo $t['select']; ?>,'<?php echo $t['url']; ?>','<?php echo lang($t['name']); ?>')" hidefocus="true" style="outline:none;"><i class="<?php echo $t['ico']; ?>"></i>&nbsp;<span><?php echo lang($t['name']); ?></span></a></li>
            <?php } }  if (count($sites)>1 && $userinfo['site']==0) { ?>
            <li id="dr_select_site" class="">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-search"></i>&nbsp;<span><?php echo lang('a-sit-18'); ?></span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" id="sitelist" style="max-height: 420px;overflow-y: auto;overflow-x:none;">
                    <?php if (is_array($sites)) { $count=count($sites);foreach ($sites as $sid=>$t) { ?>
                    <li><a href="<?php echo url('admin', array('siteid'=>$sid)); ?>"><?php echo $t['SITE_NAME']; ?></a></li>
                    <?php } } ?>
                </ul>
            </li>
            <?php } ?>
        </ul>
        <div class="user">
            <ul class="icon-nav" id="dr_top_nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="<?php echo SITE_URL; ?>" target="_blank" title="<?php echo $SITE_NAME; ?>" id="site_homepage"><i class="icon-home"></i></a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="<?php echo url('admin/index/cache'); ?>" title="<?php echo lang('a-men-19'); ?>" target="right"><i class="icon-refresh"></i></a>
                </li>


                <li class="dropdown"><a class="dropdown-toggle" href="<?php echo url('admin/index/updatemap'); ?>" target="right"><i class="icon-sitemap"></i></a></li>

                <li class="dropdown"><a class="dropdown-toggle" href="javascript:logout();"><i class="icon-signout"></i></a></li>

                <li class="dropdown" style="margin-left:13px"><a style="width:0px;padding:0px;margin:0" class="dropdown-toggle">&nbsp;</a></li>

                <li class="dropdown"><a class="dropdown-toggle" href="http://www.HXCMS.com/free/" target="_blank"><i class="icon-cloud"></i></a></li>
                <li class="dropdown"><a class="dropdown-toggle" href="http://www.dayrui.net/forum.php?mod=forumdisplay&fid=66" target="_blank"><i class="icon-comment"></i></a></li>
                <li class="dropdown"><a class="dropdown-toggle" href="http://www.HXCMS.com/mfhelp/" target="_blank"><i class="icon-book"></i></a></li>

            </ul>
        </div>
    </div>
</div>

<div class="container-fluid" id="content">
    <div id="left">
        <?php if (is_array($menu['top'])) { $count=count($menu['top']);foreach ($menu['top'] as $k=>$t) { ?>
        <div class="d_menu" id="D_M_<?php echo $k; ?>" <?php if ($k>0) { ?>style="display:none"<?php } ?>>
            <?php if ($k==9) { ?>
                <script type="text/javascript">
                    d = new dTree('d');
                    d.add(0,-1,'栏目分类');
                    <?php if (is_array($cat)) { $count=count($cat);foreach ($cat as $t) {  if ($t[typeid]!=3) { ?>
                    d.add(<?php echo $t[catid]; ?>,<?php echo $t[parentid]; ?>,'<?php echo $t[catname]; ?>','<?php if ($t[child]) {  if ($t[typeid]==2) {  echo url('admin/content/index', array('catid'=>$t[catid],'modelid'=>$t[modelid]));  }  } else {  echo url('admin/content/index', array('catid'=>$t[catid],'modelid'=>$t[modelid]));  } ?>','','right');
                    <?php }  } } ?>
                    document.write(d);
                </script>
            <?php } else {  $_left=0; if (is_array($menu['list'][$k])) { $count=count($menu['list'][$k]);foreach ($menu['list'][$k] as $name=>$n) { ?>
                <div class="subnav  <?php if ($_left) { ?>subnav-hidden<?php } ?>">
                    <div class="subnav-title">
                        <a href="#" class="toggle-subnav"><i class="icon-angle-<?php if ($_left) { ?>right<?php } else { ?>down<?php } ?>"></i><span><?php echo lang($name); ?></span></a>
                    </div>
                    <ul class="subnav-menu" style="<?php if ($_left) { ?>display:none<?php } ?>">
                    <?php if (is_array($n)) { $count=count($n);foreach ($n as $id=>$v) {  $_left=1;?>
                    <li id="_MP_<?php echo $id; ?>" class=""><a <?php if (isset($v['url']) && $v['url']) { ?>href="javascript:_MP(<?php echo $id; ?>,'<?php echo $v['url']; ?>', '<?php echo isset($v['clz']) ? $v['clz'] : 0; ?>');"<?php } ?> hidefocus="true" style="outline:none;"><?php if (isset($v['sys'])) {  echo $v['name'];  } else {  echo lang($v['name']);  } ?></a></li>
                    <?php } } ?>
                    </ul>
                </div>
            <?php } }  } ?>
        </div>
        <?php } } ?>
    </div>
    <div id="main">
        <iframe name="right" id="rightMain" src="<?php echo url('admin/index/main'); ?>" frameborder="false" scrolling="auto" style="border:none; margin-bottom:0px;" width="100%" height="auto" allowtransparency="true"></iframe>
        <div style="background-color:#f8f8f8; height:130px; padding-top:5px; text-align:right; padding-right:10px;margin-top: -15px;font-size:13px">
           <?php echo CMS_COM; ?> &copy; 2011-<?php echo date('Y'); ?>&nbsp;&nbsp;<strong><a class="fine-cms" href="http://www.HXCMS.com/free/" target="_blank"><?php echo CMS_NAME; ?></a></strong>&nbsp;v<?php echo CMS_VERSION; ?>（<?php echo CMS_UPDATE; ?>）

        </div>
    </div>
</div>
<div id="dr_backdrop" class="modal-backdrop in hide"></div>
</body>
</html>