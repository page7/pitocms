<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>管理后台</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/Public/static/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/Public/static/plugins/bootstrap/css/bootstrap.min.css">
  
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/Public/static/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/Public/static/css/main.css">
    <!-- iCheck-->
    

</head>

<body>
    <section id="container">
       
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>管理系统</span></a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="收起">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="user-nav">
                <ul>
                    

                   
                    <li class="profile-photo">
                        <img src="/Public/static /img/avatar.png" alt="" class="img-circle">
                    </li>
                    <li class="dropdown settings">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <?php echo (session('username')); ?> <i class="fa fa-angle-down"></i>
                    </a>
                        <ul class="dropdown-menu animated fadeInDown">
                           
                            <li>
                                <a href="/index.php/Login/Index/loginout"><i class="fa fa-power-off"></i> 退出</a>
                            </li>
                        </ul>
                    </li>
                   

                </ul>
            </div>
        </header>
        

        <!--sidebar start-->
         
        <!--sidebar left start-->
        <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
                <ul class="nano-content">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-dashboard"></i><span>塔台</span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>系统设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>

                            <li><a href="/index.php/Admin/Admin/">系统用户</a>
                            </li>
                            <li><a href="/index.php/Admin/System/edit/">全局设置</a>
                            </li>
                            <li><a href="/index.php/Admin/Media/">附件管理</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>栏目管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                         <ul>
                            <li><a href="/index.php/Admin/Category/">栏目列表</a>
                            </li>
                            <li><a href="/index.php/Admin/Category/create">添加栏目</a>
                            </li>
                        </ul>
                    </li>

                    
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa fa-table"></i><span>旅游信息管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="/index.php/Admin/Tour/">信息列表</a>
                            </li>
                            <li><a href="/index.php/Admin/Tour/create">添加信息</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-book"></i><span>攻略管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="/index.php/Admin/WalkThrough/">攻略列表</a>
                            </li>
                            <li><a href="/index.php/Admin/WalkThrough/create">添加攻略</a>
                            </li>
                        </ul>
                    </li>
                
                 <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa  fa-question"></i><span>问答管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="/index.php/Admin/Question/">信息列表</a>
                            </li>
                            <li><a href="/index.php/Admin/Question/create">添加信息</a>
                            </li>
                        </ul>
                    </li>
                
                    

                     <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa  fa-thumb-tack"></i><span>订单管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                       <ul>
                            <li><a href="/index.php/Admin/Order/">订单列表</a>
                            </li>
                            
                        </ul>
                    </li>
                     <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa  fa-user"></i><span>用户管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                       <ul>
                            <li><a href="/index.php/Admin/User/">用户列表</a>
                            </li>
                            <li><a href="/index.php/Admin/User/create">添加用户</a>
                            </li>
                        </ul>
                    </li>

                     <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa  fa-user"></i><span>广告位管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                       <ul>
                            <li><a href="/index.php/Admin/Ad/">广告位列表</a>
                            </li>
                            <li><a href="/index.php/Admin/Ad/create">添加广告位</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-file"></i><span>单页管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                       <ul>
                            <li><a href="/index.php/Admin/Page/">单页列表</a>
                            </li>
                            <li><a href="/index.php/Admin/Page/create">添加单页</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>

        </aside>
        <!--sidebar left end-->
        
        <!--sidebar end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            <li><a href="#">Dashboard</a>
                            </li>
                            <li>Forms</li>
                            <li class="active">Form Components</li>
                        </ul>
                        <!--breadcrumbs end -->
                       
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                           
             

                                <a href="/index.php/Admin/WalkThrough/index" class="btn btn-primary">攻略列表</a>
                                <a href="/index.php/Admin/WalkThrough/create"  class="btn btn-info">添加攻略</a>
                              
                            </div>
                        </div>
                    </div>
                </div>
       <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">添加</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="/index.php/Admin/WalkThrough/store" method="post" class="form-horizontal form-border" id="form1" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">名称</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="title"  required class="form-control">
                                        </div>
                                    </div>
                                  
                                   
                                  
                                   

                                  

                                   
                            
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" >缩略图</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="thumb" required class="form-control" >
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <label class="col-sm-3 control-label" >攻略文档(PDF)</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="pdf" required class="form-control">
                                        </div>    
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" >下载次数</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="clicks" class="form-control" value="50">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" >排序</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="weight" class="form-control" value="50">
                                        </div>
                                    </div>

                                  
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                        <input type="submit" value="提交"  class="btn btn-primary btn-square">
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>

                






            </section>
        </section>
        <!--main content end-->
      
    </section>
    <!--Global JS-->
    
    <script src="/Public/static/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/static/plugins/waypoints/waypoints.min.js"></script>
    <script src="/Public/static/js/application.js"></script>
   


</body>

</html>