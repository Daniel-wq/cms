<extend file='resource/view/admin/wechat'/>
<block name="content">
	<!-- TAB NAVIGATION -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#">回复</a></li>
	</ul>
	<form action="" method="post">

		<div class="form-group">
			<label>关注回复</label>
			<input type="text" class="form-control" name="subscribe" value="{{$model['subscribe']}}">
		</div>
        <div class="form-group">
            <label>默认回复</label>
            <input type="text" class="form-control" name="default" value="{{$model['default']}}">
        </div>

		<button type="submit" class="btn btn-primary">保存</button>
	</form>
</block>

