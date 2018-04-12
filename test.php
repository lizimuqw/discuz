<?php

define('APPTYPEID', 20);
define('CURSCRIPT', 'test');

//加载核心类
require './source/class/class_core.php';
//初始化
$discuz = C::app();
$discuz->init();

//逻辑分发处理
if(empty($_GET['mod']) || !in_array($_GET['mod'],array('index','show'))){
    $_GET['mod'] = 'index';
}
define('CURMODULE', $_GET['mod']);

//加载核心方法

//钩子

//分发对应模块
require_once libfile('test/'.$_GET['mod'],'module');

?>