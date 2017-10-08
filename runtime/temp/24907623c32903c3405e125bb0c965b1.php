<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\phpStudy\WWW\twothink\public/../application/home/view/default/server\page.html";i:1507445434;}*/ ?>


<div id="content"></div>


<script src="__STATIC__/jquery-1.11.2.min.js"></script>
<script>

var loadPage=function (no) {

    $(".btn_load").remove();
    $.get("/home/server/ajaxpage.html",{'page':no},function (data) {
        $("#content").append(data);
    });
}
loadPage(1);
</script>























