<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>后盾网 - HDCMS开源免费内容管理系统</title>
	<meta name="csrf-token" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
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

	<link href="{{__ROOT__}}/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{__ROOT__}}/node_modules/hdjs/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{__ROOT__}}/resource/css/hdcms.css" rel="stylesheet">
</head>
<body>
<form action="" method="POST" class="form-horizontal" onsubmit="return post(event)">
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
					<a class="navbar-brand" href="#">踏破凌霄~</a>
				</div>
			</nav>
			<ul class="list-group col-sm-3">
				<li class="list-group-item ">版权信息</li>
				<li class="list-group-item ">环境监测</li>
				<li class="list-group-item active">初始数据</li>
				<li class="list-group-item">安装完成</li>
			</ul>
			<div class="panel panel-default col-sm-9" style="padding:0px">
				<div class="panel-heading">
					<h3 class="panel-title">初始数据</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">主机地址</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="host" value="cms.daniel-w.cn">
						</div>
					</div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">数据库用户名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="user" value="wqcms">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">密码</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="password" value="wangqiang">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">数据库</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="database" value="wqcms">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">表前缀</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="prefix" value="cms_">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">后台登录账号</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="admin_username" value="daniel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">后台登录密码</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="admin_password" value="admin">
                        </div>
                    </div>
				</div>

			</div>
			<div style="float: right">
				<a class="btn btn-primary" href="{{u('system.install.environmental')}}">上一步</a>
				<button type="submit" class="btn btn-success">下一步</button>

			</div>
		</div>
	</div>

</form>
<script>
    function post(event) {
        //alert(1);
        event.preventDefault();//阻止表单默认行文
        require(['util'], function (util) {
            util.submit({
                successUrl:"{{u('system.install.tables')}}"
            });
        });
    }
</script>
</body>
