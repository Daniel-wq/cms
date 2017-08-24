<extend file='resource/view/admin/system'/>
<block name="content">

    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{u('lists')}}">备份列表</a></li>
    </ul>
    <!-- TAB CONTENT -->
    <div class="tab-content">
        <div class="alert alert-warning">
            {{$msg}}
        </div>

    </div>
    <script>
        setTimeout(function () {
            location.href = '{{$_SERVER['REQUEST_URI']}}';
        }, 1000);
    </script>


</block>

