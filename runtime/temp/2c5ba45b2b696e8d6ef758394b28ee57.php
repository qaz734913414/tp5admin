<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"E:\phpStudy\WWW\tp5\public/../application/tpl\message.html";i:1526020914;}*/ ?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $msg; ?></title>
    <link rel="stylesheet" href="__STATIC__/js/jquery.js">
    <script src="__STATIC__/layer/layer.js"></script>
</head>
<body>
&lt;!&ndash;<?php echo $msg; ?>//提示信息&ndash;&gt;
&lt;!&ndash;<?php echo $code; ?>//1代表成功   2代表失败&ndash;&gt;
&lt;!&ndash;<?php echo $url; ?>//跳转地址&ndash;&gt;
&lt;!&ndash;<?php echo $wait; ?>//等待时间&ndash;&gt;
<button onclick="test()">test</button>
</body>

<script>
    function test(){
//        alert(1);
        layer.msg('不开心。。', {icon: 5});
    }
</script>
等待0s表示不提示
</html>-->
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php echo $msg; ?></title>
    <meta name="viewport" content="width=device-width">
    <script src="__STATIC__/js/jquery.js"></script>
    <link rel="stylesheet" href="__STATIC__/animate.min.css">
    <link rel="stylesheet" href="__STATIC__/tanchuang/styles/style.css">
    <style>
        <?php
            if($code == 1){
                echo ".modal__content{min-width: 640px; background: #8befa5;}";
                echo "body{background:#129c7c}";
            }else{
                 echo ".modal__content{min-width: 640px;}";
                 echo "body{background:#EEE}";
             }
        ?>

    </style>
</head>

<body>

<!-- Modal -->
<div id="modal" class="modal modal__bg" role="dialog" aria-hidden="true">
    <div class="modal__dialog">
        <div class="modal__content" deep="2">
            <h1><?php
                    if($code == 1){
                        echo "Success";
                    }else{
                        echo "Error";
                    }
                ?>
            </h1>
            <div style="display: block; min-height: 150px;">
                <img style="width: 150px; float:left; height: auto" src="__STATIC__/tanchuang/<?php if($code == 1){ echo 'success.png';}else{ echo 'error.png';}?>" class="face" alt="">
                <span style="float:left; height: 133px; width: 330px;line-height: 133px; margin-left: 30px;"><?php echo $msg; ?>
                </span>
                <div style="width: 100%; text-align: center; float:left;">页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></div>
            </div>
            <a href="javascript:;" class="modal__close demo-close">
                <svg class="" viewBox="0 0 24 24">
                    <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"></path>
                    <path d="M0 0h24v24h-24z" fill="none"></path>
                </svg>
            </a>
        </div>
    </div>
</div>


</body>

<script>
    $("#modal").addClass("animated fadeInDown");
    $(".modal__close").click(function (e) {
        $("#modal").addClass("animated fadeOutUp");
        //$("#modal").css("display","none");
    })
</script>
<?php
    if($wait == 0){
        echo "";
    }else{

    $html= '<script type="text/javascript">';
    $html .= '(function(){';
    $html .= 'var wait = document.getElementById("wait"),';
    $html .= 'href = document.getElementById("href").href;';
    $html .= 'var interval = setInterval(function(){';
    $html .= 'var time = --wait.innerHTML;';
    $html .= 'if(time <= 0) {';
    $html .= 'location.href = href;';
    $html .= 'clearInterval(interval);';
    $html .= '};';
    $html .= '}, 1000);';
    $html .= '})();';
    $html .= '</script>';


    echo $html;
    }
    ?>

</html>