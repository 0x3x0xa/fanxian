<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="/Public/style/home/base.css">
<link rel="stylesheet" type="text/css" href="/Public/style/home/main.css">
<link href="/Public/style/home/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
<script src="/Public/js/home/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/H-ui/lib/layer/2.1/layer.js"></script>
<script src="/Public/js/home/H-ui.home.js" type="text/javascript"></script>
<style type="text/css" >
html{overflow-x: hidden;}
</style>
</head>
<style type="text/css">
    .box897 {
        width:897px;
        background-color:#DCE0EB;
    }
    .GPHelp a img{
        float: left;
        height: 135px;
    }
    .GPHelp a span{
        font-size: 30px;
        padding-left: 177px;
        /*color: #fff;*/
    }
    .GPtip{
        height:50px;
        line-height:30px;
        border-bottom:#DEDEDE solid 1px;
        text-align: center;
    }
    .GPtip input[type='text']{
        height:25px;
        line-height:25px;
        /*padding:0px;*/
        width:100px;
        border:0px;
        margin-right: 20px;
    }
    .qt .box{
        width: 209px;
        height: 119px;
        float: left;
        margin-top: 27px;
        text-align: center;
        /*	line-height: 45px;*/
        border-right: 1px solid #e7e4e4;
    }
    .box p{
        height: 50%;
        color: #fff;
    }
    .box  .amount{
        color: #E9D901;
        margin-top: 10px;
        font-size: 20px;
    }	

    .clearfix:after{
        content: " "; 
        display: block; 
        height: 0; 
        clear: both; 
        visibility: hidden;  
    } 
    .bz ul li{
        padding: 5px 0;
        background: url('../images/ico/dot.jpg') 10px center no-repeat;
        text-indent: 20px;
    }
    .bz ul li input[type=text], select, input[type=password]{
        width: 150px;
    }
    .hy ul li{
        /* margin-top: 10px; */
        border-bottom: 1px dashed #a7a7a7;
        padding: 15px 0;
        background: url('../images/ico/dot.jpg') 10px center no-repeat;
        text-indent: 20px;
    }
    .hy ul li .username{
        margin-left: 10px;
    }
    .hy  .rank_1{
        color: #D0162E;
    }
    .hy  .rank_2{
        color: #9B70E4;
    }
    .hy  .rank_3{
        color: #71C3FF;
    }

    .qianbao{
        width:850px;
        height:119px;
        margin-left:15px;
        margin-top:15px;
    }
    .qianbao .qianbao_box{
        width:203px;
        height:119px;
        float:left;
        margin-right:10px;
        /*	background-color:#000;*/
    }
</style>
<body style="background-color: #DCE0EB;">

    <div class="box897">
        <div class="default_dv">
            <div class="default_top">
                <span class="jrhq">今日行情：</span><span><?php echo ($msgdata['daymsg']); ?></span>
            </div>
            <!--钱袋-->
            <div class="qianbao">
                <div class="qianbao_box benjin"  style="width:280px;margin-right: 0px;">
                    <div  class=" qianbao_info " >
                        <p style="height: 50%;">本金钱袋</p>
                        <p style="height: 50%; "><?php if($userInfo["principal"] == '' ): ?>0<?php else: echo ($userInfo["principal"]); endif; ?></p>
                    </div>
                </div>
                <div class="qianbao_box shouyi"  style="width:280px; padding-right:0px;float:right;margin-right: 0px;">
                    <div  class=" qianbao_info " >
                        <p style="height: 50%;">收益钱袋</p>
                        <p style="height: 50%; "><?php if($userInfo["profit"] == '' ): ?>0<?php else: echo ($userInfo["profit"]); endif; ?></p>
                    </div></div>
             <div class="qianbao_box jili" style="width:282px; padding-right:0px;float:right;margin-right: 0px;">
                    <div  class=" qianbao_info " >
                        <p style="height: 50%;">投资钱袋</p>
                        <p style="height: 50%; "><?php if($touzimoney == '' ): ?>0<?php else: echo ($touzimoney); endif; ?></p>
                    </div></div>
 <!--                  <div class="qianbao_box jili2" style="margin-right:0px">
                    <div  class=" qianbao_info " >
                        <p style="height: 50%;">团队激励奖</p>
                        <p style="height: 50%; "><?php echo ($userInfo["groupbonus"]); ?></p>
                    </div></div>-->
            </div>

			<div class="announcement"style="background-color: #fff;width: 850px;
    margin-left: 15px;">
                <h3>通知公告</h3>
                <ul>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>▪ <a href="<?php echo U('Home/Article/articlezhang/',array('id'=>$vo['id']));?>"><span class="news_title"><?php echo ($vo["art_title"]); ?></span><span class="news_datetime"><?php echo (date('Y-m-d',$vo["art_time"])); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
				
                </ul>

            </div>


                <div class="clearfix"></div>



        </div>

    </div>

</body>
<script>
    function strLength(as_str) {
        return as_str.replace(/[^\x00-\xff]/g, 'xx').length;
    }
//验证自身二级密码
    function check_selfsalfpwd() {
        var selfsalfpwd = $('.selfsalfpwd').val();

        var regselfsalfpwd = new RegExp("^[0-9a-zA-Z]+$");
        var strlen = strLength(selfsalfpwd);
        if (regselfsalfpwd.test(selfsalfpwd) && strlen >= 6 && strlen <= 12) {
            $.ajax({
                type: "post",
                url: "/Member/Reg/check_selfsalfpwd",
                data: {selfsalfpwd: selfsalfpwd},
                dataType: 'json',
                async: false, //设置为同步操作就可以给全局变量赋值成功 
                success: function (data) {
                    if (data.status == 1) {
                        flag = false;
                    } else {
                        flag = true;
                    }
                    $('.selfsalfpwd_tip').html("<span style='color:#d00000;width:auto;'>" + data.msg + "</span>");
                }
            });

        } else {

            $('.selfsalfpwd_tip').html('<span style="color:#d00000;width:auto;"><?php echo (L("msg_tip_writetowpwd")); ?></span>');
            flag = false;
        }
        return flag;
    }

    function check_money() {
        var money = $.trim($('.money').val());

        if (money) {
            if (money < 1000 || money > 5000) {
                $('.money_tip').html('<span style="color:#d00000;width:auto;">请输入1000-5000的赞助金额</span>');
                flag = false;
            } else {
                $('.money_tip').html('<span style="color:#d00000;width:auto;"></span>');
                flag = true;
            }

        } else
        {
            $('.money_tip').html('<span style="color:#d00000;width:auto;">请输入金额</span>');
            flag = false;
        }
        return flag;
    }

    $(function () {
        $('.selfsalfpwd').blur(function () {
            check_selfsalfpwd();
        });
//		$('.money').blur(function(){
//				check_money();
//			});		
        $('.zu_btn').click(function () {

            var flag1 = check_selfsalfpwd();
            //var flag2=check_money();

            if (flag1) {

                $('.c_form').submit();
                $(this).unbind('click');
            }


        });
    });



</script>  
</html>