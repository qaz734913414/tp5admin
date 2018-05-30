<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"E:\phpStudy\WWW\tp5\public/../application/admin\view\banner\index.html";i:1526521956;s:59:"E:\phpStudy\WWW\tp5\application\admin\view\public\head.html";i:1526972461;s:61:"E:\phpStudy\WWW\tp5\application\admin\view\public\footer.html";i:1526521956;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台通用版软件by 沙坪坝韩宇 QQ571031767</title>
<script src="/static/loading.js"></script>
<!--本文件只包含一些相应的js  css 等文件-->
<script src="/static/js/jquery.js"></script>
<!--后台改版为layui-->
<link rel="stylesheet" href="/static/layui/css/layui.css">
<script src="/static/layui/layui.js"></script>
<script src="/static/js/functions.js"></script>



<!--amazeui cdn-->
<!--<link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.css">-->
<!--<link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.min.css">-->
<!--<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.js"></script>-->
<!--<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.min.js"></script>-->
<!--<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.ie8polyfill.js"></script>-->
<!--<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.ie8polyfill.min.js"></script>-->
<!--<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.widgets.helper.js"></script>-->
<!--<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.widgets.helper.min.js"></script>-->
<!--amazeui cdn-->
<style>
    body{background-color: #FFF}
    /*分页样式 bootstrap*/
    .pagination {
        height: 40px;
        margin: 20px 0;
    }
    .pagination ul {
        border-radius: 3px 3px 3px 3px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        display: inline-block;
        margin-bottom: 0;
        margin-left: 0;
    }
    .pagination li {
        display: inline;
    }
    .pagination a, .pagination span {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background-color: #FFFFFF;
        border-color: #DDDDDD;
        border-image: none;
        border-style: solid;
        border-width: 1px 1px 1px 0;
        float: left;
        line-height: 38px;
        padding: 0 14px;
        text-decoration: none;
    }
    .pagination a:hover, .pagination .active a, .pagination .active span {
        background-color: #F5F5F5;
    }
    .pagination .active a, .pagination .active span {
        color: #999999;
        cursor: default;
    }
    .pagination .disabled span, .pagination .disabled a, .pagination .disabled a:hover {
        background-color: transparent;
        color: #999999;
        cursor: default;
    }
    .pagination li:first-child a, .pagination li:first-child span {
        border-left-width: 1px;
        border-radius: 3px 0 0 3px;
    }
    .pagination li:last-child a, .pagination li:last-child span {
        border-radius: 0 3px 3px 0;
    }
    .pagination-centered {
        text-align: center;
    }
    .pagination-right {
        text-align: right;
    }
    body{padding: 15px;}


    .needs_handle{width: 49%; float:left; margin-bottom: 20px; min-height: 230px;}

    .layadmin-backlog-body {
        display: block;
        padding: 10px 15px;
        background-color: #f8f8f8;
        color: #999;
        border-radius: 2px;
        transition: all .3s;
        -webkit-transition: all .3s;
    }

    .layadmin-backlog-body h3 {
        padding-bottom: 10px;
        font-size: 12px;
    }
    .layadmin-backlog-body p cite {
        font-style: normal;
        font-size: 30px;
        font-weight: 300;
        color: #009688;
    }
</style>
</head>
<body>
<button onclick="open_add_html()" class="layui-btn layui-btn-primary" style="float: left"><i class="layui-icon" style="font-size: 30px; color: red">&#xe654;</i> 新增轮播</button>

<form action="<?php echo url('index'); ?>" method="post" style="float: left; margin-left: 15px;">
    <div class="layui-form-item">
        <div class="layui-input-inline">
            <input type="text" name="title" required lay-verify="required" placeholder="输入关键词" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux"><button type="submit" class="layui-btn" style="margin-top: -8px">搜索</button></div>
    </div>
</form>

<table class="layui-table">
<tr>
    <td>id</td>
    <td>名称</td>
    <td>图片</td>
    <td>添加时间</td>
    <td>添加者</td>
    <td>是否显示</td>
    <td>操作</td>
</tr>

    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <tr>
        <td><?php echo $v['id']; ?></td>
        <td><?php echo $v['title']; ?></td>
        <td><img src="/<?php echo $v['picture']; ?>" alt=""></td>
        <td><?php echo date( "Y-m-d H:i:s" ,$v['add_time']); ?></td>
        <td><?php echo $v['user']; ?></td>
        <td>
            <span id="status" onclick="change_status(<?php echo $v['id']; ?>);" style="cursor: pointer" class="layui-btn layui-btn-primary">
            <?php switch($v['status']): case "1": ?>
                <i class="layui-icon">是&#xe618;</i>
                <?php break; default: ?>
                <i class="layui-icon">否&#x1006;</i>
            <?php endswitch; ?>
            </span>
        </td>

        <td>
            <a href="javascript:;" onclick="del_cate_item(<?php echo $v['id']; ?>);" class="layui-btn layui-btn-primary"><i class="layui-icon">&#xe640;</i> 删除</a>
            &nbsp;&nbsp;&nbsp
        </td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<?php echo $list->render(); ?>
<script>
    function  del_cate_item(id){
        layer.confirm('确定要删除么？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            var url = "<?php echo url('del'); ?>";
            $.post(url,{id:id},function(data){
                if(data.status == 1){
                    layer.msg(data.msg);
                }else{
                    layer.msg(data.msg);
                }
                window.location.reload();
            });
        }, function(){
            layer.msg('取消成功', {

            });
        });
    }
    //Demo
    layui.use('form', function(){
        var form = layui.form;

        //监听提交
        form.on('submit(formDemo)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });


    function change_status(id) {
        var url="<?php echo url('change_status'); ?>";
        $.post(url,{id:id},function (e) {
            if(e.status == 1){
                $("#status").html('<i class="layui-icon">是&#xe618;</i>');
            }else {
                $("#status").html('<i class="layui-icon">否&#x1006;</i>');
            }
        },"json");
    }
    
    function open_add_html() {
        var url = "<?php echo url('add'); ?>";
        layer.open({
            title:'新增轮播',
            type: 2,
            area: ['90%', '80%'],
            fixed: false, //不固定
            maxmin: true,
            content: url
        });
    }
</script>


<fieldset class="layui-elem-field" style="float:left;">
    <div class="layui-field-box">
        此软件由 沙坪坝韩宇个人开发 以及免费分享！使用时请保留底部相关版权说明！否则必追究其刑事责任！
        <hr>
        感谢layui、jquery、php、thinkphp等
    </div>

</fieldset>
</body>
</html>