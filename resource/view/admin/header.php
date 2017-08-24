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
<body class="site">
<div class="container-fluid admin-top">
	<!--导航-->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="nav navbar-nav">

					<li>
						<a href="{{__ROOT__}}" target="_blank">
							<i class="fa fa-reply-all"></i> 返回首页
						</a>
					</li>

                    <li class="top_menu  <?php if(APP == 'admin'): ?>active<?php endif ?>">
						<a href="{{u('admin.category.lists')}}" class="quickMenuLink">
							<i class="'fa-w fa fa-comments-o"></i> 文章管理                       </a>
					</li>
					<li class="top_menu  <?php if(APP == 'wechat'): ?>active<?php endif ?>">
						<a href="{{u('wechat.config.setting')}}" class="quickMenuLink">
							<i class="'fa-w fa fa-cube"></i> 微信管理                        </a>
					</li>
                    <li class="top_menu  <?php if(APP == 'system'): ?>active<?php endif ?>">
                        <a href="{{u('system.config.setting')}}" class="quickMenuLink"><i class="'fa-w fa fa-archive"></i> 系统管理                        </a>
                    </li>
                    <li class="top_menu  <?php if(APP == 'modules'): ?>active<?php endif ?>">
                        <a href="{{u('modules.modules.lists')}}" class="quickMenuLink"><i class="'fa-w fa fa-archive"></i> 扩展模块                        </a>
                    </li>


                    </ul>
                </div>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
							<i class="fa fa-w fa-user"></i>
							{{Session::get('user.username')}}                          <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="{{u('system.config.changePassword')}}">修改密码</a></li>

							<li role="separator" class="divider"></li>
							<li><a href="{{u('admin.user.logout')}}">退出</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--导航end-->
</div>