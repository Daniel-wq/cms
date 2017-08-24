<extend file='resource/view/admin/wechat'/>
<block name="content">
	<!-- TAB NAVIGATION -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#">微信配置</a></li>
	</ul>
	<form action="" method="post">

		<div class="form-group">
			<label>公众号名称</label>
			<input type="text" class="form-control" name="webname" value="{{$model['webname']}}">
		</div>
        <div class="form-group">
            <label>微信号</label>
            <input type="text" class="form-control" name="account" value="{{$model['account']}}">
        </div>
        <div class="form-group">
            <label>appid</label>
            <input type="text" class="form-control" name="appid" value="{{$model['appid']}}">
        </div>
        <div class="form-group">
            <label>appsecret</label>
            <input type="text" class="form-control" name="appsecret" value="{{$model['appsecret']}}">
        </div>
        <div class="form-group">
            <label>token</label>
            <input type="text" class="form-control" name="token" value="{{$model['token']}}">
        </div>
        <div class="form-group">
            <label>encodingaeskey</label>
            <input type="text" class="form-control" name="encodingaeskey" value="{{$model['encodingaeskey']}}">
        </div>

		<button type="submit" class="btn btn-primary">保存</button>
	</form>
</block>

