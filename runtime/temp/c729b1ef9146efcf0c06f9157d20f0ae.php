<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:95:"E:\nginx\nginx-1.12.2\nginx-1.12.2\html\myo2o\public/../application/admin\view\index\login.html";i:1518344972;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>管理员登录</title>
  <link rel="stylesheet" href="__STATIC__/index/css/base.css" />
  <link rel="stylesheet" href="__STATIC__/index/css/login.css" />
  <script type="text/javascript" src="__STATIC__/index/js/html5shiv.js"></script>
  <script type="text/javascript" src="__STATIC__/index/js/respond.min.js"></script>
  <script type="text/javascript" src="__STATIC__/index/js/jquery-1.11.3.min.js"></script>
</head>
<body>
<div class="wrapper">
  <div class="head">
    <ul>
      <li><a href="index.html"><img src="__STATIC__/index/image/logo.png" alt="logo"></a></li>
      <li class="divider"></li>
      <li>管理员登录</li>
    </ul>
  </div>

  <div class="content">
    <div class="wrap">
      <div class="login-logo"></div>
      <div class="login-area">
        <div class="title">登录</div>
        <div class="login">
          <form action="<?php echo url('index/logincheck'); ?>" method="post">
            <div class="ordinaryLogin">

              <p class="pass-form-item">
                <label class="pass-label">用户名</label>
                <input type="text" name="username" class="pass-text-input" placeholder="管理员名">
              </p>
              <p class="pass-form-item">
                <label class="pass-label">密码</label>
                <input type="password" name="password" class="pass-text-input" placeholder="密码">
              </p>

            </div>

            <div class="commonLogin">
              <p class="pass-form-item">
                <input type="submit" value="登录" class="pass-button">


              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
    <ul class="first">

    </ul>
    <ul class="second">


    </ul>
  </div>
</div>
<script>
  $(".pass-sms-btn").click(function(){
    $(".ordinaryLogin").css({display: "none"});
    $(".messageLogin,.question").css({display: "block"});
  });
  $(".pass-sms-link").click(function(){
    $(".messageLogin,.question").css({display: "none"});
    $(".ordinaryLogin").css({display: "block"});
  });
</script>
</body>
</html>