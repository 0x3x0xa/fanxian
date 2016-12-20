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
    <style type="text/css">
        .changpwd_subtn{padding: 10px 10%;border-radius: 5px;}
        .changpwd_subtn2{padding: 10px 10%;border-radius: 5px;}
        .res_btn{padding: 10px 10%;background-color: #A4740E;border-radius: 5px;}
    </style>
        <title></title>
        
    </head>

    <body>
        <div class="viewport">
            <!--头部-->
            <div class="header">
                <a class="back" href='javascript:history.go(-1)'><b>&nbsp;</b>返回</a>
                <span class="header_title">修改密码</span>
            </div>
            <!--头部End-->

            <!--内容-->
            <div class="CLPassword_form">
                <form action="/index.php/Home/member/changepwd.html" method="post" class='reg1_form'>
                    {__TOKEN__}
                 <p>密码类型：</p>
                    <select style="width: 100%; border: 0px;color: #8d8d8d;padding: 10px 0;text-indent: 1em;background:#fff;"   class='type' >
                        <option value="">请选择密码类型</option>
                         <option value="1">一级密码</option>
                          <option value="2">二级密码</option>
                    </select>
                    <span  class='type_tip' style='width:auto;'></span>
                    <p>原始登录密码：</p>
                    <input type="password" class="oldpwd"   name='oldpwd' />
                    <span  class='oldpwd_tip' style='width:auto;'></span>
                    <p>新的登录密码：</p>
                    <input type="password" class="password"   name='newpwd' />
                    <span  class='password_tip' style='width:auto;'></span>
                    <p>确认登录密码：</p>
                    <input  type="password" class="repwd"  name='renewpwd'/>
                    <span  class='repwd_tip' style='width:auto;'></span>
                    <div style="text-align:center;margin:30px 0 25px 0;">
                            <input type="button" value="提交" class="sub_btn changpwd_subtn" />
                            <input type="reset" value="重置" class="res_btn" />
                    </div>
                </form>
            </div>
          

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
            <!--底部End-->
            <script type="text/javascript">
                function isLegal(str) {
                    if (/[!,#,$,%,^,&,*,?,~,\\,|,;,",<,>,(,),+,.,\s+]/gi.test(str))
                        return false;
                    var str1 = str.toLowerCase()
                    if (str1.indexOf("script") >= 0 || str1.indexOf("select") >= 0 || str1.indexOf("update") >= 0 || str1.indexOf("delete") >= 0 || str1.indexOf("insert") >= 0 || str1.indexOf("insert") >= 0 || str1.indexOf("drop") >= 0 || str1.indexOf("truncate") >= 0 || str1.indexOf("union") >= 0 || str1.indexOf("user") >= 0 || str1.indexOf("load_file") >= 0 || str1.indexOf("outfile") >= 0)
                    {
                        return false;
                    }
                    return true;
                }
                function strLength(as_str) {
                    return as_str.replace(/[^\x00-\xff]/g, 'xx').length;
                }


                function check_type() {
                    var type = $.trim($('.type').val());
                    var flag = false;
                    if (type) {
                       
                        $('.type_tip').html(''); flag = true;
                    } else
                    {

                        $('.type_tip').html('<span style="color:#d00000;width:auto;">请选择密码类型</span>');flag = false;
                    }
                    return flag;
                }
                
                //检测老密码
                function check_oldpwd() {
                    var oldpwd = $.trim($('.oldpwd').val());
                    var flag = false;
                      var regp = new RegExp("^[0-9a-zA-Z]+$");
                     var strlen = strLength(oldpwd);
                     if (regp.test(oldpwd) && strlen >= 6 && strlen <= 12) {
                       
                         $('.oldpwd_tip').html(''); flag = true;
                    } else
                    {
                            $('.oldpwd_tip').html('<span style="color:#d00000;width:auto;">请输入6-12位的旧密码</span>');
                        flag = false;
                    }
                    return flag;
                }
                //检查密码
                function check_pwd() {
                    var pwd = $.trim($('.password').val());
                    var regp = new RegExp("^[0-9a-zA-Z]+$");
                    var strlen = strLength(pwd);
                    if (regp.test(pwd) && strlen >= 6 && strlen <= 12) {
                        $('.password_tip').html('');
                        flag = true;
                    } else {
                        $('.password_tip').html('<span style="color:#d00000;width:auto;">请输入6-12位的新密码</span>');
                        flag = false;
                    }
                    return flag;
                }
                //检查确认密码
                function check_repwd() {
                    var repwd = $.trim($('.repwd').val());
                    var regrp = new RegExp("^[0-9a-zA-Z]+$");
                    var strlen = strLength(repwd);
                    if (regrp.test(repwd) && strlen >= 6 && strlen <= 12) {
                        if ($('.password').val() != repwd) {
                            $('.repwd_tip').html('<span style="color:#d00000;width:auto;">两次密码不一致</span>');
                            flag = false;
                        } else {
                            $('.repwd_tip').html('');
                            flag = true;
                        }
                    } else {
                        $('.repwd_tip').html('<span style="color:#d00000;width:auto;">请输入6-12位的新密码</span>');
                        flag = false;
                    }
                    return flag;
                }

                $(function () {

                    $('.type').blur(function () {
                       check_type();
                    });
                    $('.oldpwd').blur(function () {
                        check_oldpwd();
                    });
                    $('.password').blur(function () {
                        check_pwd();
                    });
                    $('.repwd').blur(function () {
                        check_repwd();
                    });

                    $('.changpwd_subtn').click(function () {
                        var flag0=check_type();
                        var flag1 = check_oldpwd();
                        var flag2 = check_pwd();
                        var flag3 = check_repwd();
                        if (flag0&&flag1 && flag2 && flag3) {
                           layer.confirm('确定要修改密码？', function (index) {
                            var type = $('.type').val();
                            var token = $("input[name='token']").val();
                            var oldpassword = $('.oldpwd').val();
                            var newpassword = $('.password').val();
                            $.ajax({
                                type: "post",
                                url: "/Home/Member/changepwd",
                                data: {type: type, token: token, oldpassword: oldpassword, newpassword: newpassword},
                                dataType: 'json',
                                async: false, //设置为同步操作就可以给全局变量赋值成功 
                                success: function (data) {
                                    if (data.status == 1)
                                    {
                                        layer.msg(data.msg, {icon: 1, time: 1500}, function () {

                                            location.replace(location.href);
                                        });

                                    } else
                                    {
                                        layer.msg(data.msg, {icon: 2, time: 1500}, function () {

                                            location.replace(location.href);


                                        });
                                    }
                                }
        });
    });
                        }
                    });

                
                });
            </script>