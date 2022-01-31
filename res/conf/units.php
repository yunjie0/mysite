<?php
$units=[
0=>[
"name"=>"mysconfig",
"class"=>"base",
"yamldir"=>"/",
],
1=>[
"name"=>"blueboard",
"class"=>"theme",
"yamldir"=>"",
],
2=>[
"name"=>"parsedown",
"class"=>"function",
"yamldir"=>"",
],
3=>[
"name"=>"mbase",
"class"=>"lib",
"yamldir"=>"",
],
4=>[
"name"=>"aplayer",
"class"=>"function",
"yamldir"=>"",
],
];
$theme_blueboard=[
    0 => [
        'background' => [
            0 => "https://josephz.top/res/img/pictures/wall/1.jpg",
            1 => "https://josephz.top/res/img/pictures/wall/2.jpg",
            2 => "https://josephz.top/res/img/pictures/wall/3.jpg",
            3 => "https://josephz.top/res/img/pictures/wall/4.jpg",
            4 => "https://josephz.top/res/img/pictures/wall/5.jpg",
            5 => "https://josephz.top/res/img/pictures/wall/6.jpg",
            6 => "https://josephz.top/res/img/pictures/wall/7.jpg",
            7 => "https://josephz.top/res/img/pictures/wall/8.jpg",
            8 => "https://josephz.top/res/img/pictures/wall/9.jpg",
        ],
    ],
];
$parsedown=[
    'path' => "/units/parsedown/",
];
$lib_mbase=[
    'main_php' => "main.php",
    'path' => "/units/lib-mbase/",
];
include("C:/hexo/joseph/mysite/units/lib-mbase/main.php");
$aplayer=[
    'path' => "/units/aplayer/",
    0 => [
        'enable' => true,
        'default_cover' => "".res."/img/aplayer/default.png",
    ],
];
?>