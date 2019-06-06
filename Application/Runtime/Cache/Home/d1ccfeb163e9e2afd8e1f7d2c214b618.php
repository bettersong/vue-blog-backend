<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>逐梦后台管理系统</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <link href="/MyApp/blogBackend/Public/css/bootstrap.min.css?3" rel="stylesheet" />
    <link href="/MyApp/blogBackend/Public/fonts/fonts.css?1" rel="stylesheet"/>
    <link href="/MyApp/blogBackend/Public/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="/MyApp/blogBackend/Public/css/bootstrap-fileupload.css" rel="stylesheet" />
    <link href="/MyApp/blogBackend/Public/css/style.css?2" rel="stylesheet" />
    <link href="/MyApp/blogBackend/Public/css/style-responsive.css" rel="stylesheet" />
    <link href="/MyApp/blogBackend/Public/css/style-default.css" rel="stylesheet" id="style_color" />
    <link href="/MyApp/blogBackend/Public/dist/summernote.css" rel="stylesheet"/>
    <link href="/MyApp/blogBackend/Public/theme/default/layer.css">
</head>
<body class="fixed-top">
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <div class="sidebar-toggle-box hidden-phone" style="padding:0px;background: none">
                <div class="tooltips" data-placement="right">
                    <!--<i class="iconfont icon-shuyeu"></i>-->
                    <img src="/MyApp/blogBackend/Public/images/logo.png?1" />
                </div>
            </div>
            <div style="margin:auto;width:20%;">
                <h3>逐梦博客后台管理系统</h3>
            </div>
            <div class="top-nav ">
                <ul class="nav pull-right top-menu" >
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/MyApp/blogBackend/Public/images/my.jpg" class="img-responsive" width="30" alt="">
                            <span class="username"><?php echo ($_SESSION['userinfo']['user']); ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class="iconfont icon-wode"></i>我的资料</a></li>
                            <li><a href="/MyApp/blogBackend/Home/Admin/logout"><i class="iconfont icon-icon4"></i>退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="container" class="row-fluid">
    <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">
            <div class="navbar-inverse">
                <form class="navbar-search visible-phone">
                    <input type="text" class="search-query" placeholder="Search" />
                </form>
            </div>
            <ul class="sidebar-menu">
                <li class="sub-menu">
                    <a class="Index" href="/MyApp/blogBackend/Home/Index/index">
                        <span>首页</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <span>前端开发</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="FrontEnd html5" href="/MyApp/blogBackend/Home/FrontEnd/index?type=html5">html5</a></li>
                        <li><a class="FrontEnd css3" href="/MyApp/blogBackend/Home/FrontEnd/index?type=css3">css3</a></li>
                        <li><a class="FrontEnd javascript" href="/MyApp/blogBackend/Home/FrontEnd/index?type=javascript">Javascript</a></li>
                        <li><a class="FrontEnd jquery" href="/MyApp/blogBackend/Home/FrontEnd/index?type=jquery">Jquery</a></li>
                        <li><a class="FrontEnd vue" href="/MyApp/blogBackend/Home/FrontEnd/index?type=vue">Vue</a></li>
                        <li><a class="FrontEnd react" href="/MyApp/blogBackend/Home/FrontEnd/index?type=react">React</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="/MyApp/blogBackend/Home/Mood/index" class="Mood">
                        <span>心情小镇</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <span>作品案例</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="">作品1</a></li>
                        <li><a class="" href="">作品2</a></li>
                        <li><a class="" href="">作品3</a></li>
                        <li><a class="" href="">作品4</a></li>
                        <li><a class="" href="">作品5</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <span>全栈开发</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="FullStack node" href="/MyApp/blogBackend/Home/FullStack/index?type=node">Node</a></li>
                        <li><a class="FullStack php" href="/MyApp/blogBackend/Home/FullStack/index?type=php">PHP</a></li>
                        <li><a class="FullStack python" href="/MyApp/blogBackend/Home/FullStack/index?type=python">Python</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="/MyApp/blogBackend/Home/Broken/index" class="Broken">
                        <span>碎言碎语</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="AboutBlog" href="/MyApp/blogBackend/Home/AboutBlog/index">
                        <span>关于博客</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="Manage" href="/MyApp/blogBackend/Home/Manage/index">
                        <span>文章管理</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="MoodManage" href="/MyApp/blogBackend/Home/MoodManage/index">
                        <span>心情管理</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
<div id="main-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <ul class="breadcrumb" style="margin-top:30px;">
                    <li>
                        <a href="#">关于博客</a>
                        <span class="divider">/</span>
                    </li>
                    <li class="active">
                        关于博客
                    </li>
                    <li class="pull-right search-wrap">
                        <form action="search_result.html" class="hidden-phone">
                            <div class="input-append search-input-area">
                                <input class="" id="appendedInputButton" type="text">
                                <button class="btn" type="button"><i class="iconfont icon-sousuo1"></i> </button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget yellow">
                    <div class="widget-title">
                        <h4>关于博客</h4>
                    </div>
                    <div class="widget-body">
                        <div class="form-horizontal">
                            <div class="span12">
                                <div class="span6">
                            <div class="control-group">
                                <label class="control-label">博主</label>
                                <div class="controls">
                                    <input class="medium name" type="text" value="宋瑶" disabled />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">星座</label>
                                <div class="controls">
                                    <input class="medium star" type="text" value="狮子座" disabled />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">目标城市</label>
                                <div class="controls">
                                    <input class="medium city" type="text" value="上海" />
                                </div>
                            </div>
                                </div>
                                <div class="span6">
                                    <div class="control-group">
                                        <label class="control-label">学历</label>
                                        <div class="controls">
                                            <input class="medium education" type="text" value="本科" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">籍贯</label>
                                        <div class="controls">
                                            <input class="medium birthplace" type="text" value="江西宜春" disabled />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">专业</label>
                                        <div class="controls">
                                            <input class="medium profession" type="text" value="软件工程" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">博主介绍</label>
                                <div class="controls">
                                    <textarea placeholder="介绍一下自己吧..." class="input-xxlarge introduce" rows="5" style="height:200px;"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary submit">确定</button>
                                <button type="button" class="btn btn-warning">取消</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>
</div>
<div id="footer">
    2019 &copy; 逐梦后台管理系统.
</div>
<script src="/MyApp/blogBackend/Public/js/jquery-1.8.3.min.js"></script>
<script src="/MyApp/blogBackend/Public/js/jquery.slimscroll.min.js"></script>
<script src="/MyApp/blogBackend/Public/js/bootstrap.min.js"></script>
<script src="/MyApp/blogBackend/Public/js/bootstrap-fileupload.js"></script>
<script src="/MyApp/blogBackend/Public/js/common-scripts.js"></script>
<script src="/MyApp/blogBackend/Public/dist/summernote.js"></script>
<script src="/MyApp/blogBackend/Public/dist/lang/summernote-zh-CN.js"></script>
<script src="/MyApp/blogBackend/Public/layer/layer.js?2"></script>
<script>
    var type = $('.widget-title').children('h4').html();
    $('.'+type).css('color',"#fff")
    var tag = window.location.href.split('/')[6];
    $('.'+tag).parents('.sub-menu').addClass('active');
    if($('.'+tag).text() == type){
        $(this).addClass('active');
    }
    //富文本
    $(function(){
        $('.summernote').summernote({
            height: 200,
            tabsize: 2,
            lang: 'zh-CN'
        });
    });
</script>
</body>
</html>
        <script>
            // layer.msg('有表情地提示', {icon: 5});
            $('.submit').on('click',function (){
                var name = $('.name').val();
                var city = $('.city').val();
                var education = $('.education').val();
                var introduce = $('.introduce').val();
                var birthplace = $('.birthplace').val();
                var profession = $('.profession').val();
                $.ajax({
                    type: 'post',
                    url:'/MyApp/blogBackend/Home/AboutBlog/update',
                    data: {
                        name: name,
                        city: city,
                        birthplace: birthplace,
                        profession: profession,
                        education: education,
                        introduce: introduce
                    },
                    success: function(res){
                        console.log(res);
                        if(res>0){
                            layer.alert('提交成功！', {icon: 1});
                            $('.introduce').val('');
                        }
                    },
                    error: function (err){
                        console.log(err);
                        layer.alert(err+'请稍后再试')
                    }
                })
            })
        </script>