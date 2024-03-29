<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/H-ui/lib/html5.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/respond.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>基本设置</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 基本设置 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add">
		<div id="tab-system" class="HuiTab">
			<div class="tabBar cl"><span>基本设置</span><span>安全设置</span> <span>短信设置</span> <!--<span>邮件设置</span>--></div>
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>网站开关：</label>
					<div class="formControls col-xs-8 col-sm-9">
					<label>
                                            <input name="onoff" type="radio" id="six_1" value="1"   <?php if($config["onoff"] == 1): ?>checked<?php endif; ?> >
                                          开启</label>
                                           <label>
                                       <input type="radio" name="onoff" value="0" id="six_0" <?php if($config["onoff"] == 0): ?>checked<?php endif; ?>>
                                       关闭</label>（关闭后，前台不能登录）
					</div>
				</div>
                            <div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>网站超时开关：</label>
					<div class="formControls col-xs-8 col-sm-9">
					<label>
                                            <input name="chaoshi" type="radio" id="six_1" value="1"   <?php if($config["chaoshi"] == 1): ?>checked<?php endif; ?> >
                                          开启</label>
                                           <label>
                                       <input type="radio" name="chaoshi" value="0" id="six_0" <?php if($config["chaoshi"] == 0): ?>checked<?php endif; ?>>
                                       关闭</label>
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>网站域名：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-title" placeholder="www.uicic.com" value="<?php echo ($config["weburl"]); ?>" class="input-text weburl">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>网站名称：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-title" placeholder="控制在25个字、50个字节以内" value="<?php echo ($config["webname"]); ?>" class="input-text webname">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>关键字：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-Keywords" placeholder="5个左右,8汉字以内,用英文,隔开" value="<?php echo ($config["title"]); ?>" class="input-text title">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>关键词：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-Keywords" placeholder="5个左右,8汉字以内,用英文,隔开" value="<?php echo ($config["keywords"]); ?>" class="input-text keywords">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>描述：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-description" placeholder="空制在80个汉字，160个字符以内" value="<?php echo ($config["description"]); ?>" class="input-text description">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>底部版权信息：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-copyright" placeholder="&copy; 2016 uicic.com" value="<?php echo ($config["copyright"]); ?>" class="input-text copyright">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">备案号：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-icp" placeholder="京ICP备00000000号" value="<?php echo ($config["icp"]); ?>" class="input-text icp">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">统计代码：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<textarea class="textarea cnzz" ><?php echo ($config["cnzz"]); ?></textarea>
					</div>
				</div>
			</div>
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">允许访问后台的IP列表：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<textarea class="textarea ip" name="ip"  placeholder="127.0.0.1,192.168.1.1   ip之间用逗号隔开,ip段设置为尾数*"><?php echo ($config["ip"]); ?></textarea>
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">后台登录失败最大次数：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text num" value="<?php echo ($config["num"]); ?>"  name="num" placeholder="5">
					</div>
				</div>
			</div>
                        <div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">短信账号：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text smsusername" value="<?php echo ($config["smsusername"]); ?>"  name="smsusername" placeholder="短信账号">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">短信密码：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="password" class="input-text smspassword" value="<?php echo ($config["smspassword"]); ?>"  name="smspassword" placeholder="短信密码">
					</div>
				</div>
			</div>
			<!---
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">邮件发送开关：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<label><input name="email_status" value="1" <?php if($config["email_status"] == 1 ): ?>checked<?php endif; ?> type="radio">&nbsp;开&nbsp;启</label>&nbsp;&nbsp;
						 <label><input name="email_status" value="0" <?php if($config["email_status"] == 0 ): ?>checked<?php endif; ?> type="radio">&nbsp;关&nbsp;闭</label>
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">SMTP服务器：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" value="<?php echo ($config["smtpserver"]); ?>" class="input-text smtpserver" placeholder="smtp.qq.com">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">SMTP 端口：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text smtpport" value="<?php echo ($config["smtpport"]); ?>"  placeholder="25" name="smtpport" >
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">邮箱帐号：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text smtpuser" value="<?php echo ($config["smtpuser"]); ?>"  name="smtpuser" >
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">邮箱密码：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="password" id="email-password smtppwd" value="<?php echo ($config["smtppwd"]); ?>" class="input-text smtppwd">
					</div>
				</div>
			</div>
			--->
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onclick='baseconfig()' class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
				<button  class="btn btn-default radius" type="reset">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/H-ui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/H-ui/static/h-ui.admin/js/H-ui.admin.js"></script> 
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>