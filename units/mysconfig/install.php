<?php
/***
    The Source Code of mysinstall
    (C) 2021-2022 Joseph Z.
    All rights reserved.
    license: BSD 3-Clause 
***/

/*
    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
    AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
    IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
    DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
    FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
    DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
    SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
    CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
    OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
    OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

$s_head=array('<meta charset="utf-8">',
'<meta name="viewport" content="width=device-width,initial-scale=1">',
'<script src="\'.res.\'/js/jquery-3.4.1.min.js" type="text/javascript"></script>'
);
$in_include_1=array('_RES_.\'/conf/head.php\'',
'_RES_.\'/conf/pages.php\'',
'_RES_.\'/web/version.php\''
);
$des_a_const_2=array('pbase','base','SITE_NAME','MASTER_NAME','INTRO','HOME_NAME','AVATAR');
$des_b_const_2=array('php_base','html_base','site_name','master_name','intro','home_name','avatar');

include('func/conf.php');
require_once './vendor/autoload.php';
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;
 
try {
    $value = Yaml::parseFile('./config.yml');
} catch (ParseException $e) {
    echo $e->getMessage();
}

echo '/***include.php***/
';
for ($i=0;$i<count($in_include_1);$i++) {
	in($in_include_1[$i]);
}

echo '/***head.php***/
';
for ($i=0;$i<count($s_head);$i++) {
	s($s_head[$i]);
}

echo '/***const.php***/
';
for ($i=0;$i<count($des_a_const_2);$i++) {
	des($des_a_const_2[$i],$value[$des_b_const_2[$i]]);
}



/*


# pages
pages:
  # main pages inside the site
  local:
    - '/home'
    - '/goto'
  local_img:
    - '"._HTML_RES_."/icon/site/home.png'
    - '"._HTML_RES_."/icon/site/goto.png'
  local_title:
    - '小屋'
    - '去往'
  # main pages outside the site
  other:
    - 'https://blog.josephz.top'
    - 'https://pan.josephz.top'
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
    - 'projects'
    - 'videos'
  home_local_title:
    - '搜索'
    - '时间'
    - '项目'
    - '视频'
  home_local_intro:
    - 'search'
    - 'time'
    - 'projects'
    - 'videos'
  # home pages outside the site
  home_other:
    - 'https://doc.josephz.top'
    - 'https://mc.josephz.top'
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
    - '"._RES_."/icon/connect/github.webp'
    - 'https://gitee.com/favicon.ico'
    - 'https://www.bilibili.com/favicon.ico'
    - 'https://zhihu.com/favicon.ico'
    - '"._RES_."/icon/connect/rss.jpg'
    - '"._RES_."/icon/connect/twitter.jpeg'
    - '"._RES_."/icon/connect/youtube.jpeg'

goto:
  title:
    - '世界上第一个网站'
    - 'WCC实验室官网'
    - 'Github'
  link:
    - 'http://info.cern.ch'
    - 'https://wcc.group'
    - 'https://github.com'
  intro:
    - 'info.cern.ch'
    - 'wcc.group'
    - 'Build software better, together.'
	

projects:
  name:
    - 'project'
  link:
    - 'disabled'
  img:
    - 'xxx'
  intro:
    - 'xxx'
  opensrc:
    - 'BSD-3 Clause'
  github:
    - 'https://github.com/xxx/xxx'
  gitee:
    - 'disabled'
  download:
    - 'disabled'

videos:
  title:
    - '元首的愤怒'
    - '歌唱动荡的青春 红场千人大合唱版本'
  img:
    - 'none'
    - 'none'
  intro:
    - '元首的愤怒 气死偶嘞'
    - '歌唱动荡的青春 红场千人大合唱版本 哈利洛夫指挥'
  link:
    - 'disabled'
    - 'disabled'
  bilibili:
    - 'aid=22905&bvid=BV1Hx411c7iM&cid=37878'
    - 'aid=37278610&bvid=BV1tt411D7NA&cid=65516888'
	
*/

?>
