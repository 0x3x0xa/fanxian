<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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
<title>奖金设置</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统设置 <span class="c-gray en">&gt;</span> 参数设置 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
<form method="post" action="/index.php/Admin/Webconfig/setbonus.html">
<table class="table table-border table-bordered table-hover table-bg">
  <tbody>
    <tr>
      <th class="text-r" width="200">投资开关：</th>
	  <td>
		  <label><input name="touzi_status" value="1" type="radio" <?php if($setparameter["touzi_status"] == 1): ?>checked='checked'<?php endif; ?>>启用</label>&nbsp;
		  <label><input name="touzi_status" value="0" type="radio" <?php if($setparameter["touzi_status"] == 0): ?>checked='checked'<?php endif; ?>>关闭</label>&nbsp
	  </td>
    </tr>
	<tr>
      <th class="text-r" width="200">提现开关：</th>
	  <td>
		  <label><input name="tixian_status" value="1" type="radio" <?php if($setparameter["tixian_status"] == 1): ?>checked='checked'<?php endif; ?>>启用</label>&nbsp;
		  <label><input name="tixian_status" value="0" type="radio" <?php if($setparameter["tixian_status"] == 0): ?>checked='checked'<?php endif; ?>>关闭</label>&nbsp
	  </td>
    </tr>
    <tr>
      <th class="text-r" width="200">充值开关：</th>
	  <td>
		  <label><input name="chongzhi_status" value="1" type="radio" <?php if($setparameter["chongzhi_status"] == 1): ?>checked='checked'<?php endif; ?>>启用</label>&nbsp;
		  <label><input name="chongzhi_status" value="0" type="radio" <?php if($setparameter["chongzhi_status"] == 0): ?>checked='checked'<?php endif; ?>>关闭</label>&nbsp
	  </td>
    </tr>
     <tr>
      <th class="text-r" width="200">网站关闭提示信息：</th><td><input type="text" name='webmsg' placeholder="" value="<?php echo ($setparameter["webmsg"]); ?>" style="width:400px" class="input-text webmsg"></td>
    </tr>
      <tr>
      <th class="text-r" width="200">头部信息：</th><td><input type="text" name='topmsg' placeholder="" value="<?php echo ($setparameter["topmsg"]); ?>" style="width:400px" class="input-text topmsg"></td>
    </tr>
      <tr>
      <th class="text-r" width="200">今日行情：</th><td><input type="text" name='daymsg' placeholder="" value="<?php echo ($setparameter["daymsg"]); ?>" style="width:400px" class="input-text daymsg"></td>
    </tr>
    <tr>
     <th class="text-r" width="200">本金多少天后可提现：</th><td><input type="text" name='benjintianshu' placeholder="" value="<?php echo ($setparameter["benjintianshu"]); ?>" style="width:200px" class="input-text dailyinterest">天</td>
    </tr>
         <tr>
      <th class="text-r" width="200">本金每日提现的次数：</th><td><input type="text" name='benjincishu' placeholder="" value="<?php echo ($setparameter["benjincishu"]); ?>" style="width:200px" class="input-text benjincishu">次</td>
    </tr>
         <tr>
      <th class="text-r" width="200">本金最低提现金额：</th><td><input type="text" name='benjinzuidi' placeholder="" value="<?php echo ($setparameter["benjinzuidi"]); ?>" style="width:200px" class="input-text benjinzuidi">元</td>
    </tr>
    <tr>
      <th class="text-r" width="200">本金提现的收费：</th><td><input type="text" name='benjinshuxufei' placeholder="" value="<?php echo ($setparameter["benjinshuxufei"]); ?>" style="width:200px" class="input-text benjinshuxufei">%</td>
    </tr>
    <tr>
      <th class="text-r" width="200">本金单次最高提现：</th><td><input type="text" name='benjinzuigaotixian' placeholder="" value="<?php echo ($setparameter["benjinzuigaotixian"]); ?>" style="width:200px" class="input-text benjinzuigaotixian">%</td>
    </tr>
      <tr>
      <th class="text-r" width="200">最低充值金额：</th><td><input type="text" name='zuidicongzhimoney' placeholder="" value="<?php echo ($setparameter["zuidicongzhimoney"]); ?>" style="width:200px" class="input-text zuidicongzhimoney">元</td>
    </tr>
      <tr>
      <th class="text-r" width="200">最高充值金额：</th><td><input type="text" name='zuigaocongzhimoney' placeholder="" value="<?php echo ($setparameter["zuigaocongzhimoney"]); ?>" style="width:200px" class="input-text zuidicongzhimoney">元</td>
    </tr>
        <tr>
      <th class="text-r" width="200">充值金额倍数：</th><td><input type="text" name='chongzhimoneybeishu' placeholder="" value="<?php echo ($setparameter["chongzhimoneybeishu"]); ?>" style="width:200px" class="input-text chongzhimoneybeishu">倍</td>
    </tr>
     <tr>
      <th class="text-r" width="200">投资金额的倍数：</th><td><input type="text" name='benjinbeishu' placeholder="" value="<?php echo ($setparameter["benjinbeishu"]); ?>" style="width:200px" class="input-text benjinbeishu">倍</td>
    </tr>
     <tr>
      <th class="text-r" width="200">利息提现最小额：</th><td><input type="text" name='lxtxzxz' placeholder="" value="<?php echo ($setparameter["lxtxzxz"]); ?>" style="width:200px" class="input-text lxtxzxz">元</td>
    </tr>
     <tr>
      <th class="text-r" width="200">利息提现的倍数：</th><td><input type="text" name='lxtxbs' placeholder="" value="<?php echo ($setparameter["lxtxbs"]); ?>" style="width:200px" class="input-text lxtxbs">倍</td>
    </tr>
    <tr>
      <th class="text-r" width="200">利息提现手续费：</th><td><input type="text" name='lxsxf' placeholder="" value="<?php echo ($setparameter["lxsxf"]); ?>" style="width:200px" class="input-text lxsxf">元</td>
    </tr>
     <tr>
      <th class="text-r" width="200">邀请激励奖比例：</th><td><input type="text" name='ztjlj' placeholder="" value="<?php echo ($setparameter["ztjlj"]); ?>" style="width:200px" class="input-text lxsxf">%</td>
    </tr>
     <tr>
      <th class="text-r" width="200">团队激励奖比例：</th><td><input type="text" name='tdjlj' placeholder="" value="<?php echo ($setparameter["tdjlj"]); ?>" style="width:200px" class="input-text lxsxf">%</td>
    </tr>
      <tr>
>
      <th class="text-r" width="200">获得团队奖需5层内团队投资达到：</th><td><input type="text" name='tdtzje' placeholder="" value="<?php echo ($setparameter["tdtzje"]); ?>" style="width:200px" class="input-text lxsxf">元</td>
    </tr>
    

 
    <tr>
      <th class="text-r"></th><td><button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i>  确定</button></td>
    </tr> 
 
  </tbody>
</table>
</div>
	
</form>

<script type="text/javascript" src="/Public/H-ui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/H-ui/static/h-ui.admin/js/H-ui.admin.js"></script> 

</body>
</html>