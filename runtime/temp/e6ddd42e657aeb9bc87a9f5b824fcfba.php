<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/var/www/html/myo2o/public/../application/admin/view/user/deleted.html";i:1520584826;s:71:"/var/www/html/myo2o/public/../application/admin/view/public/header.html";i:1520584826;s:71:"/var/www/html/myo2o/public/../application/admin/view/public/footer.html";i:1520584826;}*/ ?>
<!--包含头部文件-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/style.css" />
  <link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/common.css" />
   <link rel="stylesheet" type="text/css" href="__STATIC__/admin/layui/css/layui.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>o2o平台</title>
<meta name="keywords" content="tp5打造o2o平台系统">
<meta name="description" content="o2o平台">
</head>
<body>

<div class="page-container">

	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="40">ID</th>
					<th width="100">用户名</th>
					<th width="30">排序序号</th>
					<th width="70">上次登录ip</th>
					<th width="70">上次登录时间</th>
					<th width="60">邮箱</th>
					<th width="50">电话</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($users) || $users instanceof \think\Collection): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td><?php echo $vo['id']; ?></td>
					<td><?php echo $vo['username']; ?></td>
					<td class="text-c listorder"><input size="3" attr-id="<?php echo $vo['id']; ?>"  name="listorder" value="<?php echo $vo['listorder']; ?>"/></td>
					<td><?php echo $vo['last_login_ip']; ?></td>
					<td><?php echo date("y-m-d h:i", $vo['last_login_time']); ?></td>
                    <td><?php echo $vo['email']; ?></td>
                    <td><?php echo $vo['mobile']; ?></td>
					<td class="td-manage"> <a style="text-decoration:none" class="ml-5" onClick="o2o_del('<?php echo url('user/status', ['id'=>$vo['id'], 'status'=>0]); ?>')" href="javascript:;" title="恢复"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>
<?php echo pagination($users); ?>
<!--包含头部文件-->
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>  
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/common.js"></script>
<script>
  var SCOPE = {
	'listorder_url': "<?php echo url('category/listorder'); ?>",
  };
  </script>
</body>
</html>