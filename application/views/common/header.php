<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>雅昌艺术网</title>
    <link href="/style/bootstrap/2.3.2/bootstrap-min.css" rel="stylesheet" type="text/css">
    <link href="/style/default.css" rel="stylesheet" type="text/css">
    <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css" href="/style/bootstrap/2.3.2/bootstrap-ie6.min.css">
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" href="/style/bootstrap/2.3.2/ie.css">
    <![endif]-->
    <script src="http://static.dmp.cig.com.cn/sea-modules/seajs/seajs/2.1.1/sea.js"></script>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1 class="logo">
                <a href="/">
                    <img src="/style/images/logo.jpg" width="200" height="60" alt=""></a>
            </h1>
            <ul class="nav pull-right clearfix">
                <li <?=$channel_code=='main'?'class="active"':'' ?>>
                    <a href="/index">首页</a> <em class="left8"></em>
                </li>
                <li <?=$channel_code=='product'?'class="active"':'' ?>>
                    <a href="/product">产品服务</a> <em></em>
                </li>
                <li <?=$channel_code=='mcase'?'class="active"':'' ?>>
                    <a href="/mcase">案例展示</a>
                    <em></em>
                </li>
                <li <?=$channel_code=='mnew'?'class="active"':'' ?>>
                    <a href="/mnew">营销动态</a>
                    <em></em>
                </li>
                <li <?=$channel_code=='contact'?'class="active"':'' ?>>
                    <a href="/contact">业务联系</a>
                    <em></em>
                </li>
            </ul>
        </div>
    </div>