<extend file='resource/view/admin/wechat'/>
<block name="content">

    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{url('base.wechat.lists')}}">关键词回复列表</a></li>
        <li><a href="{{url('base.wechat.post')}}">保存关键词回复</a></li>
    </ul>
    <!-- TAB CONTENT -->
    <div class="tab-content">
        <div class="active tab-pane fade in" id="tab1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th width="30">ID</th>
                    <th>回复内容</th>
                    <th>回复关键字</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                    <foreach from="$data" value="$v">
                        <tr>
                            <td>{{$v['bid']}}</td>
                            <td>{{$v['con']}}</td>
                            <td>{{$v['content']}}</td>
<!--                            <td>{{$v->keywords->content}}</td>-->
                            <td>
                                <a href="{{url('base.wechat.post',['bid'=>$v['bid']])}}" class="btn btn-primary btn-xs">编辑</a>
                                <a href="javascript:if(confirm('确定删除吗？')) location.href='{{url('base.wechat.remove',['bid'=>$v['bid']])}}';" class="btn btn-danger btn-xs">删除</a>
                            </td>
                        </tr>
                    </foreach>
                </tbody>
            </table>
        </div>

    </div>

</block>

