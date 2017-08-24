<extend file='resource/view/admin/modules'/>
<block name="business">
    <ul class="list-group menus">
        <li class="list-group-item" id="3">
            <a href="?m=links&a=controller/entry/post">保存友链</a>
        </li>
        <li class="list-group-item" id="3">
            <a href="?m=links&a=controller/entry/index">友链列表</a>
        </li>
    </ul>
</block>
<block name="content">

    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{url('links.entry.index')}}">友链列表</a></li>
        <li class=""><a href="{{url('links.entry.post')}}">保存友链</a></li>
    </ul>
    <!-- TAB CONTENT -->
    <div class="tab-content">
        <div class="active tab-pane fade in" id="tab1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th width="30">ID</th>
                    <th>名称</th>
                    <th>跳转地址</th>
                    <th>排序</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                <foreach from="$data" value="$v">
                    <tr>
                        <td>{{$v['lid']}}</td>
                        <td>
                            <a href="{{$v['url']}}" target="_blank">{{$v['lname']}}</a>
                        </td>
                        <td>{{$v['url']}}</td>
                        <td>{{$v['orderby']}}</td>

                        <td>
                            <a href="{{url('links.entry.post',['id'=>$v['lid']])}}" class="btn btn-primary btn-xs">编辑</a>
                            <a href="javascript:if(confirm('确定删除吗？')) location.href='{{url('links.entry.remove',['id'=>$v['lid']])}}';"
                               class="btn btn-danger btn-xs">删除</a>
                        </td>
                    </tr>
                </foreach>
                </tbody>
            </table>
        </div>
    </div>

</block>

