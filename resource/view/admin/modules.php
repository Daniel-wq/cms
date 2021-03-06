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
                        <h4 class="panel-title">模块管理</h4>
                        <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                            <i class="fa fa-chevron-circle-down"></i>
                        </a>
                    </div>
                    <ul class="list-group menus">

                        <li class="list-group-item" id="3">
                            <a href="{{u('modules.modules.lists')}}">模块列表</a>
                        </li>
                        <li class="list-group-item" id="3">
                            <a href="{{u('modules.modules.design')}}">设计模块</a>
                        </li>
                    </ul>
                    <if value="$modules">
                        <div class="panel-heading">
                            <h4 class="panel-title">扩展插件</h4>
                            <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                                <i class="fa fa-chevron-circle-down"></i>
                            </a>
                        </div>
                        <ul class="list-group menus">
                            <foreach from="$modules" value="$v">
                                <li class="list-group-item" id="3">
                                    <a href="?m={{$v['name']}}&a=controller/entry/index">{{$v['title']}}</a>
                                </li>
                            </foreach>

                        </ul>
                        <else/>
                        <div class="panel-heading">
                            <h4 class="panel-title">业务功能</h4>
                            <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                                <i class="fa fa-chevron-circle-down"></i>
                            </a>
                        </div>
                        <blade name="business"/>

                    </if>


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
        Powered by hdcms v2.0 © 2014-2019 <a href="http://www.nickblog.cn">www.nickblog.cn</a> runtime: 0.08
    </div>


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

    </body>
    </html>

    <style>
        table {
            table-layout: fixed;
        }
    </style>