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
		<li class=""><a href="{{url('links.entry.index')}}">友链列表</a></li>
		<li class="active"><a href="{{url('links.entry.post')}}">保存友链</a></li>
	</ul>
	<form action="" method="post">

		<div class="form-group">
			<label>名称</label>
			<input type="text" class="form-control" name="lname" value="{{$model['lname']}}">
		</div>
        <div class="form-group">
            <label>跳转地址</label>
            <input type="text" class="form-control" name="url" value="{{$model['url']}}">
        </div>
        <div class="form-group">
            <label>排序</label>
            <input type="number" class="form-control" name="orderby" value="{{$model['orderby']}}">
        </div>

		<button type="submit" class="btn btn-primary">保存</button>
	</form>
</block>

