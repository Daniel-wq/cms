<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>后盾网 - HDCMS开源免费内容管理系统</title>
	<meta name="csrf-token" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<link href="{{__ROOT__}}/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{__ROOT__}}/node_modules/hdjs/css/font-awesome.min.css" rel="stylesheet">

	<script>
        //模块配置项
        var hdjs = {
            //框架目录
            'base': '{{__ROOT__}}/node_modules/hdjs',
            //上传文件后台地址
            'uploader': '?s=component/upload/uploader',
            //获取文件列表的后台地址
            'filesLists': '?s=component/upload/filesLists',
        };
	</script>
	<script src="{{__ROOT__}}/node_modules/hdjs/app/util.js"></script>
	<script src="{{__ROOT__}}/node_modules/hdjs/require.js"></script>
	<script src="{{__ROOT__}}/node_modules/hdjs/config.js"></script>

	<link href="{{__ROOT__}}/resource/css/hdcms.css" rel="stylesheet">

</head>
<body>
<div class="container">
	<div class="row">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">我要这天，再遮不住我眼 要这地，再埋不了我心 要这众生，都明白我意 要那诸佛，都烟消云散！</a>
			</div>
		</nav>
		<ul class="list-group col-sm-3">
			<li class="list-group-item ">版权信息</li>
			<li class="list-group-item">环境监测</li>
			<li class="list-group-item">初始数据</li>
			<li class="list-group-item active">安装完成</li>
		</ul>
		<div class="panel panel-default col-sm-9" style="padding:0px">
			<div class="panel-heading">
				<h3 class="panel-title">版权信息</h3>
			</div>
			<div class="panel-body">
				<div class="alert alert-success">
                    恭喜！！安装完成
                </div>
			</div>
		</div>
		<div style="float: right">
			<a class="btn btn-success" href="{{u('system.install.database')}}">上一步</a>
			<a class="btn btn-primary" href="{{u('admin.user.login')}}">去登陆</a>
		</div>
	</div>
</div>
</body>
