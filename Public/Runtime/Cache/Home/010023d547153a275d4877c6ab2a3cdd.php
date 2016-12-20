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
<link rel="stylesheet" href="/Public/H-ui/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css"> 
    <style type="text/css">
        .line{border:0px;}
    </style>
        <title></title>
    </head>
    <body style="background: #fff">
        <div class="viewport">
            <!--头部-->
          <!--头部-->
            <div class="header">
                <a class="back" href='javascript:history.go(-1)'><b>&nbsp;</b>返回</a>
                <span class="header_title">团队列表</span>
            </div>
            <!--头部End-->
            <!--头部End-->
  		
            <!--内容-->
            <div class="Tixian_list">
             
        
              <div class="pd-20">
                <table class="table  table-border table-bordered table-hover table-bg">
                    <tbody> 
                        <tr>
                            <td class="text-l" colspan="2"> 5代内团队投资的总金额: <?php echo ($money); ?></td>

                        </tr>
                    </tbody>
                </table>
                </div>
       

    </div> 
            <ul id="treeDemo" class="ztree">
        </ul>
            </div>

         
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
<script type="text/javascript" src="/Public/H-ui/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script> 

<!---异步加载节点--->
<SCRIPT type="text/javascript">
function search()
{
  

    var setting = {
        view: {
            selectedMulti: false
        },
        async: {
            enable: true,
            url:"/Home/Member/mytree",
            autoParam: ["id","name"],
            dataFilter: filter,
            type: 'get',
            datatype: 'text',
        }, callback: {
           
            beforeClick: function () {
            
            },
            beforeAsync: function () {
           
            }
        }
    };
    zTreeObj = $.fn.zTree.init($("#treeDemo"), setting);
    

    function filter(treeId, parentNode, childNodes) {
        if (!childNodes)
            return null;
        for (var i = 0, l = childNodes.length; i < l; i++) {
            childNodes[i].name = childNodes[i].name.replace(/\.n/g, '.');
        }
        return childNodes;
    }
}

$(document).ready(function () {
    search();//树的初始化

});



</SCRIPT>