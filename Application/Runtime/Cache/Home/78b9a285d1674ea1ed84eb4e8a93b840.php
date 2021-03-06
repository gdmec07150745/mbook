<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>图书分类</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/2016/TPpro/mbook/Public/JQM/jquery-1.11.1.min.js"></script>
<script src="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
<div data-role="page" id="page1">
  <div data-role="header" >
    <h1>图书展示</h1>
    <a data-ajax="false" href="../index/index" data-role="button" data-icon="home">首页</a>
    <div data-role="navbar">
      <ul>
        <li><a href="#page1" class="ui-state-persist ui-btn-active">概述</a></li>
        <li><a href="#page2">图片</a></li>
        <li><a href="#page3">简介</a></li>
        <li><a href="#page4">目录</a></li>
      </ul>
    </div>
  </div>
  <div data-role="content">
    <div id="gaishu">
      <?php echo ($book['book_name']); ?><br/>
      <?php echo ($book['book_author']); ?><br/>
      ISBN: <?php echo ($book['book_isbn']); ?><br/>
      原价：<?php echo ($book['book_oldprice']); ?><br/>
      折后价：<?php echo ($book['book_newprice']); ?><br/>
    </div>
  </div>
  <div data-role="footer" data-id="nav_footer"> </div>
</div>
<div data-role="page" id="page2">
  <div data-role="header">
    <h1>图书展示</h1>
    <a data-ajax="false" href="../index/index" data-role="button" data-icon="home">首页</a>
    <div data-role="navbar">
      <ul>
        <li><a href="#page1">概述</a></li>
        <li><a href="#page2" class="ui-state-persist ui-btn-active">图片</a></li>
        <li><a href="#page3">简介</a></li>
        <li><a href="#page4">目录</a></li>
      </ul>
    </div>
  </div>
  <div data-role="content">
    <div id="tupian"> <img src="/2016/TPpro/mbook/Public/images/<?php echo ($book['book_img']); ?>" /> </div>
  </div>
  <div data-role="footer" data-id="nav_footer"> </div>
</div>
<div data-role="page" id="page3">
  <div data-role="header">
    <h1>图书展示</h1>
    <a data-ajax="false" href="../index/index" data-role="button" data-icon="home">首页</a>
    <div data-role="navbar">
      <ul>
        <li><a href="#page1">概述</a></li>
        <li><a href="#page2">图片</a></li>
        <li><a href="#page3" class="ui-state-persist ui-btn-active">简介</a></li>
        <li><a href="#page4">目录</a></li>
      </ul>
    </div>
  </div>
  <div data-role="content">
    <div id="jianjie"> <?php echo ($book['book_about']); ?><br/></div>
  </div>
  <div data-role="footer" data-id="nav_footer"> </div>
</div>
<div data-role="page" id="page4">
  <div data-role="header">
    <h1>图书展示</h1>
    <a data-ajax="false" href="../index/index" data-role="button" data-icon="home">首页</a>
    <div data-role="navbar">
      <ul>
        <li><a href="#page1">概述</a></li>
        <li><a href="#page2">图片</a></li>
        <li><a href="#page3">简介</a></li>
        <li><a href="#page4" class="ui-state-persist ui-btn-active">目录</a></li>
      </ul>
    </div>
  </div>
  <div data-role="content">
    <div id="mulu">  <?php echo ($book['book_directory']); ?> <br/> </div>
  </div>
  <div data-role="footer">
  </div>
</div>

</body>
</html>