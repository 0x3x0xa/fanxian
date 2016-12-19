<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
  
<title></title>
<body style='background-color: #DCE0EB;'>
<div class="" style='background: #fff;'>
<div class="page-container">
	<form action=""  class="form form-horizontal SubmiForm" id="form-article-add"  >
		{__TOKEN__}
                <div class="row cl">
			<label class="form-label col-xs-4 col-sm-4 " style="text-align: right;"><span class="c-red">*</span>选择银行：</label>
			<div class="formControls col-xs-5 col-sm-4">
				<select name="type" class="select type select-box"  nullmsg='请选择银行' datatype='*' >
                                <option value="" >请选择</option>
                                <?php if(is_array($banklist)): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["bankname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    
				</select>
                        </div>  <div class="Validform_checktip"></div>    
		</div>
		            <div class="row cl">
			<label class="form-label col-xs-4 col-sm-4 " style="text-align: right;"><span class="c-red">*</span>开户姓名：</label>
			<div class="formControls col-xs-5 col-sm-4">
                            <input type="text" class="input-text name"  value="" placeholder="" id="" name="name"   nullmsg="请输入开户姓名！" datatype="*" ajaxurl="<?php echo U('/Home/Member/getallowbank');?>" >
			</div>
                           <div class="Validform_checktip"></div>
		</div>
                            <div class="row cl">
			<label class="form-label col-xs-4 col-sm-4 " style="text-align: right;"><span class="c-red">*</span>开户账号：</label>
			<div class="formControls col-xs-5 col-sm-4">
                            <input type="text" class="input-text bankno"  value="" placeholder="" id="" name="bankno"   errormsg="银行卡位数不对！"  nullmsg="请设置开户账号！" datatype="n10-20" >
			</div>
                           <div class="Validform_checktip"></div>
		</div>
                      <div class="row cl">
			<label class="form-label col-xs-4 col-sm-4 " style="text-align: right;"><span class="c-red">*</span>开户银行网点地址：</label>
			<div class="formControls col-xs-5 col-sm-4">
                            <input type="text" class="input-text kaihubank"  value="" placeholder="" id="" name="kaihubank"     nullmsg="请设置开户银行网点地址！" datatype="*" >
			</div>
                           <div class="Validform_checktip"></div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-4 " style="text-align: right;"><span class="c-red text-r">*</span>二级密码：</label>
			<div class="formControls col-xs-5 col-sm-4">
				<input type="password" name="towpassword" id="" placeholder="" value="" class="input-text towpassword"  errormsg="您两次输入的密码不一致！" nullmsg="请输入二级密码！"  datatype="*"  >
			</div>
                           <div class="Validform_checktip"></div>
		</div>


		<div class="row cl text-c">
                    <button  class="btn btn-secondary radius"   type="submit"><i class="Hui-iconfont">&#xe632;</i> 添加</button>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
</div>
<script type="text/javascript" src="/Public/H-ui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/Validform/5.3.2/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="/Public/H-ui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/js/home/H-ui.home.js"></script> 
</body>
</html>

<!--/_footer /作为公共模版分离出去-->
<script type="text/javascript">
$(function(){

$(".SubmiForm").Validform({
                callback:function(form){
                  addbank();
                    return false;
		},
		tiptype:2,
         
	});	
});
</script>