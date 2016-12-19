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

    <script type="text/javascript">
        $(function () {
            $('.UC_menu span').toggle(function () {
                $(this).parent('div').addClass('selected');
                $(this).parent('div').siblings('ul').toggle();
            }, function () {
                $(this).parent('div').removeClass('selected');
                $(this).parent('div').siblings('ul').toggle();
            })


        })


    </script>

    <body>

        <div class="viewport">
            <!--头部-->
            <div class="header">
                <span class="header_title" style='width:100%;'>会员中心</span>
            </div>
            <!--头部End-->

            <!--内容-->
            <div class="user_center">
                <div class="UC_banner">
                    <!--欢迎信息-->
                    <marquee style="cursor: pointer;color:#011C53;font-size:12pt" onMouseOut="this.start();" onMouseOver="this.stop();" direction="left" scrolldelay="30" scrollamount="5" id="msgNews" ><?php echo ($msgdata['topmsg']); ?></marquee>
                    <!--欢迎信息end-->
                </div>
                <!--今日行情-->
                <div class="UC_jrhq" style="overflow: hidden">
                    <span style="color:#E45242;font-weight: bold;">今日行情：</span>  <?php echo ($msgdata['daymsg']); ?>
                </div>
                <!--钱袋信息-->
                <div class="UC_wallet">
                    <ul>
                        <li class="UC_waletbox">
                            <i class="icon_wallet icon_bj"></i>
                            <span>本金钱袋</span>
                            <span><?php if($userInfo["principal"] == '' ): ?>0<?php else: echo ($userInfo["principal"]); endif; ?></span>
                        </li> 
                        <li class="UC_waletbox" style="background-color:#EC494C;">
                            <i class="icon_wallet icon_sy"></i>
                            <span>收益钱袋</span>
                            <span><?php if($userInfo["profit"] == '' ): ?>0<?php else: echo ($userInfo["profit"]); endif; ?></span>
                        </li> 
                        <li class="UC_waletbox" style="background-color:#FFAA3D;">
                            <i class="icon_wallet icon_jl"></i>
                            <span>投资钱袋</span>
                            <span><?php if($touzimoney == '' ): ?>0<?php else: echo ($touzimoney); endif; ?></span>
                        </li> 
 <!--                       <li class="UC_waletbox" style="background-color:#3A8E40;">
                            <i class="icon_wallet icon_jl2"></i>
                            <span>团队激励奖</span>
                            <span>1200</span>
                        </li> -->
                    </ul>
                </div>
                <ul class="UC_menu" style="    overflow: hidden;">
                    <li>
                        <div>
                            <span class="ico_UC_home">威尼斯风情<b>&gt</b></span>
                        </div>
                        <ul style="display: none;">
                            <li><a href="<?php echo U('Home/Picture/natural');?>">自然风景</a></li>
                            <li><a href="<?php echo U('Home/Picture/humanity');?>">人文风情</a></li>
                            <li><a href="<?php echo U('Home/Picture/building');?>">建筑艺术</a></li>
                        </ul>
                    </li>
                    
                             <li>
                        <div>
                            <span class="ico_UC_MCenter">会员管理<b>&gt</b></span>
                        </div>
                        <ul style="display: none;">
							<li><a href="<?php echo U('Home/Member/userlist');?>" >我的会员</a></li>
                            <li><a href="<?php echo U('Home/Member/listcontactman');?>" >团队列表</a></li>
                            <li><a href="<?php echo U('Home/Reg/fenxianglianjie');?>" >分享链接</a></li>
							<li><a href="<?php echo U('Home/Reg/index');?>" >注册会员</a></li>
                        </ul>
                    </li>
                    <li>
                        <div>
                            <span class="ico_UC_information">基本信息<b>&gt</b></span>
                        </div>
                        <ul style="display: none;">
                            <li><a href="<?php echo U('Home/member/userinfo');?>">资料管理</a></li>
                            <li><a href="<?php echo U('Home/member/changepwd');?>">密码管理</a></li>
                        </ul>
                    </li>
                      <li>
                        <div>
                            <span class="ico_UC_FManager">充值投资<b>&gt</b></span>
                        </div>
                        <ul style="display: none;">
                            <li><a href="<?php echo U('Home/Report/renminbichongzhi');?>" style="color:red;">我要充值</a></li>
                              <li><a href="<?php echo U('Home/Report/chongzhilist');?>">充值记录</a></li> 
                                  <li><a href="<?php echo U('Home/Report/touzi');?>" style="color:red;">我要投资</a></li>
                           
<!--                            <li><a href="#">比特币充值</a></li>
                            <li><a href="#">比特币提现</a></li>
                            <li><a href="#">莱特币充值</a></li>
                            <li><a href="#">莱特币提现</a></li>-->
                        </ul>
                    </li>
                      <li>
                        <div>
                            <span class="ico_UC_TCenter">我要提现<b>&gt</b></span>
                        </div>
                        <ul style="display: none;">
                            <li><a href="<?php echo U('Home/Report/touziguanli');?>" style="color:red;">本金转出</a></li>
                           <li><a href="<?php echo U('Home/Report/reminbitixian');?>" style="color:red;">本金.收益提现</a></li>
                            <li><a href="<?php echo U('Home/Report/tixianlist');?>">提现记录</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <div>
                            <span class="ico_UC_MManager">收益明细<b>&gt</b></span>
                        </div>
                        <ul style="display: none;">
                            <li><a href="<?php echo U('Home/Report/touzishouyi');?>">投资收益</a></li>
                            <li><a href="<?php echo U('Home/Report/tuijianbonus');?>">邀请收益</a></li>
							<li><a href="<?php echo U('Home/Report/tuanduibonus');?>">团队收益</a></li>
							
							<li><a href="<?php echo U('Home/Report/lishitouzi');?>">历史投资</a></li>
                        <li><a href="<?php echo U('Home/Report/zijinlist');?>">资金明细</a></li> 
                        </ul>
                    </li>
                  
           
                  
                    <li>
                        <div>
                            <span class="ico_UC_TAnnouncement">公告规则<b>&gt</b></span>
                        </div>
                        <ul style="display: none;">
                            <li><a href="<?php echo U('Home/Article/newslist');?>">公告列表</a></li>
							<li><a href="<?php echo U('Home/Article/toziguizelist');?>">投资规则</a></li>
                        </ul>
                    </li>

                    <li>
                        <div>
                            <span class="ico_UC_Kefu">留言客服<b>&gt</b></span>
                        </div>
                        <ul style="display: none;">
                            <li><a href="<?php echo U('Home/Message/messageadd');?>">发件箱</a></li>
							<li><a href="<?php echo U('Home/Message/index');?>">信件箱</a></li>
                        </ul>
                    </li>

                    <li>
                        <div>
                            <span class="ico_UC_Logout" onclick='logout()'>安全退出<b>&gt</b></span>
                        </div>

                    </li>
                </ul>
            </div>
            <!--内容End-->

            <!--底部-->
            <div style="height: 55px; clear: both"></div>
            <div class="footer">
                <ul class='b'>
                    <!--class='hot'-->
                    <li  <?php if($hot == 1): ?>class='hot'<?php endif; ?>  ><a href="<?php echo U('Home/index/index',array('hot'=>'1'));?>"><i class="ico_home"></i><span>首  页</span></a></li>
                    <li  <?php if($hot == 2): ?>class='hot'<?php endif; ?> ><a href="<?php echo U('Home/Report/touzishouyi',array('hot'=>'2'));?>"><i class="ico_PHelp"></i><span>投资收益</span></a></li>
                    <li  <?php if($hot == 3): ?>class='hot'<?php endif; ?> ><a href="<?php echo U('Home/Report/touzi',array('hot'=>'3'));?>"><i class="ico_GHelp"></i><span>我要投资</span></a></li>
                    <li  <?php if($hot == 4): ?>class='hot'<?php endif; ?> ><a href="<?php echo U('Home/Reg/index',array('hot'=>'4'));?>"><i class="ico_messageA"></i><span>会员注册</span></a></li>
                </ul>
            </div>
            <!--底部End-->
        </div>

    </body>
</html>

<script type="text/javascript">


    function logout()
    {
        if (confirm("您确定要退出吗?") == true)
        {
            location.href = '<?php echo U("Home/Login/logout");?>';
        }
    }


</script>