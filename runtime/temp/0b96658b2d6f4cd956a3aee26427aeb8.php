<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"C:\Apache24\htdocs\myo2o\public/../application/index\view\lists\index.html";i:1489469586;s:74:"C:\Apache24\htdocs\myo2o\public/../application/index\view\public\head.html";i:1520487122;s:73:"C:\Apache24\htdocs\myo2o\public/../application/index\view\public\nav.html";i:1520402755;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo $title; ?></title>
  <link rel="shortcut icon" href="">
  <link rel="stylesheet" href="__STATIC__/index/css/base.css" />
  <link rel="stylesheet" href="__STATIC__/index/css/common.css" />
  <link rel="stylesheet" href="__STATIC__/index/css/<?php echo $controler; ?>.css" />
  <script type="text/javascript" src="__STATIC__/index/js/html5shiv.js"></script>
  <script type="text/javascript" src="__STATIC__/index/js/respond.min.js"></script>
  <script type="text/javascript" src="__STATIC__/index/js/jquery-1.11.3.min.js"></script>
</head>
<body>
<div class="header-bar">
  <div class="header-inner">
    <ul class="father">
      <li><a><?php echo $city['name']; ?></a></li>
      <li>|</li>
      <li class="city">
        <a>切换城市<span class="arrow-down-logo"></span></a>
        <div class="city-drop-down">
          <h3>热门城市</h3>
          <ul class="son">
            <?php if(is_array($citys) || $citys instanceof \think\Collection): $i = 0; $__LIST__ = $citys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo url('index/index', ['city'=>$vo['id']]); ?>"><?php echo $vo['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>

        </div>
      </li>
      <?php if($user): ?>
      <li>欢迎您：<?php echo $user->username; ?></li>
      <li><a href="<?php echo url('user/logout'); ?>">退出</a></li>
      <?php else: ?>
      <li><a href="<?php echo url('user/register'); ?>">注册</a></li>
      <li>|</li>
      <li><a href="<?php echo url('user/login'); ?>">登录</a></li>
      <?php endif; ?>
      <li><a href="<?php echo url('bis/login/index'); ?>">商户中心</a></li>
    </ul>
  </div>
</div><div class="search">
  <a href="<?php echo url('index/index'); ?>"><img src="__STATIC__/index/image/logo.png" /></a>

</div>

<div class="nav-bar-header">
  <div class="nav-inner">
    <ul class="nav-list">
      <li class="nav-item">
        <span class="item">全部分类</span>
        <div class="left-menu">
          <?php if(is_array($cats) || $cats instanceof \think\Collection): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?>
          <div class="level-item">
            <div class="first-level">
              <dl>
                <dt class="title"><a href="<?php echo url('lists/index', ['id'=>$key]); ?>" target="_blank"><?php echo $cat[0]; ?></a></dt>
                <?php if(is_array($cat[1]) || $cat[1] instanceof \think\Collection): $i = 0;$__LIST__ = is_array($cat[1]) ? array_slice($cat[1],0,2, true) : $cat[1]->slice(0,2, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <dd><a href="<?php echo url('lists/index', ['id'=>$vo['id']]); ?>" target="_blank" class=""><?php echo $vo['name']; ?></a></dd>
                <?php endforeach; endif; else: echo "" ;endif; ?>

              </dl>
            </div>
            <div class="second-level">
              <div class="section">
                <div class="section-item clearfix no-top-border">
                  <h3>其他分类</h3>
                  <ul>

                    <?php if(is_array($cat[1]) || $cat[1] instanceof \think\Collection): $i = 0; $__LIST__ = $cat[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li> <a target="_blank" href="<?php echo url('lists/index', ['id'=>$vo['id']]); ?>"><?php echo $vo['name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                </div>


              </div>
            </div>
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
      </li>
      <li class="nav-item"><a href="/" class="item first active">首页</a></li>
      <li class="nav-item"><a class="item">团购</a></li>
      <li class="nav-item"><a class="item">商户</a></li>
    </ul>
  </div>
</div>

<div class="page-body">
  <div class="filter-bg">
    <div class="filter-wrap">
      <div class="w-filter-ab-test">
        <div class="w-filter-top-nav clearfix" style="margin:12px">


        </div>

        <div class="filter-wrapper">
          <div class="normal-filter ">
            <div class="w-filter-normal-ab  filter-list-ab">
              <h5 class="filter-label-ab">分类</h5>
                                <span class="filter-all-ab">
                                    <a href="<?php echo url('lists/index'); ?>" class="w-filter-item-ab  item-all-auto-ab"><span class="item-content <?php if($id == 0): ?>filter-active-all-ab<?php endif; ?> ">全部</span></a>
                                </span>
              <div class="j-filter-items-wrap-ab filter-items-wrap-ab">
                <div class="j-filter-items-ab filter-items-ab filter-content-ab">
                  <?php if(is_array($categorys) || $categorys instanceof \think\Collection): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <a href="<?php echo url('lists/index',['id'=>$vo['id']]); ?>" class="w-filter-item-ab "><span class="item-content <?php if($vo['id'] == $categoryParentId): ?>filter-active-all-ab<?php endif; ?>"><?php echo $vo['name']; ?></span></a>
                  <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
              </div>
            </div>
          </div>

        </div>
        <?php if($sedcategorys): ?>
        <div class="filter-wrapper">
          <div class="normal-filter ">
            <div class="w-filter-normal-ab  filter-list-ab">
              <h5 class="filter-label-ab">子分类</h5>
                                <span class="filter-all-ab">

                                </span>
              <div class="j-filter-items-wrap-ab filter-items-wrap-ab">
                <div class="j-filter-items-ab filter-items-ab filter-content-ab">
                  <?php if(is_array($sedcategorys) || $sedcategorys instanceof \think\Collection): $i = 0; $__LIST__ = $sedcategorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <a href="<?php echo url('lists/index',['id'=>$vo['id']]); ?>" class="w-filter-item-ab"><span class="item-content <?php if($vo['id'] == $id): ?>filter-active-all-ab<?php endif; ?>"><?php echo $vo['name']; ?></span></a>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
              </div>
            </div>
          </div>

        </div>
        <?php endif; ?>
      </div>
      <div class="w-sort-bar">
        <div class="bar-area" style="position: relative; left: 0px; margin-left: 0px; margin-right: 0px; margin-top: 0px; top: 0px;">
                        <span class="sort-area">
                            <a class="sort-default <?php if($orderflag == ""): ?>sort-default-active<?php endif; ?>">默认</a>
                            <a  href="<?php echo url('lists/index', ['id'=>$id, 'order_sales'=>1]); ?>" class="sort-item sort-down <?php if($orderflag == "order_sales"): ?>sort-default-active<?php endif; ?>" title="点击按销量降序排序">销量↓</a>
                            <a href="<?php echo url('lists/index', ['id'=>$id, 'order_price'=>1]); ?>" class="sort-item price-default price <?php if($orderflag == "order_price"): ?>sort-default-active<?php endif; ?>" title="点击按价格降序排序">价格↓</a>

                            <a href="<?php echo url('lists/index', ['id'=>$id, 'order_time'=>1]); ?>" class="sort-item sort-up <?php if($orderflag == "order_time"): ?>sort-default-active"<?php endif; ?>" title="发布时间由近到远">最新发布↑</a>
                        </span>

        </div>
      </div>
      <ul class="itemlist eight-row-height">
        <?php if(is_array($deals) || $deals instanceof \think\Collection): $i = 0; $__LIST__ = $deals;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li class="j-card">
          <a>
            <div class="imgbox">
              <ul class="marketing-label-container">
                <li class="marketing-label marketing-free-appoint"></li>
              </ul>
              <div class="range-area">
                <div class="range-bg"></div>
                <div class="range-inner">

                </div>
              </div>
              <div class="borderbox">
                <a target="_blank" href="<?php echo url('detail/index', ['id'=>$vo['id']]); ?>"><img src="<?php echo $vo['image']; ?>" /></a>
              </div>
            </div>
          </a>
          <div class="contentbox">
            <a target="_blank" href="<?php echo url('detail/index', ['id'=>$vo['id']]); ?>">
              <div class="header">
                <h4 class="title ">【<?php echo countLocation($vo['location_ids']); ?>店通用】</h4>
                <div class="collected">精选</div>
              </div>
              <p><?php echo $vo['name']; ?></p>
            </a>
            <div class="add-info"></div>
            <div class="pinfo">
              <span class="price"><span class="moneyico">¥</span><?php echo $vo['current_price']; ?></span>
              <span class="ori-price">价值<span class="price-line">¥<span><?php echo $vo['origin_price']; ?></span></span></span>
            </div>
            <div class="footer">
              <span class="sold">已售<?php echo $vo['buy_count']; ?></span>
              <div class="bottom-border"></div>
            </div>
          </div>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
  <?php echo pagination($deals); ?>
  </div>
</div>

<div class="footer-content">
  <div class="copyright-info">

  </div>
</div>
<script>
  $(".tab-item-wrap").click(function(){
    var index = $(".tab-item-wrap").index(this);
    $(".tab-item-wrap").removeClass("selected");
    $(".district-cont-wrap").css({display: "none"});
    $(this).addClass("selected");
    $(".district-cont-wrap").eq(index).css({display: "block"});
  });

  $(".sort-area a").click(function(){
    $(".sort-area a").removeClass("sort-default-active").css({color: "#666"});
    $(this).addClass("sort-default-active").css({color: "#ff4883"});
  });
</script>
</body>
</html>