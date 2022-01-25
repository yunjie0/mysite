# MySite
MySite ver.0.0.1

# 安装

1. 将文件解压到服务器相应目录
2. /config.yml.example 改成 /config.yml，并按照您的需求修改
3. 运行 pip install pyyaml 
4. 运行 python ./configure.py （或 python3 ./configure.py)

# 更新

1. 新版本覆盖旧版本（保留配置文件和你原来的数据）
2. 修改配置文件，将您的配置文件适配新版本。
3. 运行 python ./configure.py

## 最新配置文件
```
# base path in php (default value is ''),
# TAG is $_BASE_
php_base: ''

# base path in html (default value is '')
# TAG is _HTML_BASE_

# name of your site
site_name: 'mysite'
# your name
master_name: 'MySite'
# the introduction of you (v0.0.4)
intro: 'mysite'
# the name of home page
home_name: 'myhome'

# your avatar's link
avatar: '"._HTML_RES_."/avatar.png'

# some links
blog: 'xxx'
docs_site: 'xxx'
relax: 'xxx'

# pages
pages:
  # main pages inside the site
  local:
    - '/home'
#    - '/goto'
  local_img:
    - '"._HTML_RES_."/icon/site/home.png'
#    - '"._HTML_RES_."/icon/site/goto.png'
  local_title:
    - '小屋'
#    - '去往'
  # main pages outside the site
  other:
    - 'xxx'    
    - 'xxx'
  other_img:
    - '"._HTML_RES_."/icon/site/blog.png'
    - '"._HTML_RES_."/icon/site/pan.png'
  other_title:
    - '博客'
    - '云盘'
  # home pages inside the site
  home_local:
    - 'search'
    - 'time'
#    - 'projects'
#    - 'videos'
  home_local_title:
    - '搜索'
    - '时间'
#    - '项目'
#    - '视频'
  home_local_intro:
    - 'search'
    - 'time'
#    - 'projects'
#    - 'videos'
  # home pages outside the site
  home_other:
    - 'xxx'
    - 'xxx'
  home_other_title:
    - '文档'
    - '休闲'
  home_other_intro:
    - 'docs'
    - 'relax'
  
# Links in bottom
# 1. github
# 2. gitee
# 3. bilibili
# 4. zhihu
# 5. rss
# 6. twitter
# 7. youtube
links:
  onoff:
# If you have, input the addresses. If not, input 'no'.
    - 'no'
    - 'no'
    - 'no'
    - 'no'
    - 'no'
    - 'no'
    - 'no'
  logos:
    - '"._HTML_RES_."/icon/connect/github.webp'
    - 'https://gitee.com/favicon.ico'
    - 'https://www.bilibili.com/favicon.ico'
    - 'https://zhihu.com/favicon.ico'
    - '"._HTML_RES_."/icon/connect/rss.jpg'
    - '"._HTML_RES_."/icon/connect/twitter.jpeg'
    - '"._HTML_RES_."/icon/connect/youtube.jpeg'

goto:
  title:
  link:
  intro:

site_birthday: '07/21/2021'

projects:
  name:
  link:
  img:
  intro:
  opensrc:
  github:
  gitee:
  download:

videos:
  title:
  img:
  intro:
  link:
  bilibili:
    
main_color:
  light: '#95afff'
  dark: '#051f7f'

aplayer:
  enable: true
  default_cover: '"._RES_."/img/aplayer/default.png'

enable_travelling: true

# Comment System
# like waline
comment: xxx

background:
  light_color: '#95afff'
  dark_color: '#051f7f'
  enable_image: false
  pictures_group: 'xxx'
  number: 10

# do not change unless you know what you will do 
# (v0.0.4)
head:
  - <meta charset="utf-8">
  - <meta name="viewport" content="width=device-width,initial-scale=1">
  - <link rel="stylesheet" href="'._HTML_RES_.'/css/header.css" type="text/css"/>
  - <link rel="stylesheet" href="'._HTML_RES_.'/css/img.css" type="text/css"/>
  - <link rel="stylesheet" href="'._HTML_RES_.'/css/style.css" type="text/css"/>
  - <link rel="stylesheet" href="'._HTML_RES_.'/css/side.css" type="text/css"/>
  - <link rel="stylesheet" href="'._HTML_RES_.'/css/footer.css" type="text/css"/>
  - <link rel="stylesheet" href="'._HTML_RES_.'/css/APlayer.min.css" type="text/css"/>
  - <script src="'._HTML_RES_.'/js/jquery-3.4.1.min.js" type="text/javascript"></script>
  - <script src="'._HTML_RES_.'/js/APlayer.min.js" type="text/javascript"></script>
include_func:
  - _RES_.'/conf/head.php'
  - _RES_.'/conf/pages.php'
  - _RES_.'/conf/goto.php'
  - _RES_.'/conf/videos.php'
  - _RES_.'/conf/links.php'
  - _RES_.'/conf/pictures.php'
  - _RES_.'/conf/projects.php'
  - _RES_.'/web/version.php'
  - _PAGE_BG_
files_const:
  php_res_dir: $_BASE_.'/res'
  html_res_dir: _HTML_BASE_.'/res'
  include_dir: _RES_.'/conf/include.php'
  pages:
    header: _RES_.'/web/header.php'         # _PAGE_HEADER_
    footer: _RES_.'/web/footer.php'         # _PAGE_FOOTER_
    bg: _RES_.'/web/bg.php'                 # _PAGE_BG_
    aplayer: _RES_.'/web/aplayer.php'       # _PAGE_APLAYER_
    side: _RES_.'/web/side.php'             # _PAGE_SIDE_
  comment:
    xxx: _RES_.'/web/comment_none.php'
    waline: _RES_.'/web/waline.php'

```

# 更新

- 0.0.1: 第一个版本
- 0.0.2: 修补了一些bug
- 0.0.3：支持yaml配置文件 
 
