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
  
<link rel="stylesheet" href="/Public/H-ui/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<title></title>
</head>
<body style='background-color: #DCE0EB;'>
   
   
    <div class="pos-a" style="width:100%;left:0;top:0; bottom:0; height:100%;margin-left:15px;background: #fff; ">
             <nav class="breadcrumb" style='height: 45px;line-height: 45px;font-size: 16px;'>团队列表</nav>
                <div class="pd-20">
                <table class="table  table-border table-bordered table-hover table-bg">
                    <tbody> 
                        <tr>
                            <td class="text-l" colspan="2"> 5代内团队投资的总金额: <?php echo ($money); ?></td>

                        </tr>
                    </tbody>
                </table>
                </div>
        <ul id="treeDemo" class="ztree">
        </ul>
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