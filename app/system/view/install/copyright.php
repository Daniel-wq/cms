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
                <a class="navbar-brand" href="#">吾若成佛 天下无魔</a>
            </div>
        </nav>
        <ul class="list-group col-sm-3">
        	<li class="list-group-item active">版权信息</li>
        	<li class="list-group-item">环境监测</li>
        	<li class="list-group-item">初始数据</li>
        	<li class="list-group-item">安装完成</li>
        </ul>
        <div class="panel panel-default col-sm-9" style="padding:0px">
        	  <div class="panel-heading">
        			<h3 class="panel-title">版权信息</h3>
        	  </div>
        	  <div class="panel-body">
                  从事IT行业10年以上，服务过中国石油、光大银行、丰田汽车、宝洁公司等企业。擅长php、mysql、linux、javascript、html5、css3、jquery等编程语言和数据库系统。具有多年培训经验，讲课思路清晰，重点突出，实用性强，通俗易懂。并开发HDPHP框架与HDCMS系统从事IT行业10年以上，服务过中国石油、光大银行、丰田汽车、宝洁公司等企业。擅长php、mysql、linux、javascript、html5、css3、jquery等编程语言和数据库系统。具有多年培训经验，讲课思路清晰，重点突出，实用性强，通俗易懂。并开发HDPHP框架与HDCMS系统从事IT行业10年以上，服务过中国石油、光大银行、丰田汽车、宝洁公司等企业。擅长php、mysql、linux、javascript、html5、css3、jquery等编程语言和数据库系统。具有多年培训经验，讲课思路清晰，重点突出，实用性强，通俗易懂。并开发HDPHP框架与HDCMS系统从事IT行业10年以上，服务过中国石油、光大银行、丰田汽车、宝洁公司等企业。擅长php、mysql、linux、javascript、html5、css3、jquery等编程语言和数据库系统。具有多年培训经验，讲课思路清晰，重点突出，实用性强，通俗易懂。并开发HDPHP框架与HDCMS系统
        	  </div>
        </div>
        <div style="float: right">
            <a class="btn btn-success" href="{{u('system.install.environmental')}}">下一步</a>
        </div>
    </div>
</div>
</body>
