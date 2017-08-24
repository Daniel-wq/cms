<include file="resource/view/admin/header"/>
<!--主体-->
<div class="container-fluid admin_menu">
	<div class="row">
		<div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
			<div class="search-menu">
			</div>
			<!--扩展模块动作 start-->
			<div class="panel panel-default">
				<!--系统菜单-->


				<div class="panel-heading">
					<h4 class="panel-title">栏目管理</h4>
					<a class="panel-collapse" data-toggle="collapse" href="javascript:;">
						<i class="fa fa-chevron-circle-down"></i>
					</a>
				</div>
				<ul class="list-group menus">
					<li class="list-group-item" id="3">
						<a href="{{u('category.lists')}}">栏目列表</a>
					</li>
					<li class="list-group-item" id="30">
						<a href="{{u('category/post')}}">栏目添加</a>
					</li>
				</ul>
                <div class="panel-heading">
                    <h4 class="panel-title">文章管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus">
                    <li class="list-group-item" id="3">
                        <a href="{{u('article.lists')}}">文章列表</a>
                    </li>
                    <li class="list-group-item" id="30">
                        <a href="{{u('article/post')}}">文章添加</a>
                    </li>
                </ul>

                <div class="panel-heading">
                    <h4 class="panel-title">幻灯片管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus">
                    <li class="list-group-item" id="3">
                        <a href="{{u('slide.lists')}}">幻灯片列表</a>
                    </li>
                    <li class="list-group-item" id="30">
                        <a href="{{u('slide.post')}}">幻灯片添加</a>
                    </li>
                </ul>



				<!----------返回模块列表 start------------>
				<!--模块列表-->
				<!--模块列表 end-->
			</div>

		</div>
        <div class="col-xs-12 col-sm-9 col-lg-10">
        <blade name="content"/>
        </div>

    </div>

</div>
<div class="master-footer">
	<a href="http://www.houdunwang.com">猎人训练</a>
	<a href="http://www.hdphp.com">开源框架</a>
	<a href="http://bbs.houdunwang.com">后盾论坛</a>
	<br>
	Powered by hdcms v2.0 © 2014-2019 cms.nickblog.cn runtime: 0.08</div>

<script>
    require(['bootstrap']);
</script>
<!--右键菜单添加到快捷导航-->
<div id="context-menu">
	<ul class="dropdown-menu" role="menu">
		<li><a tabindex="-1" href="#">添加到快捷菜单</a></li>
	</ul>
</div>
<!--右键菜单删除快捷导航-->
<div id="context-menu-del">
	<ul class="dropdown-menu" role="menu">
		<li><a tabindex="-1" href="#">删除菜单</a></li>
	</ul>
</div>
<!--底部快捷菜单导航-->
<script src="http://www.houdunwang.com/resource/js/menu.js"></script>
<script src="http://www.houdunwang.com/resource/js/quick_navigate.js"></script>

</body>
</html>

<style>
	table {
		table-layout: fixed;
	}
</style>