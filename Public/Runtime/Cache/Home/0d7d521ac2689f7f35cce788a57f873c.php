<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!--<meta name="format-detection" content="telephone=no"/>-->
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
         <link rel="stylesheet"  href="/Public/style/wap/main.css"  type="text/css"/>
        <link rel="stylesheet"  href="/Public/style/wap/base.css"  type="text/css"/>
        <script type="text/javascript" src="/Public/js/home/jquery.js"></script>

        <title></title>
    </head>
    <style type="text/css">
        .btn { padding: 10px 20px; display: inline-block; background-color: #011C53; font-size: 14px; color: #fff; border-radius: 4px; }
    </style>
    <body>
        <div class="viewport">
            <!--头部-->
            <div class="header">
                <a class="back" href='javascript:history.go(-1)'><b>&nbsp;</b>返回</a>
                <span class="header_title">基本信息</span>
            </div>
            <!--头部End-->

            <!--内容-->
            <div class="information_form">
				<p style="text-align: left; margin-top: 10px;font-size:16px;">基本资料</p>
                <p>会员账号：<?php echo ($userInfo["username"]); ?></p>
                <p>会员昵称：<?php echo ($userInfo["name"]); ?></p>
                <p>手机号码：<?php echo ($userInfo["mobile"]); ?></p>
                <p>邀请人：<?php echo ($userInfo["recommend"]); ?></p>
                <p>本金钱袋：<?php echo ($userInfo["principal"]); ?></p>
                <p>收益钱袋：<?php echo ($userInfo["profit"]); ?></p>
                <p>邀请人数：<?php echo ($userInfo["directnum"]); ?></p>
                <p>团队人数：<?php echo ($userInfo["group"]); ?></p>
				<p>注册日期：<?php echo (date('Y-m-d',$userInfo["regtime"])); ?></p>
				<p style="text-align: left; margin-top: 20px;font-size:16px;">银行信息</p>
                <p style="text-align: right; margin-top: 30px;"><a class="" href='javascript:void(0);' style='display: inline-block;box-sizing: border-box;height: 24px;padding: 4px 6px;border-radius: 4px; color: #fff;background-color: #3bb4f2;border-color: #3bb4f2;' onclick="showPage('300','370','添加银行卡','<?php echo U("Member/addbank");?>')" >添加银行卡</a></p>
				  <?php if(is_array($userbanklist)): $i = 0; $__LIST__ = $userbanklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p>银行名称:<?php echo ($vo["bank"]); ?></p>
					 <p>开户姓名:<?php echo ($vo["username"]); ?></p>
					 <p>银行卡号：<?php echo ($vo["bankno"]); ?></p>
                                          <p>开户银行网点地址：<?php echo ($vo["kaihubank"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <!--内容End-->
            <!--底部-->
            <div style="height: 55px;"></div>

         <!--底部-->
            <div style="height: 55px;"></div>
            <div class="footer">
                <ul class='b'><!--class='hot'-->
                    <li  <?php if($hot == 1): ?>class='hot'<?php endif; ?> ><a href="<?php echo U('Home/index/index',array('hot'=>'1'));?>"><i class="ico_home"></i><span>首  页</span></a></li>
                    <li <?php if($hot == 2): ?>class='hot'<?php endif; ?>><a href="<?php echo U('Home/Report/touzishouyi',array('hot'=>'2'));?>"><i class="ico_PHelp"></i><span>投资收益</span></a></li>
                    <li <?php if($hot == 3): ?>class='hot'<?php endif; ?>><a href="<?php echo U('Home/Report/touzi',array('hot'=>'3'));?>"><i class="ico_GHelp"></i><span>我要投资</span></a></li>
                    <li <?php if($hot == 4): ?>class='hot'<?php endif; ?>><a href="<?php echo U('Home/Reg/index',array('hot'=>'4'));?>"><i class="ico_messageA"></i><span>会员注册</span></a></li>
                </ul>
            </div>
            <!--底部End-->
</body>
</html>
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