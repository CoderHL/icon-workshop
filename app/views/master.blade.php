<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keyword" content="app图标缩放,应用图标生成工具,批量生成iOS图标,批量生成Android图标,app图标,图标缩放,iwatch图标,phonegap图标,图标模板">
    <meta name="description" content="一键快速生成iOS, Android，Windows Phone, WebApp, iWatch(watchOS), PhoneGap(Cordova)等移动平台不同大小(规格尺寸)的App图标，快速预览，提供丰富选项，可以直接打包发布到应用市场，并提供相应的PSD模板。">
    <meta name="author" content="睿鸿游戏">
    <link rel="icon" href="/favicon.ico">

    <title>{{ Config::get('constants.site_name') . ' - ' . Config::get('constants.slogan') }}</title>

    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/select2/4.0.1/css/select2.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/bootstrap-material-design.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/bootstrap-material-design/0.5.7/css/ripples.min.css" rel="stylesheet">
    <link href="/css/loading-bar.min.css" rel="stylesheet">

    @if(App::environment('local'))
        <link rel="stylesheet" href="/css/main.css">
    @else
        <link rel="stylesheet" href="/css/all.css?_={{Config::get('constants.version')}}">
    @endif

    <!--[if lt IE 9]>
    <script src="/js/lib/html5shiv.js"></script>
    <script src="/js/lib/respond.min.js"></script>
    <![endif]-->
</head>

<body ng-app="rhIcon" ng-controller="RootCtrl" ng-cloak>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="color: white">
                <img src="/img/rh_site_icon_20.png" alt="" style="display: inline; vertical-align: middle"/>
                <?php echo Config::get('constants.site_name') ?>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="javascript:;" ui-sref="home">首页</a></li>
                <li><a href="#">iOS 8图标</a></li>
                <li><a href="#">WebApp图标</a></li>
                <li><a href="http://wuruihong.com" target="_blank">睿鸿游戏</a></li>
                <li><a href="javascript:;" ui-sref="about">关于我们</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" ui-view></div>

<footer class="navbar navbar-default">
    <p>
        <a href="http://wuruihong.com" target="_blank" style="color:white">睿鸿游戏</a>　
        版权所有　Copyright(C) 2015　All Rights Reserved　豫ICP备14010348号-1
        @if(!App::environment('local'))
        <script>
            var _hmt = _hmt || [];
            (function() {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?692ad0a1a2349a69b58c26d6ee6e2790";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
        @endif
    </p>
</footer>

<script>
    window.showAd = <?php echo App::environment('local') ? 'false' : 'true' ?>;
</script>

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="//cdn.bootcss.com/select2/4.0.1/js/select2.min.js"></script>
<script src="//cdn.bootcss.com/select2/4.0.1/js/i18n/zh-CN.js"></script>
<script src="/js/lib/material.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap-material-design/0.5.7/js/ripples.min.js"></script>
<script src="//cdn.bootcss.com/angular.js/1.4.8/angular.min.js"></script>
<script src="//cdn.bootcss.com/angular.js/1.4.8/angular-animate.min.js"></script>
<script src="//cdn.bootcss.com/angular-ui-router/0.2.15/angular-ui-router.min.js"></script>
<script src="/js/lib/loading-bar.min.js"></script>
<!--[if IE 10]>
<script src="/js/lib/ie10-viewport-bug-workaround.js"></script>
<![endif]-->
@if(App::environment('local'))
    <script src="/js/main.js"></script>
    <script src="/js/app/core.service.js"></script>
    <script src="/js/app/root.ctrl.js"></script>
    <script src="/js/app/home.ctrl.js"></script>
    <script src="/js/app/icon.ctrl.js"></script>
    <script src="/js/app/about.ctrl.js"></script>
@else
    <script src="/js/all.js?_={{Config::get('constants.version')}}"></script>
@endif

<!-- JiaThis Button BEGIN -->
<script type="text/javascript">
//    var jiathis_config = {data_track_clickback:'true'};
</script>
{{--<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?btn=r3.gif&uid=1351577434153337" charset="utf-8"></script>--}}
<!-- JiaThis Button END -->

</body>
</html>
