<extend file='resource/view/admin/article'/>
<block name="content">
	<!-- TAB NAVIGATION -->
	<ul class="nav nav-tabs" role="tablist">
		<li class=""><a href="{{u('lists')}}">幻灯片列表</a></li>
		<li class="active"><a href="{{u('post')}}">保存幻灯片</a></li>
	</ul>
	<form action="" method="post">

		<div class="form-group">
			<label>幻灯片名称</label>
<!--            title,url,displayorder,thumb-->
			<input type="text" class="form-control" name="title" value="{{$model['title']}}">
		</div>
        <div class="form-group">
            <label>跳转地址</label>
            <!--            title,url,displayorder,thumb-->
            <input type="text" class="form-control" name="url" value="{{$model['url']}}">
        </div>
        <div class="form-group">
            <label for="">排序</label>
            <input type="number" name="displayorder" class="form-control" value="{{$model['displayorder']}}">
        </div>
        <div class="form-group">
            <label for="">缩略图</label>
            <div>
                <div class="input-group">
                    <input type="text" class="form-control" name="thumb" readonly="" value="{{$model['thumb']}}">
                    <div class="input-group-btn">
                        <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                    </div>
                </div>
                <div class="input-group" style="margin-top:5px;">
<!--                    default_pic是自定义函数，在哪里呢？自己找！-->
                    <img src="{{default_pic($model['thumb'])}}" class="img-responsive img-thumbnail" width="150">
                    <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                </div>
            </div>
            <script>
                //上传图片
                function upImage(obj) {
                    require(['util'], function (util) {
                        options = {
                            multiple: true,//是否允许多图上传
                            //data是向后台服务器提交的POST数据
                            data:{name:'后盾人',year:2099},
                        };
                        util.image(function (images) {          //上传成功的图片，数组类型

                            $("[name='thumb']").val(images[0]);
                            $(".img-thumbnail").attr('src', images[0]);
                        }, options)
                    });
                }

                //移除图片
                function removeImg(obj) {
                    $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
                    $(obj).parent().prev().find('input').val('');
                }
            </script>
        </div>

		<button type="submit" class="btn btn-primary">保存</button>
	</form>
</block>

