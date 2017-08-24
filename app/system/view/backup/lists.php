<extend file='resource/view/admin/system'/>
<block name="content">

    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{u('lists')}}">备份列表</a></li>
    </ul>
    <!-- TAB CONTENT -->
    <div class="tab-content">
        <div class="active tab-pane fade in" id="tab1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>路径</th>
                    <th>备份时间</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                    <foreach from="$dirs" value="$v">
                        <tr>
                            <td>{{$v['path']}}</td>
                            <td>{{date('y-m-d H:i:s',$v['filemtime'])}}</td>
                            <td>
                                <a href="{{u('recovery',['path'=>$v['path']])}}" class="btn btn-primary btn-xs">还原</a>
                                <a href="javascript:if(confirm('确定删除吗？')) location.href='{{u('remove',['path'=>$v['path']])}}';" class="btn btn-danger btn-xs">删除</a>
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

