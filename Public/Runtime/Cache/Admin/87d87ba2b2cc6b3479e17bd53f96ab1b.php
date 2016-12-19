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
<title>会员列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>会员管理 <span class="c-gray en">&gt;</span>会员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
<form method="get" action="/index.php/Admin/Member/index.html">
<div class="text-c"> 
<label><input name="search_status" value="1" type="radio" <?php if($arr['search_status'] == 1): ?>checked='checked' <?php elseif($_GET['search_status']== 1): ?>checked='checked'<?php endif; ?>>&nbsp;启&nbsp;用</label>&nbsp;
 <label><input name="search_status" value="3" type="radio" <?php if($arr['search_status'] == 3): ?>checked='checked'<?php elseif($_GET['search_status']== 3): ?>checked='checked'<?php endif; ?>>&nbsp;冻&nbsp;结</label>&nbsp;
 <label><input name="search_status" value="2" type="radio" <?php if($arr['search_status'] == 2): ?>checked='checked'<?php elseif($_GET['search_status']== 2): ?>checked='checked'<?php endif; ?>>&nbsp;删&nbsp;除</label>&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;
	日期范围：
    <input type="text" onFocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" name='search_starttime' class="input-text Wdate" style="width:120px;" value="<?php echo ($arr['search_starttime']); ?>">
    -
    <input type="text" onFocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})" name='search_endtime' id="datemax" class="input-text Wdate" style="width:120px;" value="<?php echo ($arr['search_endtime']); ?>">
    <input type="text" class="input-text" style="width:250px" placeholder="输入账号" id="" value="<?php echo ($arr['search_username']); ?>" name="search_username" ><button type="submit" class="btn btn-success" id="" ><i class="Hui-iconfont">&#xe665;</i> 搜会员</button> <button type="button" class="btn btn-success excel" id="" onclick='window.location.href="<?php echo U("Member/downloadexcel");?>"' ><i class="Hui-iconfont">&#xe640</i> Excel</button>
	
	</div></form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
            <span class="l"> 
              <button type="button" class="btn btn-success" onClick="showPage('660','500','添加会员','<?php echo U('Member/useradd');?>')" href="javascript:;" ><i class="Hui-iconfont">&#xe600;</i> 添加会员</button>
              <button type="button" class="btn btn-success" id="" onClick="showPage('600','350','充值','<?php echo U('Member/recharge');?>')" href="javascript:;" ><i class="Hui-iconfont">&#xe600;</i> 充值</button>
              <button type="button" class="btn btn-success " id="" onClick="showPage('600','350','扣币','<?php echo U('Member/deduct');?>')" href="javascript:;" ><i class="Hui-iconfont">&#xe6df;</i> 扣币</button>
            </span> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
	<div class="mt-0">
	<table class="table table-border table-bordered table-hover table-bg ">
		<thead>
			<tr class="text-c">
			<th width="">ID</th>
			<th width="">账号</th>
			<th width="">姓名</th>
			<th width="">手机</th>
			<th width="">推荐人</th>
                        <th width="">推荐人姓名</th>
			<th width="">直线人数</th>
			<th width="">团队人数</th>
			<th width="">本金钱袋</th>
			<th width="">收益钱袋</th>
                        <th width="">投资金额</th>
			<th width="130">注册时间</th>
			<th width="30">状态</th>
			<th width="120">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
        <td><?php echo ($i); ?></td>
        <td class="text-l"><u style="cursor:pointer" class="text-primary" onclick="showPage('550','500','查看','<?php echo U('Member/usershow',array('id'=>$vo['id']));?>')"  ><?php echo ($vo["username"]); ?></u></td>
		<td class="text-l"><u style="cursor:pointer" class="text-primary"><a href='<?php echo U("/Home/Login/back_login",array("m"=>base64_encode($vo["id"])));?>' target='_blank'><?php echo ($vo["name"]); ?></a></u></td>
		<td class="text-l"><?php echo ($vo["mobile"]); ?></td>
		<td class="text-l"><?php echo ($vo["recommend"]); ?></td>
		<td ><?php echo ($vo["recommendname"]); ?></td>
		<td><?php echo ($vo["directnum"]); ?></td>
		<td><?php echo ($vo["group"]); ?></td>
		<td><?php echo ($vo["principal"]); ?></td>
		<td><?php echo ($vo["profit"]); ?></td>
                <td><?php echo ($vo["touzimoney"]); ?></td>
                <td><?php echo (date('Y-m-d H:i:s',$vo["regtime"])); ?></td>
		<?php if($vo["status"] == 3 ): ?><td class="td-status"><span  class="label">已冻结</span></td>
                <td class="f-14 td-manage"><a style="text-decoration:none" onClick="start(this,'<?php echo ($vo["id"]); ?>','<?php echo U('Member/user_start');?>','<?php echo U('Member/user_stop');?>')" href="javascript:;" title=""><i class="Hui-iconfont">&#xe631;</i></a>
                <?php elseif($vo["status"] == 2): ?>
		<td class="td-status"><span  class="label label-danger">已删除</span></td>
                <td class="f-14 td-manage"><a style="text-decoration:none" onClick="start(this,'<?php echo ($vo["id"]); ?>','<?php echo U('Member/user_start');?>','<?php echo U('Member/user_stop');?>')" href="javascript:;" title=""><i class="Hui-iconfont">&#xe631;</i></a>
		<?php else: ?>
		<td class="td-status"><span class="label label-success">已启用</span></td>
                <td class="f-14 td-manage"><a style="text-decoration:none" onClick="stop(this,'<?php echo ($vo["id"]); ?>','<?php echo U('Member/user_stop');?>','<?php echo U('Member/user_start');?>')" href="javascript:;" title=""><i class="Hui-iconfont">&#xe6e1;</i></a><?php endif; ?>
		<a title="编辑" href="javascript:;" onclick="showPage('550','500','修改资料','<?php echo U('Member/useredit',array('id'=>$vo['id']));?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
		<a style="text-decoration:none" class="ml-5" onclick="showPage('350','300','修改密码','<?php echo U('Member/userpasswordedit',array('id'=>$vo['id']));?>')" href="javascript:;" title="修改密码"><i class="Hui-iconfont">&#xe63f;</i></a>
		<a style="text-decoration:none" class="ml-5" onclick="showPage('350','300','修改二级密码','<?php echo U('Member/usertowpasswordedit',array('id'=>$vo['id']));?>')" href="javascript:;" title="修改二级密码"><i class="Hui-iconfont">&#xe605;</i></a>
		<a title="删除" href="javascript:;" onClick="del(this,<?php echo ($vo["id"]); ?>,'<?php echo U('Member/userDel');?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td   style="text-align: right" >合计：</td>
                    <td><?php echo ($benjin); ?></td>
                    <td><?php echo ($shouyi); ?></td>
                    <td><?php echo ($touzi); ?></td> 
                    <td></td>
                    <td></td> 
                    <td></td>
                    <td></td>
                </tr>
	  </tbody>
	</table>  
	<div id="pageNav" class="pageNav"><?php echo ($page); ?></div>
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
<script type="text/javascript" src="/Public/H-ui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/H-ui/static/h-ui.admin/js/H-ui.admin.js"></script> 

</body>
</html>