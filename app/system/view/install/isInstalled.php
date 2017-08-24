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
            		<a class="navbar-brand" href="#">相遇皆是缘 缘尽莫强求</a>
            	</div>
            </nav>
            <div class="panel panel-default">
                <div class="panel-body">
                    系统已经安装，不允许重复安装
                </div>
            </div>
            <div style="float: right">
                <a class="btn btn-primary" href="{{u('admin.user.login')}}">去登陆</a>
            </div>
        </div>
    </div>
</body>