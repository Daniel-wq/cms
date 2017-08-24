<extend file='resource/view/admin/modules'/>
<block name="content">
	<!-- TAB NAVIGATION -->
	<ul class="nav nav-tabs" role="tablist">
		<li class=""><a href="{{u('lists')}}">模块列表</a></li>
		<li class="active"><a href="{{u('design')}}">设计模块</a></li>
	</ul>
	<form action="" method="post">

		<div class="form-group">
			<label>标识</label>
			<input type="text" class="form-control" name="name" value="{{old('name')}}" required>
            <span class="help-block">模块标识必须为数字字母下划线的组合且必须以字母开头</span>
		</div>
        <div class="form-group">
            <label>名称</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}">
            <span class="help-block">可以是汉字</span>
        </div>
        <div class="form-group">
            <label>作者</label>
            <input type="text" class="form-control" name="author" value="{{old('author')}}">
        </div>
        <div class="form-group">
            <label>介绍</label>
            <textarea name="resume" class="form-control" cols="30" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>sql</label>
            <textarea name="sql" class="form-control" cols="30" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="">预览图</label>
            <div>
                <div class="input-group">
                    <input type="text" class="form-control" name="preview" readonly="">
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
                            multiple: false,//是否允许多图上传
                            //data是向后台服务器提交的POST数据
                            data:{name:'后盾人',year:2099},
                        };
                        util.image(function (images) {          //上传成功的图片，数组类型

                            $("[name='preview']").val(images[0]);
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
        <div class="form-group">
            <label class="checkbox-inline">
                <input type="checkbox" name="is_wechat" value="1"> 是否操作微信
            </label>

        </div>


		<button type="submit" class="btn btn-primary">保存</button>
	</form>
</block>

