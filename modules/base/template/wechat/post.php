<extend file='resource/view/admin/wechat'/>
<block name="content">
    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        <li class=""><a href="{{url('base.wechat.lists')}}">关键词回复列表</a></li>
        <li class="active"><a href="{{url('base.wechat.post')}}">保存关键词回复</a></li>
    </ul>
	<form action="" method="post" class="">


		<div class="form-group">
			<label class="">关键词</label>
            <textarea name="keywords" class="form-control" cols="30" rows="3">{{$keywords['content']}}</textarea>
		</div>
        <div class="form-group">
            <label>回复内容</label>
            <textarea name="content" class="form-control" cols="30" rows="3">{{$model['content']}}</textarea>
        </div>


		<button type="submit" class="btn btn-primary">保存</button>
	</form>
</block>

