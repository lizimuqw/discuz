<?php

if(!defined ('IN_DISCUZ')){
    exit('Acess Denied');
}

if(empty($_GET['action'])){
    $_GET['action'] = 'index';
}

if($_GET['action'] == 'index'){
    echo '首页！index！';
//    include template('forum/forumdisplay');
}


?>