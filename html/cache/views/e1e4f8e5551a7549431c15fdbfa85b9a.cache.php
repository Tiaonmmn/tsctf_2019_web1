<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo ADMIN_THEME; ?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/switchbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dialog.js"></script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="bk10"></div>
	<div class="explain-col">
		<form action="" method="post">
		<?php echo lang('a-att-30'); ?>： <input type="text" class="input-text" size="40" name="kw"><input type="submit" class="button" value="<?php echo lang('a-search'); ?>" name="submit">
		</form>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<table width="100%" cellspacing="0" id="imgPreview">
		<tbody>
		<tr>
		    <td align="left"><?php echo lang('a-att-4'); ?>：<?php echo $dir; ?></td><td></td>
		</tr>
		<?php if ($istop) { ?>
		<tr>
		    <td align="left"><a href="<?php echo $pdir; ?>"><img src="<?php echo ADMIN_THEME; ?>images/folder-closed.gif"><?php echo lang('a-att-5'); ?></a></td><td></td>
		</tr>
		<?php }  if (is_array($list)) { $count=count($list);foreach ($list as $k=>$t) { ?>
		<script type="text/javascript">
		function fileview_<?php echo $k; ?>() {
			var content = "<?php echo lang('a-att-6'); ?>：<?php echo $t['fileinfo']['path']; ?><br><?php echo lang('a-att-7'); ?>：<?php echo $t['fileinfo']['time']; ?><br><?php echo lang('a-att-8'); ?>：<?php echo $t['fileinfo']['size']; ?><br><?php echo lang('a-att-9'); ?>：<?php echo $t['fileinfo']['ext']; ?> &nbsp;&nbsp;<a href='<?php echo $t['fileinfo']['path']; ?>' target=_blank><?php echo lang('a-att-10'); ?></a>";
			window.top.art.dialog({title:'<?php echo lang('a-att-11'); ?>',fixed:true, content: content});
		}
		</script>
		<tr>
			<td align="left">
			<input name="id" id="thumb_<?php echo $k; ?>" type="hidden" value="<?php echo $dir;  echo $t['name']; ?>">
			<img src="<?php echo ADMIN_THEME; ?>images/ext/<?php echo $t['ico']; ?>">&nbsp;<a href="<?php if ($t['url']) {  echo $t['url'];  } else {  if ($t['isimg']) { ?>javascript:preview('thumb_<?php echo $k; ?>');<?php } else { ?>javascript:fileview_<?php echo $k; ?>();<?php }  } ?>" <?php if ($t['isimg']) { ?>rel="<?php echo $dir;  echo $t['name']; ?>" title="<?php echo $t['name']; ?>"<?php } ?>><?php echo $t['name']; ?></a></td>
			<td width="30%">
			<?php if (!$t['isdir']) { ?><a onClick="<?php if ($t['isimg']) { ?>preview('thumb_<?php echo $k; ?>')<?php } else { ?>fileview_<?php echo $k; ?>()<?php } ?>" href="javascript:;"><?php echo lang('a-att-12'); ?></a> | <?php } ?>
			<a onClick="copyToClipboard('<?php echo $dir;  echo $t['name']; ?>')" href="javascript:;"><?php echo lang('a-att-13'); ?></a> 
			<?php if (admin_auth($userinfo['roleid'], 'attachment-del')) { ?>
			| 
			<a onClick="del('<?php echo $t['dir']; ?>',<?php echo $t['isdir']; ?>)" href="javascript:;"><?php echo lang('a-del'); ?></a>
			<?php } ?>
			</td>
		</tr>
		<?php } } ?>
		</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
(function(c){c.expr[':'].linkingToImage=function(a,g,e){return!!(c(a).attr(e[3])&&c(a).attr(e[3]).match(/\.(gif|jpe?g|png|bmp)$/i))};c.fn.imgPreview=function(j){var b=c.extend({imgCSS:{},distanceFromCursor:{top:10,left:10},preloadImages:true,onShow:function(){},onHide:function(){},onLoad:function(){},containerID:'imgPreviewContainer',containerLoadingClass:'loading',thumbPrefix:'',srcAttr:'href'},j),d=c('<div/>').attr('id',b.containerID).append('<img/>').hide().css('position','absolute').appendTo('body'),f=c('img',d).css(b.imgCSS),h=this.filter(':linkingToImage('+b.srcAttr+')');function i(a){return a.replace(/(\/?)([^\/]+)$/,'$1'+b.thumbPrefix+'$2')}if(b.preloadImages){(function(a){var g=new Image(),e=arguments.callee;g.src=i(c(h[a]).attr(b.srcAttr));g.onload=function(){h[a+1]&&e(a+1)}})(0)}h.mousemove(function(a){d.css({top:a.pageY+b.distanceFromCursor.top+'px',left:a.pageX+b.distanceFromCursor.left+'px'})}).hover(function(){var a=this;d.addClass(b.containerLoadingClass).show();f.load(function(){d.removeClass(b.containerLoadingClass);f.show();b.onLoad.call(f[0],a)}).attr('src',i(c(a).attr(b.srcAttr)));b.onShow.call(d[0],a)},function(){d.hide();f.unbind('load').attr('src','').hide();b.onHide.call(d[0],this)});return this}})(jQuery);
$(function(){
	var obj=$("#imgPreview a[rel]");
	if(obj.length>0) {
		$('#imgPreview a[rel]').imgPreview({
			srcAttr: 'rel',
			imgCSS: { width: 200 }
		});
	}
});	
function del(name, id){
	var msg = '';
	if(id==1) {
		msg = '<?php echo lang('a-att-14'); ?>';
	} else {
		msg = '<?php echo lang('a-att-15'); ?>';
	}
	if(confirm(msg)){
		var url = "<?php echo url('admin/attachment/del/',array('name'=>'')); ?>"+name;
		window.location.href=url;
	}
}
function preview(obj) {
	var filepath = $('#'+obj).val();
	if (filepath) {
		var content = '<img src="<?php echo SITE_PATH; ?>'+filepath+'" onload="if(this.width>$(window).width()/2)this.width=$(window).width()/2;" />';
	} else {
		var content = '<?php echo lang('a-att-16'); ?>';
	}
	window.top.art.dialog({title:'<?php echo lang('a-att-17'); ?>',fixed:true, content: content});
}
function copyToClipboard(meintext) {
    if (window.clipboardData){
        window.clipboardData.setData("Text", meintext);
    } else if (window.netscape){
        try {
            netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
        } catch (e) {
            alert("<?php echo lang('a-att-18'); ?>"); 
		} 
        var clip = Components.classes['@mozilla.org/widget/clipboard;1'].
        createInstance(Components.interfaces.nsIClipboard);
        if (!clip) return;
        var trans = Components.classes['@mozilla.org/widget/transferable;1'].
        createInstance(Components.interfaces.nsITransferable);
        if (!trans) return;
        trans.addDataFlavor('text/unicode');
        var len = new Object();
        var str = Components.classes["@mozilla.org/supports-string;1"].
        createInstance(Components.interfaces.nsISupportsString);
        var copytext=meintext;
        str.data=copytext;
        trans.setTransferData("text/unicode",str,copytext.length*2);
        var clipid=Components.interfaces.nsIClipboard;
        if (!clip) return false;
        clip.setData(trans,null,clipid.kGlobalClipboard);
    }
    alert("<?php echo lang('a-att-19'); ?>");
    return false;
}
</script>
</body>
</html>