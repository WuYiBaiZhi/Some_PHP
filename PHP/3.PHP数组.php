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

//    // 创建索引数组
//    $arr = array(
//        '无意白纸',
//        '男',
//        '18'
//    );
//    var_dump( $arr );

//    // 输出数组值
//    $arr = [
//        '无意白纸',
//        '男',
//        '18'
//    ];
//    echo $arr[0];
//    echo '<hr>';
//    echo $arr[1];
//    echo '<hr>';
//    echo $arr[2];
//    echo '<hr>';
//
//    $arr_s = [
//        'Name' => '无意白纸',
//        'Sex' => '男',
//        'Year' => 18
//    ];
//
//    echo '我的名字叫: '.$arr_s['Name'];
//    echo '<hr>';
//    echo '我的性别是: '.$arr_s['Sex'];
//    echo '<hr>';
//    echo '我今年: '.$arr_s['Year'].'岁了';

//        // 打印数组print_r
//        $arr = [
//            '无意白纸',
//            '男',
//            '18'
//        ];
//        print_r($arr);
//        echo '<hr>';


//    //  连接符 .
//    $var1 = 'Name';
//    $var2 = '无意白纸';
//    var_dump( $var1 . $var2 );
//    var_dump( $var1 . '：' . $var2 );

//    // 二维数组
//    $arr = array(
//        array(
//            'name' => '欧阳',
//            'school'  => 'PHP中文网'
//        ),
//        array(
//            'name' => '西门',
//            'school'  => 'PHP中文网'
//        ),
//        array(
//            'name' => '灭绝',
//            'school'  => 'PHP中文网'
//        )
//    );
//    var_dump($arr);
//    print_r($arr);

//    // 三维数组
//    $arr = [
//        [
//            'name' => '欧阳',
//            'school'  => 'PHP中文网',
//            'gongfu' => [
//                'PHP',
//                '小程序',
//                'layui',
//                'Thinkphp'
//            ]
//        ],
//        [
//            'name' => '西门',
//            'school'  => 'PHP中文网',
//            'gongfu' => [
//                'PHP',
//                'Thinkphp',
//                'Laravel',
//                '实战项目'
//            ]
//        ],
//        [
//            'name' => '灭绝',
//            'school'  => 'PHP中文网',
//            'gongfu' => [
//                'HTML',
//                'PHP',
//                'layui',
//                'Thinkphp'
//            ]
//        ]
//    ];
//    var_dump($arr);
//    print_r($arr);

//    // 多维数组访问
//    $arr = [
//        [
//            'name' => '欧阳',
//            'school'  => 'PHP中文网',
//            'gongfu' => [
//                'PHP',
//                '小程序',
//                'layui',
//                'Thinkphp'
//            ]
//        ],
//        [
//            'name' => '西门',
//            'school'  => 'PHP中文网',
//            'gongfu' => [
//                'PHP',
//                'Thinkphp',
//                'Laravel',
//                '实战项目'
//            ]
//        ],
//        [
//            'name' => '灭绝',
//            'school'  => 'PHP中文网',
//            'gongfu' => [
//                'HTML',
//                'PHP',
//                'layui',
//                'Thinkphp'
//            ]
//        ]
//    ]
//    echo $arr[0]['name'].' --- ';
//    echo $arr[0]['gongfu'][0].' --- ';
//    echo $arr[0]['gongfu'][1];


//    // 多维数组访问Test
//    $arr = [
//            [
//                    'ID' => '001',
//                    'Name' => '无意白纸',
//                    'Sex' => '男',
//                    'Year' => 18,
//                [
//                    '网络Web前端开发'
//                ]
//
//            ],
//        [
//            'ID' => '002',
//            'Name' => '陈师傅',
//            'Sex' => '男',
//            'Year' => 17,
//            [
//                '网络空间安全'
//            ]
//        ]
//    ];
//
//    $a = 0;
//    echo 'ID : ' . $arr[$a]['ID'];
//    echo '<br>';
//    echo 'Name : ' . $arr[$a]['Name'];
//    echo '<br>';
//    echo '参赛项目 : ' . $arr[$a][$a][$a];
//    echo '<hr>';
//    $a = 1;
//    echo 'ID : ' . $arr[$a]['ID'];
//    echo '<br>';
//    echo 'Name : ' . $arr[$a]['Name'];
//    echo '<br>';
//    echo '参赛项目 : ' . $arr[$a][0][0];


//    // 循环数组
//    $arr = array(
//        'ouyang' => '欧阳',
//        'ximen' => '西门',
//        'miejue' => '灭绝'
//    );
//    foreach( $arr as $v ){
//        echo $v;
//        echo '<hr>';
//    }

//    // key 和 value
//    // $k 和 $v，变量名，可以自定义
//    // 示例1：
//    $arr = array(
//        'ouyang' => '欧阳',
//        'ximen' => '西门',
//        'miejue' => '灭绝'
//    );
//    foreach( $arr as $k=>$v ){
//        echo $k . ' --- ' . $v;
//        echo '<hr>';
//    }
//    // 示例2：
//    $arr = [
//        '欧阳',
//        '西门',
//        '灭绝'
//    ];
//    foreach( $arr as $k=>$v ){
//        echo $k . ' --- ' . $v;
//        echo '<hr>';
//    }


//    // 循环多维数组
//    // 示例1：
//    $arr = [
//        [
//            'name' => '欧阳',
//            'school'  => 'PHP中文网'
//        ],
//        [
//            'name' => '西门',
//            'school'  => 'PHP中文网'
//        ],
//        [
//            'name' => '灭绝',
//            'school'  => 'PHP中文网'
//        ]
//    ];
//    foreach( $arr as $k=>$v ){
//        print_r($v);
//        echo '<hr>';
//    }
//    // 示例2：
//    $arr = [
//        [
//            'name' => '欧阳',
//            'school'  => 'PHP中文网'
//        ],
//        [
//            'name' => '西门',
//            'school'  => 'PHP中文网'
//        ],
//        [
//            'name' => '灭绝',
//            'school'  => 'PHP中文网'
//        ]
//    ];
//    foreach( $arr as $k=>$v ){
//        foreach ($v as $key => $value) {
//            echo $value;
//            echo '<hr>';
//        }
//    }
//    // 示例3：
//    $arr = [
//        [
//            'name' => '欧阳',
//            'school'  => 'PHP中文网'
//        ],
//        [
//            'name' => '西门',
//            'school'  => 'PHP中文网'
//        ],
//        [
//            'name' => '灭绝',
//            'school'  => 'PHP中文网'
//        ]
//    ];
//    foreach( $arr as $k=>$v ){
//        echo $v['name'].' --- '.$v['school'];
//        echo '<hr>';
//    }

    // 循环多维数组嵌套
    $arr = [
            [
                'name' => '欧阳',
                'school'  => 'PHP中文网'
            ],
            [
                'name' => '西门',
                'school'  => 'PHP中文网'
            ],
            [
                'name' => '灭绝',
                'school'  => 'PHP中文网'
            ]
        ];
    foreach ($arr as $v) {
        foreach ($v as $vv) {
            echo $vv;
            echo '<hr>';
        }
    };