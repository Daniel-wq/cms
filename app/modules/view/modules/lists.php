<extend file='resource/view/admin/modules'/>
<block name="content">

    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{u('lists')}}">模块列表</a></li>
        <li><a href="{{u('design')}}">设计模块</a></li>
    </ul>
    <!-- TAB CONTENT -->
    <div class="tab-content">
        <div class="active tab-pane fade in" id="tab1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>预览图</th>

                    <th>标识</th>
                    <th>名称</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                    <foreach from="$data" value="$v">
                        <tr>
                            <td>
                                <img src="{{__ROOT__ . '/' . $v['preview']}}" width="100">
                            </td>
                            <td>{{$v['name']}}</td>

                            <td>{{$v['title']}}</td>
                            <td>
                                <if value="$v['installed']">
                                    <a href="javascript:if(confirm('确定卸载吗？')) location.href='{{u('uninstall',['name'=>$v['name']])}}';" class="btn btn-danger btn-xs">卸载</a>

                                    <else/>
                                    <a href="{{u('install',['name'=>$v['name']])}}" class="btn btn-primary btn-xs">安装</a>

                                </if>
                            </td>
                        </tr>
                    </foreach>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="tab2">
            <h2>Tab2</h2>
            <p>Lorem ipsum.</p>
        </div>

    </div>

</block>

