<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 , user-scalable=no">
    <title>bootstrap项目实战</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-maizi.css"/>
</head>
<body>
<!--导航-->
<nav class="navbar navbar-default">
    <div class="container">
        <!--小屏幕导航按钮和logo-->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">Maizi Admin</a>
        </div>
        <!--小屏幕导航按钮和logo-->
        <!--导航-->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;后台首页</a></li>
                <li><a href="user_list.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;用户管理</a></li>
                <li class="active"><a href="content.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;内容管理</a></li>
<!--                <li><a href="tag.php"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;标签管理</a></li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        admin
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li><a href="index.php"><span class="glyphicon glyphicon-screenshot"></span>&nbsp;&nbsp;前台首页</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;个人主页</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;个人设置</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;&nbsp;账户中心</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-heart"></span>&nbsp;&nbsp;我的收藏</a></li>
                    </ul>
                </li>
                <li><a href="#bbs"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;退出</a></li>
            </ul>
        </div>
        <!--导航-->

    </div>
</nav>
<!--导航-->

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <a href="content.php" class="list-group-item">内容管理</a>
                <a href="content_post.php" class="list-group-item active">添加内容</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="page-header">
                <h1>内容管理</h1>
            </div>
            <ul class="nav nav-tabs">
                <li>
                    <a href="content.php">内容管理</a>
                </li>
                <li class="active">
                    <a href="content_post.php">添加内容</a>
                </li>
            </ul>
            <form action="#" class="mar_t15">
                <div class="lebox" >
                    <div class="tx_title">
                        <div class="headerMiddle">
                            <h3>开票申请</h3>
                            <div class="line"></div>
                        </div>
                    </div>
                        <div id="tx_inpu" class="tx_inpu">
                            <ul class="tx_lf">
                                <li class="tx_date"><label for="tx_date">开票日期:</label> <input name="tx_date" type="date"  id="date_info"   placeholder="请输入时间"/></li>
                                <li class="tx_drea"><label for="tx_drea">开&nbsp票&nbsp人:</label><input  name="tx_drea" type="text" value=""  aria-required='true' /></li>
                                <li class="tx_client"><label for="tx_client">客&nbsp&nbsp&nbsp&nbsp户:</label><input  name="tx_client" type="text" value=""  aria-required='true' /></li>
                                <li class="tx_curre"><label for="tx_curre">余&nbsp&nbsp&nbsp&nbsp额:</label><input  name="tx_curre" type="text" value=""  aria-required='true' /></li>
                                <li class="tx_order"><label for="tx_order">抬&nbsp&nbsp&nbsp&nbsp头:</label><input  name="tx_order" type="text" value=""  aria-uired='true' /></li>
                                <li class="tx_gafiao1"><label for="tx_gafiao1">开票金额:</label><input  name="tx_gafiao1" type="text" value=""  aria-uired='true' /></li>
                            </ul>
                            <div class="tx_cenline"></div>
                            <ul class="tx_lr">
                                <li class="tx_dentify"><label for="tx_dentify">识&nbsp别&nbsp号:</label><input  name="tx_dentify" type="text" value=""  aria-required='true' /></li>
                                <li class="tx_obank"><label for="tx_obank">开&nbsp户&nbsp行:</label><input  name="tx_obank" type="text" value=""  aria-required='true' /></li>
                                <li class="tx_zh"><label for="tx_zh">帐&nbsp&nbsp&nbsp&nbsp号:</label><input  name="tx_zh" type="text" value=""  aria-required='true' /></li>
                                <li class="tx_photo"><label for="tx_add">电&nbsp&nbsp&nbsp&nbsp话:</label><input  name="tx_photo" type="text" value=""  aria-required='true'/></li>
                                <li class="tx_add"><label for="tx_add">地&nbsp&nbsp&nbsp&nbsp址:</label><input  name="tx_add" type="text" value=""  aria-required='true'/></li>
                                <li class="tx_gafiao2"><label for="tx_gafiao2">开票金额:</label><input  name="tx_gafiao2" type="text" value=""  aria-required='true'/></li>

                            </ul>
                            <div class="dj_bonnter">
                                <p class="tx_button"><button name="submit" id="button" type="submit" value="提交" onclick="check(form1);">提交</button> </p>
                                <p class="tx_rebutton"><button  name="reset" type="reset" value="重置">重置</button></p>
                            </div>

                        </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">全局置顶
                    </label>
                    <button type="submit" class="btn btn-default pull-right">发布文章</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    Copyright&nbsp;©&nbsp;2012-2015&nbsp;&nbsp;www.maiziedu.com&nbsp;&nbsp;蜀ICP备13014270号-4
                </p>
            </div>
        </div>
    </div>
</footer>
<!--footer-->


<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>