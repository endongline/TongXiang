<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>BootStrap项目实战</title>
    <link rel="stylesheet" href="view/admin/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="view/admin/css/bootstrap-maizi.css"/>
    <link rel="stylesheet" href="view/admin/css/animate.css"/>
    <link rel="stylesheet" href="view/admin/css/bootstrap-theme.css">
</head>
<body>

<!--导航-->
<nav class="nav navbar-default navbar-fixed-top">
    <div class="container">
        <!--        小屏幕导航按钮和logo-->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">同享管理后台</a>
        </div>
        <!--        小屏幕导航按钮和logo end-->
        <!--     导航   -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;后台首页</a></li>
                <li class=""><a href="user_list.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;用户管理</a></li>
                <li class=""><a href="content.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;内容管理</a></li>
                <li class="active"><a href="tag.php"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;标签管理</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        admin
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li><a href="index.php"><span class=" glyphicon glyphicon-screenshot"></span>&nbsp;&nbsp;前台首页</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;个人主页</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;个人设置</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;&nbsp;账户中心</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-heart"></span>&nbsp;&nbsp;我的收藏</a></li>
                    </ul>
                </li>

                <!--                <li class=""><a href="#home"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;admin</a></li>-->
                <li class=""><a href="#home"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;退出</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--<script src="js/bootstrap.min.js"></script>-->

<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>&ndash;&gt;-->
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/jquery.singlePageNav.min.js"></script>-->
<!--<script src="js/wow.min.js"></script>-->
</body>
</html>