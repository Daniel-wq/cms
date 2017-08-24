<extend file='resource/view/admin/article'/>
<block name="content">

    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{u('lists')}}">幻灯片列表</a></li>
        <li><a href="{{u('post')}}">保存幻灯片</a></li>
    </ul>
    <!-- TAB CONTENT -->
    <div class="tab-content">
        <div class="active tab-pane fade in" id="tab1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>名称</th>
                    <th>缩略图</th>
                    <th>跳转地址</th>
                    <th>排序</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                <foreach from="$data" value="$v">
                    <tr>
                        <td>{{$v['title']}}</td>
                        <td><img src="{{__ROOT__}}/{{$v['thumb']}}" width="100"></td>
                        <td>{{$v['url']}}</td>
                        <td>{{$v['displayorder']}}</td>

                        <td>
                            <a href="{{$v['url']}}" target="_blank" class="btn btn-success btn-xs">预览</a>
                            <a href="{{u('post',['id'=>$v['id']])}}" class="btn btn-primary btn-xs">编辑</a>
                            <a href="javascript:if(confirm('确定删除吗？')) location.href='{{u('remove',['cid'=>$v['cid']])}}';"
                               class="btn btn-danger btn-xs">删除</a>
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

