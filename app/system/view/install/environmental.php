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
				<a class="navbar-brand" href="#">吾若成魔 佛奈我何</a>
			</div>
		</nav>
		<ul class="list-group col-sm-3">
			<li class="list-group-item ">版权信息</li>
			<li class="list-group-item active">环境监测</li>
			<li class="list-group-item">初始数据</li>
			<li class="list-group-item">安装完成</li>
		</ul>
		<div class="panel panel-default col-sm-9" style="padding:0px">
			<div class="panel-heading">
				<h3 class="panel-title">系统环境</h3>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tbody>
					<tr>
						<th>php版本</th>
						<th>{{$data['php_version']}}</th>
					</tr>
						<tr>
							<td>服务器环境</td>
							<td>{{$data['server_software']}}</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
		<div class="panel panel-default col-sm-9" style="padding:0px">
			<div class="panel-heading">
				<h3 class="panel-title">环境检测</h3>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tbody>
					<tr>
						<th>php版本</th>
						<th>
							<if value="$data['version']">
								<i class="fa fa-check-circle alert-success"></i>
								<else/>
								<i class="fa fa-times-circle hd-error" ></i>
							</if>
						</th>
					</tr>
					<tr>
						<td>gd</td>
						<td>
							<if value="$data['gd']">
								<i class="fa fa-check-circle alert-success"></i>
								<else/>
								<i class="fa fa-times-circle hd-error" ></i>
							</if>
						</td>
					</tr>
					<tr>
						<td>curl</td>
						<td>
							<if value="$data['curl']">
								<i class="fa fa-check-circle alert-success"></i>
								<else/>
								<i class="fa fa-times-circle hd-error" ></i>
							</if>
						</td>
					</tr>
					<tr>
						<td>pdo</td>
						<td>
							<if value="$data['pdo']">
								<i class="fa fa-check-circle alert-success"></i>
								<else/>
								<i class="fa fa-times-circle hd-error"></i>
							</if>
						</td>
					</tr>
					</tbody>
				</table>
			</div>

		</div>
		<div style="float: right">
			<a class="btn btn-primary" href="{{u('system.install.copyright')}}">上一步</a>
			<button type="button" onclick="nextStep()" class="btn btn-success">下一步</button>

		</div>
	</div>
</div>
<script>
    function nextStep() {
        //alert($('.hd-error').length);
            require(['jquery','util'],function($,util){
                if($('.hd-error').length>0){
                    util.message('系统环境不符合安装要求','','error');
                }else{
                    location.href = "{{u('system.install.database')}}"
                }
            })
    }
</script>
</body>
