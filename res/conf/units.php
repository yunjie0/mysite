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
5=>[
"name"=>"webclock",
"class"=>"function",
"yamldir"=>"",
],
6=>[
"name"=>"mysnote",
"class"=>"function",
"yamldir"=>"",
],
7=>[
"name"=>"waline",
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
    'main_php' => "main.php",
    0 => [
        'enable' => true,
        'config' => "config.js",
    ],
];
$webclock=[
    'path' => "/units/webclock/",
];
$mysnote=[
    'path' => "/units/mysnote/",
    0 => [
        'hpptalk' => [
            0 => [
                'enable' => false,
                'domain' => "",
                'theme' => "",
            ],
        ],
    ],
    1 => [
        'artitalk' => [
            0 => [
                'enable' => true,
                'appid' => "QATHe8VPLQiNKFjL40MGtWvP-MdYXbMMI",
                'appkey' => "uAsKE43jUSPnBEcaM9HoA9w6",
            ],
        ],
    ],
];
$waline=[
    'path' => "/units/waline/",
    'start' => "start.php",
    0 => [
        'url' => "https://blog-api-mroxoa8vg-jiaxu07.vercel.app",
    ],
];
?>