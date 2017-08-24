<extend file='resource/view/admin/article'/>
<block name="content">

    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{u('lists')}}">栏目列表</a></li>
        <li><a href="{{u('post')}}">栏目添加/编辑</a></li>
    </ul>

    <div class="tab-content">
        <div class="active tab-pane fade in">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th width="30">ID</th>
                    <th>名称</th>
                    <th>封面栏目</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                <foreach from="$data" value="$v">
                    <tr>
                        <td>{{$v['cid']}}</td>
                        <td>{{$v['_catname']}}</td>
                        <td>
                            <if value="$v['iscover']">
                                <i style="color: green" class="fa fa-check-square fa-2x"></i>

                                <else/>
                                <i style="color: red" class="fa fa-ban fa-2x"></i>

                            </if>
                        </td>
                        <td>
                            <a href="{{__ROOT__}}/c_{{$v['cid']}}.html" target="_blank" class="btn btn-success btn-xs">预览</a>
                            <a href="{{u('post',['cid'=>$v['cid']])}}" class="btn btn-primary btn-xs">编辑</a>
                            <a href="javascript:if(confirm('确定删除吗？')) location.href='{{u('remove',['cid'=>$v['cid']])}}';"
                               class="btn btn-danger btn-xs">删除</a>
                        </td>
                    </tr>
                </foreach>
                </tbody>
            </table>
        </div>
    </div>

</block>

