<!-- _*_ coding:UTF-8 _*_ -->
<!-- PROJECT : Some_PHP -->
<!-- Time : 2022/1/22 18:07 -->
<!-- Auth : 无意白纸 -->
<!-- File : 3.数组.php -->
<!-- IDE  : PhpStorm -->
<?php
//    // 创建两个空数组
//    $arr = array();
//    var_dump( $arr );
//    $arrs = [];
//    var_dump( $arrs );


//    $arr = array(
//        '无意白纸',
//        '男',
//        '18'
//    );
//    var_dump( $arr );


//    $arr = [
//        'Name' => '无意白纸',
//        'Sex' => '男',
//        'Old' => '18'
//    ];
//    var_dump( $arr );


//    $arr = [
//            '无意白纸',
//            '男',
//            '18'
//    ];
//    echo $arr[0];
//    echo '<hr>';
//    echo $arr[1];
//    echo '<hr>';
//    echo $arr[2];
//    echo '<hr>';
//
//
//    $arrs = [
//            'Name' => '无意白纸',
//            'Sex' => '男',
//            'Old' => '18'
//    ];
//    echo $arrs['Name'];
//    echo '<hr>';
//    echo $arrs['Sex'];
//    echo '<hr>';
//    echo $arrs['Old'];
//    echo '<hr>';


    $arr = [
        '无意白纸',
        '男',
        '18'
    ];
    print_r($arr);
    echo '<hr>';
    //  连接符 .
    echo "我的名字叫 : " . $arr[0] . " 我的性别是 : " . $arr[1] . " 我今年 : " . $arr[2] . "岁了";