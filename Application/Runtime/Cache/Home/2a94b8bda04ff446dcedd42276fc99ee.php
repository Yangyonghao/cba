<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>藏吧</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        a{
            text-decoration: none;
        }
        .nav-right{
            width:69%;
            height: 80px;
            float:right;
            border: 1px solid darkred
        }
        .nav-right ul{
            margin: 0 auto;
            width:69%;
            height: 30px;
            padding: 25px 0;
        }
        .nav-right ul li{
            float: right;
            /*height: 100px;*/
            margin-right: 30px;
            display: block;
            list-style: none;
        }
    </style>
</head>
<body>
<div style="width: 100%;height:80px;border: 1px solid red;">
    <div style="width: 90%;win-width:980px;height:80px;margin:0 auto;border: 1px solid #008000">
        <div style="width:20%;height: 80px;float:left;border: 1px solid darkslategray">
            <img src="/Public/img/藏02.jpg" width="100px" height="80px"/>
        </div>
        <div class="nav-right">
            <ul>
                <li><a href="javascript:void(0)">产品介绍</a></li>
                <li><a href="javascript:void(0)">关于我</a></li>
                <li><a href="javascript:void(0)">产品介绍</a></li>
                <li><a href="javascript:void(0)"></a></li>
            </ul>
        </div>
    </div>
</div>

<style>
    .content{
        width: 980px;
        border: 1px solid darkolivegreen;
        margin: 0 auto;
    }
    .content-search{
        height:50px;
    }
    .content-img{
        width: 300px;height:208px;border: 1px solid greenyellow;float: left;margin-right: 10px;margin-bottom: 10px;;
    }
</style>
<div class="content">
    <div class="content-search">
        <div style="float: left">
            <span>每日更新</span>:<a href="javascript:void(0)">2016猴币的升值空间到底有多大？</a>
        </div>
        <div style="float: right">
            <form enctype="multipart/form-data" action="Index/index">
                <input type="text" name="menu" placeholder="请输入你想要搜索的内容"/>
                <button type="submit">搜 索</button>
            </form>
        </div>
    </div>
    <div style="clear: both"></div>

    <div style="border:1px solid green;width: 980px;margin: 0 auto;height: 600px;">
        <div class="content-img">
            <div style="width: 300px;height: 180px"><img src="" style=" width:300px;height: 180px"/></div>
            <div><a href="javascript:void(0)">第一套人民币入口</a></div>
        </div>
        <div class="content-img"></div>
        <div class="content-img"></div>
        <div class="content-img"></div>
        <div class="content-img"></div>
        <div class="content-img"></div>
    </div>
</div>
<div style="clear: both"></div>
<div style="margin-top: 20px;bottom:0;width:100%;height: 120px;border: 1px solid red">

</div>
</body>
</html>