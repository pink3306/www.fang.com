<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="stylesheet" type="text/css" href="{{staticAdminWeb()}}static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="{{staticAdminWeb()}}static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="{{staticAdminWeb()}}lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="{{staticAdminWeb()}}static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="{{staticAdminWeb()}}static/h-ui.admin/css/style.css" />
    <link rel="stylesheet" href="/css/pagination.css">
    <title>我的桌面</title>
    @yield('css')
</head>
<body>
    @yield('cnt')

    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="{{staticAdminWeb()}}lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{staticAdminWeb()}}static/h-ui/js/H-ui.min.js"></script>
    @yield('js')
</body>
</html>