<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="/Public/style/home/base.css">
            <link rel="stylesheet" type="text/css" href="/Public/style/home/main.css">
                <script type="text/javascript" src="/Public/js/home/jquery.js"></script>

                <link href="/Public/style/home/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">


                    <title></title>
                    <script type="text/javascript">
                        $(function () {
                            $('.main_left h3').click(function () {
                                $(this).siblings('div').toggle('fast', 'linear').parent('li').siblings('li').children('div').hide('fast', 'linear');
                            });
                            $('.header_nav a').click(function () {
                                $(this).addClass('hot').siblings('a').removeClass('hot');
                            });
                        });
                    </script>
                    <style type="text/css">
                        .userInfo {    width: 897px;;position:absolute;bottom:0;right:0;overflow:hidden;color:#fff;font-size: 16px;margin-bottom: 30px;}
                        .userInfo span {display:inline-block;padding:10px 20px;color:#fff;font-size:16px; }
                    </style>
                    </head>
                    <body style="background-color: #607391;">

                        <!--   <img src="/Public/images/home/index_bg.jpg"  style="width:100%;position: fixed;min-height:800px;z-index:-1;"/>-->

                        <!--头部-->
                        <div class="main_top">
                            <div class="header">
                                <div class="viewport admin_bg">
                                    <!--            <div style="float:right;padding-top:10px;"> <p><a href="?l=zh-cn">中文</a> | <a href="?l=ru-ru"> Russian</a></p></div>-->

                                    <img src="/Public/images/home/header_logo.png" alt="logo" />

                                    <div class="userInfo">
                                        <marquee style="cursor: pointer;" onClick="HotNewsHistory();" onMouseOut="this.start();" onMouseOver="this.stop();" direction="left" scrolldelay="30" scrollamount="5" id="msgNews" ><?php echo ($msgdata['topmsg']); ?></marquee>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--头部End-->


    <!--中间-->
    <div class="viewport" style=" overflow: hidden; /*height: 717px;*/">

        <!--左边菜单栏-->
        <div class="main_left" id="main_left">
            <ul>
            	<li>
                    <h3 onclick='jump_index()' class="home">首页</h3>
                </li>
                <li>
                    <h3  class="fengqing">威尼斯风情</h3>
                    	<div style="display: none;">
                        <a href="<?php echo U('Home/Picture/natural');?>" target="container">自然风景</a>
                        <a href="<?php echo U('Home/Picture/humanity');?>" target="container">人文风景</a>
                         <a href="<?php echo U('Home/Picture/building');?>" target="container">建筑艺术</a>
                    </div>
                </li>
                  <li>
                    <h3 class="shichang">会员管理</h3>
			<div style="display: none;">
                        <a href="<?php echo U('Home/Member/userlist');?>" target="container">我的会员</a>
                        <a href="<?php echo U('Home/Member/listcontactman');?>" target="container">团队列表</a>
                        <a href="<?php echo U('Home/Reg/fenxianglianjie');?>" target="container">分享链接</a>
                        <a href="<?php echo U('Home/Reg/index');?>" target="container">注册会员</a>
                    </div>
                </li>
                 <li>
                    <h3  class="user">基本信息</h3>
			<div style="display: none;">
                        <a href="<?php echo U('Home/member/userinfo');?>" target="container">资料管理</a>
                        <a href="<?php echo U('Home/member/changepwd');?>" target="container">修改密码</a>
                    </div>
                </li>
                  <li>
                    <h3  class="tixian">充值投资</h3>
                    <div style="display: none;">
                        
                        <a href="<?php echo U('Home/Report/renminbichongzhi');?>" target="container" style="color:red;">我要充值</a>
                        <a href="<?php echo U('Home/Report/chongzhilist');?>" target="container">充值记录</a>
                          <a href="<?php echo U('Home/Report/touzi');?>" style="color:red" target="container">我要投资</a> 
                        
<!--                        <a href="#" target="container">比特币充值</a>
                        <a href="#" target="container">比特币提现</a>
                        <a href="#" target="container">莱特币充值</a>
                        <a href="#" target="container">莱特币提现</a>-->
                    </div>
                </li>
                
                <li>
                    <h3  class="caiwu">我要提现</h3>
			<div style="display: none;">
                             <a href="<?php echo U('Home/Report/touziguanli');?>"  style="color:red" target="container">本金转出</a>
			<a href="<?php echo U('Home/Report/reminbitixian');?>" target="container"  style="color:red;">本金.收益提现</a>
                      
                        <a href="<?php echo U('Home/Report/tixianlist');?>" target="container">提现记录</a>
                        
                    </div>
                </li>
                 <li>
                    <h3  class="licai">收益明细</h3>
			<div style="display: none;"> 
                          
                        <a href="<?php echo U('Home/Report/touzishouyi');?>" target="container">投资收益</a>
                        <a href="<?php echo U('Home/Report/tuijianbonus');?>" target="container">邀请收益</a>
                        <a href="<?php echo U('Home/Report/tuanduibonus');?>" target="container">团队收益</a>
                        <a href="<?php echo U('Home/Report/lishitouzi');?>" target="container">历史投资</a>
                        <a href="<?php echo U('Home/Report/zijinlist');?>" target="container">资金明细</a>
                     
                    </div>
                </li>
               
               
                 <li>
                    <h3  class="gonggao">公告规则</h3>
			<div style="display: none;">
                        <a href="<?php echo U('Home/Article/newslist');?>" target="container">公告列表</a>
                        <a href="<?php echo U('Home/Article/toziguizelist');?>" target="container">投资规则</a>
                    </div>
                </li>
                 <li>
                    <h3  class="kefu">留言客服</h3>
                    <div style="display: none;">
                       <a href="<?php echo U('Home/Message/messageadd');?>" target="container">发件箱</a>
                       <a href="<?php echo U('Home/Message/index');?>" target="container">信件箱</a>
                    </div>
                </li>
                 <li>
		<h3  onclick='logout()'class="logout">安全退出</h3>
                    
                </li>
            </ul>
        </div>
        <!--左边菜单栏End-->

        <!--右边内容区-->
        <div class="main_container" >
            <iframe id="container" src="<?php echo U('Home/index/main');?>" name="container" marginheight="0" marginwidth="0" frameborder="0" scrolling="auto" allowtransparency="true"style="overflow-x:hidden;width:100%;"  >  <!--height=100% onLoad="iFrameHeight()"--></iframe>
        </div>
        <!--右边内容区End-->
        <script type="text/javascript" language="javascript">

            function iFrameHeight() {

                var ifm = document.getElementById("container");
                var ifm2 = document.getElementById("main_left");
                var subWeb = document.frames ? document.frames["container"].document :
        ifm.contentDocument;

                if (ifm != null && subWeb != null) {

                    ifm.height = subWeb.body.scrollHeight;
                    
                    $('#main_left').height(subWeb.body.scrollHeight);
                  
                }

            }

</script> 
    </div>
    <!--中间End-->
<script type="text/javascript" src="/Public/js/home/ZeroClipboard/ZeroClipboard.js"></script>
		<script type="text/javascript">
// 定义一个新的复制对象
var clip = new ZeroClipboard( document.getElementById("d_clip_button"), {
  moviePath: "/Public/js/home/ZeroClipboard/ZeroClipboard.swf"
} );

// 复制内容到剪贴板成功后的操作
clip.on( 'complete', function(client, args) {
   alert("复制成功，复制内容为："+ args.text);
} );

</script>

<script type="text/javascript">


 function logout()
 {
		if(confirm("您确定要退出吗?")==true)
		{
		location.href='<?php echo U("Home/Login/logout");?>';
		}
 }

function jump_index(){
	location.href="<?php echo U('Home/Index/index');?>";
}

</script>