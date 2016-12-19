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
</head>
<body style='background-color: #DCE0EB;'>
<div class="" style='margin-left:15px;background: #fff;'>
<nav class="breadcrumb" style='height: 45px;line-height: 45px;font-size: 16px;'>邀请收益</nav>
<div class="pd-20 text-c">
    <div  class="l" style='width:50%;border:1px solid #b9c4d9;height:60px; background: #e1e7ef;line-height: 60px; color: #011c54'>昨日总收益：<?php echo ($todaymoney); ?></div>
    <div  class="r"style='width:49.6%;border:1px solid #b9c4d9;height:60px;border-left: none; background: #e1e7ef;line-height:60px; color: #011c54'>总金额：<?php echo ($allmoney); ?></div>
</div>
<div style="clear: both"></div>
<div class="page-container">
        <div class="cl pd-5 bg-1 bk-gray mt-20">
            <span class="l" >
            </span>  <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
        <div class="mt-0">
            <table class="table table-border table-bordered table-hover table-bg ">
                <thead>
                    <tr class="text-c">
                            <th width="150">订单号</th>
                        <th width="">利率（%）</th>
                        <th width="">收益（元）</th>
                         <th width="">备注</th>
                        <th width="">日期</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c"> 
                        <td class="text-c"><?php echo ($vo["order_no"]); ?></td>
                        <td class="text-c"><?php echo ($vo["rate"]); ?></td>
                        <td class="text-c"><?php echo ($vo["bonus"]); ?></td>
                          <td class="text-c"><?php echo ($vo["message"]); ?></td>
                        <td class="text-c" style="width:120px;"><?php echo (date("Y-m-d H:i:s",$vo["create_date"])); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                </tbody>
            </table>  
            <div id="pageNav" class="pageNav"><?php echo ($page); ?></div>
        </div>
    </div>
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