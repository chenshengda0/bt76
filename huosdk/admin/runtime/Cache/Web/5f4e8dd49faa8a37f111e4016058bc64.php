<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<script type="text/javascript">
//全局变量
var GV = {
		DIMAUB : "/",
		JS_ROOT : "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/wind.js"></script>
    <script src="/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<script src="/public/select2/js/select2.min.js"></script>
<link href="/public/select2/css/select2.min.css" rel="stylesheet"
	type="text/css">
<script>
	$(document).ready(function() {
		$(".select_2").select2();
	});
</script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
</head>
<body class="J_scroll_fixed" >
	<div class="wrap jj" >
		<ul class="nav nav-tabs" >
			<li class="active" ><a href="<?php echo U('Admin/Indexmanage/IndexModify');?>" >首页控制</a ></li >
		</ul >
		<div class="common-form" >
			<form method="post" enctype="multipart/form-data" class="form-horizontal js-ajax-form"
                  action="<?php echo U('Indexmanage/indexModify_post');?>" >
				<fieldset >
					<div class="control-group" >
						<label class="control-label" >轮播图一:</label >
						<div class="controls" >
							<input type="file" class="input" name="imagea" ><font color="red" >*图片大小为1920*400</font >
							<br >
							<?php if(!empty($indexdata[1][img])): ?><img src="/upload//image/<?php echo ($indexdata[1][img]); ?>" width="240" height="50" ><?php endif; ?>
						</div >
					</div >
					<div class="control-group" >
						<label class="control-label" >主题:</label >
						<div class="controls" >
							<input type="text" class="input" name="title[]" value="<?php echo ($indexdata[1][title]); ?>" >
						</div >
					</div >
					<div class="control-group" >
						<label class="control-label" >路径:</label >
						<div class="controls" >
							<input type="text" class="input" name="url[]" value="<?php echo ($indexdata[1][url]); ?>" >
						</div >
					</div >
					<div class="control-group" >
						<label class="control-label" >轮播图二:</label >
						<div class="controls" >
							<input type="file" class="input" name="imageb" ><font color="red" >*图片大小为1920*400</font >
							<br >
							<?php if(!empty($indexdata[2][img])): ?><img src="/upload//image/<?php echo ($indexdata[2][img]); ?>" width="240" height="50" ><?php endif; ?>
						</div >
					</div >
					<div class="control-group" >
						<label class="control-label" >主题:</label >
						<div class="controls" >
							<input type="text" class="input" name="title[]" value="<?php echo ($indexdata[2][title]); ?>" >
						</div >
					</div >
					<div class="control-group" >
						<label class="control-label" >路径:</label >
						<div class="controls" >
							<input type="text" class="input" name="url[]" value="<?php echo ($indexdata[2][url]); ?>" >
						</div >
					</div >
					<div class="control-group" >
						<label class="control-label" >轮播图三:</label >
						<div class="controls" >
							<input type="file" class="input" name="imagec" ><font color="red" >*图片大小为1920*400</font >
							<br >
							<?php if(!empty($indexdata[3][img])): ?><img src="/upload//image/<?php echo ($indexdata[3][img]); ?>" width="240" height="50" ><?php endif; ?>
						</div >
					</div >
					<div class="control-group" >
						<label class="control-label" >主题:</label >
						<div class="controls" >
							<input type="text" class="input" name="title[]" value="<?php echo ($indexdata[3][title]); ?>" >
						</div >
					</div >
					<div class="control-group" >
						<label class="control-label" >路径:</label >
						<div class="controls" >
							<input type="text" class="input" name="url[]" value="<?php echo ($indexdata[3][url]); ?>" >
						</div >
					</div >
					<div class="control-group" >
						<label class="control-label" >轮播图四:</label >
						<div class="controls" >
							<input type="file" class="input" name="imaged" ><font color="red" >*图片大小为1920*400</font >
							<br >
						<?php if(!empty($indexdata[4][img])): ?><img src="/upload//image/<?php echo ($indexdata[4][img]); ?>" width="240" height="50" ><?php endif; ?>
						</div >
					</div >
					<div class="control-group" >
						<label class="control-label" >主题:</label >
						<div class="controls" >
							<input type="text" class="input" name="title[]" value="<?php echo ($indexdata[4][title]); ?>" >
						</div >
					</div >
					<div class="control-group" >
						<label class="control-label" >路径:</label >
						<div class="controls" >
							<input type="text" class="input" name="url[]" value="<?php echo ($indexdata[4][url]); ?>" >
						</div >
					</div >
				</fieldset >
				<input type="hidden" class="input" name="action" value="index" >
				<div class="form-actions" >
					<button type="submit" class="btn btn-primary btn_submit js-ajax-submit" >提交</button >
				</div >
			</form >
		</div >
	</div >
	<script src="/public/js/common.js" ></script >
	
</body >
</html>