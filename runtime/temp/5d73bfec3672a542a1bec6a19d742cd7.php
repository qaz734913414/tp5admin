<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"E:\phpStudy\WWW\tp5\public/../application/admin\view\article\add.html";i:1526521956;s:59:"E:\phpStudy\WWW\tp5\application\admin\view\public\head.html";i:1526971892;s:61:"E:\phpStudy\WWW\tp5\application\admin\view\public\footer.html";i:1526521956;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台通用版软件by 沙坪坝韩宇 QQ571031767</title>
<!--本文件只包含一些相应的js  css 等文件-->
<script src="/static/js/jquery.js"></script>
<!--后台改版为layui-->
<link rel="stylesheet" href="/static/layui/css/layui.css">
<script src="/static/layui/layui.js"></script>
<script src="/static/js/functions.js"></script>
<script src="/static/loading.js"></script>


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


<form action="<?php echo url('Article/add'); ?>" method="post" class="layui-form">
    <div class="layui-tab">
        <ul class="layui-tab-title">
            <li class="layui-this">文章主体</li>
            <li>SEO</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div class="layui-form-item" style="width: 700px;">
                    <label class="layui-form-label">文章分类</label>
                    <div class="layui-input-block">
                        <select name="category_id" lay-verify="required">
                            <option value="" ></option>
                            <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $v['id']; ?>"><?php echo $v['category_name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                <div class="layui-form-item" style="width: 700px;">
                    <label class="layui-form-label">标题</label>
                    <div class="layui-input-block">
                        <input type="text" name="name" required  lay-verify="required" placeholder="请输入分类名" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">排序</label>
                    <div class="layui-input-inline">
                        <input type="text" name="oid" placeholder="越小越靠前" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">文章排序越小越靠前</div>
                </div>


                <div class="layui-form-item layui-form-text" style="width: 700px;">
                    <label class="layui-form-label">文章简介</label>
                    <div class="layui-input-block">
                        <textarea name="info" placeholder="请不要超过250字的简介" class="layui-textarea"></textarea>
                    </div>
                </div>

                <div class="layui-form-item layui-form-text" >
                    <label class="layui-form-label">文章内容</label>
                    <div class="layui-input-block">
                        <textarea id="article_content" name="content" placeholder="" class="layui-textarea"></textarea>
                    </div>
                </div>
            </div>
            <div class="layui-tab-item">其他选项
                <div class="layui-form-item">
                    <label class="layui-form-label">是否启用</label>
                    <div class="layui-input-block">
                        <input type="radio" name="status" value="0" title="否">
                        <input type="radio" name="status" value="1" title="是" checked>
                    </div>
                </div>

                <div class="layui-form-item" style="width: 700px;">
                    <label class="layui-form-label">seo_key</label>
                    <div class="layui-input-block">
                        <input type="text" name="seo_key"  placeholder="seo_key" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item layui-form-text" style="width: 700px;">
                    <label class="layui-form-label">seo_content</label>
                    <div class="layui-input-block">
                        <textarea name="seo_content" placeholder="seo_content" class="layui-textarea"></textarea>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script>
        //注意：选项卡 依赖 element 模块，否则无法进行功能性操作
        layui.use('element', function(){
            var element = layui.element();

            //…
        });
        var url="<?php echo url('upload/edit_upload'); ?>";
        layui.use('layedit', function(){
            var layedit = layui.layedit;
            layedit.set({
                uploadImage: {
                    url: url //接口url
                    ,type: 'post' //默认post
                }
            });
            layedit.build('article_content'); //建立编辑器
        });



    </script>








    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>


</form>

<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form();
    });
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