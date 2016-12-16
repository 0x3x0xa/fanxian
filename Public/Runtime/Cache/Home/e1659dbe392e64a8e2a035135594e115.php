<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!--<meta name="format-detection" content="telephone=no"/>-->
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui/css/H-ui.min.css" />
  <link rel="stylesheet"  href="/Public/style/wap/main.css"  type="text/css"/>
        <link rel="stylesheet"  href="/Public/style/wap/base.css"  type="text/css"/>
        <script type="text/javascript" src="/Public/js/home/jquery.js"></script>

        <title></title>
        <style type="text/css">
.msgs{display:inline-block;width:104px;color:#fff;font-size:12px;border:1px solid #0697DA;text-align:center;height:47px;line-height:47px;background:#0697DA;cursor:pointer;}
.msgs1{background:#E6E6E6;color:#818080;border:1px solid #CCCCCC;}
</style>
    </head>
    <body>
        <div class="viewport">
            <!--头部-->
            <div class="header">
                <a class="back" href='javascript:history.go(-1)'><b>&nbsp;</b>返回</a>
                <span class="header_title">会员注册</span>
            </div>
            <!--头部End-->

            <!--内容-->
            <div class="Register_form">
                <form action='' method='post' class=' registerform'>
                    <input type="text"  type="text" class="username" value=""  placeholder="会员账号" ajaxurl="<?php echo U('/Home/Login/check_username_unique');?>"  placeholder="" errormsg="会员账号长度为6-16" nullmsg="请输入会员账号！"  id="username" name="username"  datatype="u6-16" />
                  
                     <input type="text"  type="text" class="name"   placeholder="会员昵称" id="name" name="name"  nullmsg="请输入昵称！" datatype="*"/>
                
                    <input type="password" class="password"  placeholder="密码"  id="password" name="password" errormsg="密码范围在6~12位之间！" nullmsg="请设置密码！" datatype="*6-12"/>
                  
                    <input type="password"   placeholder="确认密码"  class="affirm_password" placeholder="" name="affirm_password" id="affirm_password" errormsg="您两次输入的密码不一致！" nullmsg="请再输入密码！" recheck="password" datatype="*" tip="test" />
                   
                    <input  type='text' name='mobile' autocomplete= off  class="mobile" value="" ajaxurl="<?php echo U('/Home/Login/check_mobile_unique');?>"  placeholder="手机号码" id="mobile" name="mobile" errormsg="手机号码格式不正确！" nullmsg="请输入数据号码！" datatype="mobile"/>
                  
                    <input class="code" type='text' name='code' autocomplete= off style="width:60%;" placeholder="验证码"/>
                    <div style="float:right;margin-top: 5%;">
                    <span class="msgs">获取短信验证码</span>
                    </div>
                    <div style="text-align:center;margin:30px 0 25px 0;">
                        <input value="注册" class="sub_btn reg_subtn"  type="submit" style="width:100%;border-radius:5px;padding:10px auto" />

                    </div>
                </form>
            </div>
            <!--内容End-->
            <!--底部-->
                     
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
<script type="text/javascript">
    $(function () {
        
      
    	//获取短信验证码
		var validCode=true;
		$(".msgs").click (function  () {
			  var mobile=$('.mobile').val();
                         if(mobile!==""){
			var time=60*3;
			var code=$(this);
			var flag=false;
			if (validCode) {
				validCode=false;
				code.addClass("msgs1");
				flag=true;
			var t=setInterval(function  () {
				time--;
				code.html(time+"秒");
				if (time==0) {
					clearInterval(t);
				code.html("重新获取");
					validCode=true;
				code.removeClass("msgs1");

				}
			},1000)
			}
			if(flag)
			{  
				flag=false;
				codes();
			}
                          }else{
                            $('.mobile_msg').html(' <span class="Validform_checktip Validform_wrong">请输入手机号码！</span>');

                       }
		})
	/****************************************/
       

      

        $.extend($.Datatype, {
          //  "z2-4":/^[\u4e00-\u9fa5]{2,4}$|^[a-zA-Z]{1,30}$/gi,
        });


        $(".registerform").Validform({
         
            callback: function (form) {
              
            
                var check = confirm("您确定要提交表单吗？");
                if (check) {
                 register();
                }
           

                return false;
            },
            tiptype: 1,
            datatype: {//传入自定义datatype类型【方式二】;
                "z2-4": /^[\u4e00-\u9fa5]{2,4}$|^[a-zA-Z]{2,30}$/gi,
                "yb-6": /[1-9]\d{5}(?!\d)/,
                "u6-16": /^[A-Za-z0-9]{6,12}$/,
                "yhno-16-19": /^(\d{16}|\d{19})$/,
                "xxdz": /^(?=.*?[\u4E00-\u9FA5])[\d\u4E00-\u9FA5]+/,
                'mobile':/^1[34578]\d{9}$/,
            }
        });


    })


</script>