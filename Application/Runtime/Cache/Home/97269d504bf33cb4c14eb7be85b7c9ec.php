<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客后台</title>
    <link rel="stylesheet" href="/MyApp/blogBackend/Public/bootstrap/css/bootstrap.css">
    <style>
        body{
            background:url("/MyApp/blogBackend/Public/images/background.jpg") no-repeat center 0/ 100%;
        }
        .container{color:#fff;margin-top:10%;background:rgba(10,10,10,.77);max-width:70%;padding:50px 0;}
    </style>
</head>
<body>
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h1><strong>逐梦</strong> 后台管理系统</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-bottom">

                            <div class="form-group">
                                <label class="sr-only" for="username">Username</label>
                                <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="password">Password</label>
                                <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary" id="login">登录</button>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="/MyApp/blogBackend/Public/js/jquery.min.js"></script>
<script>

  $('#login').on('click',function(){
     var username = $('#username').val();
     var password = $('#password').val();
     console.log(username,password);
     $.ajax({
         type:'post',
         url:'/MyApp/blogBackend/Home/Login/setLogin',
         data:{
             'username':username,
             'password':password
         },
         success:function(res){
             console.log(res);
         },
         error:function (error) {
             console.log(error);
         }
     })
  })
</script>
</body>
</html>