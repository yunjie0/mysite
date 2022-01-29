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

$VERSION = 'v0.1.0-beta';

include('func/conf.php');
include('func/refresh.php');
require_once './vendor/autoload.php';
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;


// stage 0
echo '<pre>';
echo 'Stage 0
';
refresh_dir('../../res/conf/');


// stage 1


try {
    $value = Yaml::parseFile('./config.yml');
} catch (ParseException $e) {
    echo $e->getMessage();
}
//var_dump($value);
echo 'Stage 1
';

// include.php
$fp = fopen("../../res/conf/include.php", "a");
fwrite($fp,'<?php
');
$in_include_1=array('pres.\'/conf/head.php\'',
'pres.\'/conf/pages.php\'',
'pres.\'/conf/version.php\'',
'pres.\'/conf/theme.php\''
);
for ($i=0;$i<count($in_include_1);$i++) {
	in($fp,$in_include_1[$i]);
}
if ($value['include_func'] != NULL) {
	for ($i=0;$i<count($value['include_func']);$i++) {
		in($fp,$value['include_func'][$i]);
	}
}
fwrite($fp,'?>');
fclose($fp);

// head.php
$fp = fopen("../../res/conf/head.php", "a");
fwrite($fp,'<?php
');
$s_head=array('<meta charset="utf-8">',
'<meta name="viewport" content="width=device-width,initial-scale=1">',
'<script src="\'.res.\'/js/jquery-3.4.1.min.js" type="text/javascript"></script>'
);
for ($i=0;$i<count($s_head);$i++) {
	s($fp,$s_head[$i]);
}
if ($value['head'] != NULL) {
	for ($i=0;$i<count($value['head']);$i++) {
		s($fp,$value['head'][$i]);
	}
}
fwrite($fp,'?>');
fclose($fp);

// const.php
$fp = fopen("../../res/conf/const.php", "a");
fwrite($fp,'<?php
');
$des_a_const_1=array('pbase','base','SITE_NAME','MASTER_NAME','INTRO','HOME_NAME','SITE_BIRTHDAY','COMMENT');
$des_b_const_1=array('php_base','html_base','site_name','master_name','intro','home_name','site_birthday','comment');
for ($i=0;$i<count($des_a_const_1);$i++) {
	des($fp,$des_a_const_1[$i],$value[$des_b_const_1[$i]]);
}
$de_a_const_2=array('pres','res');
$de_b_const_2=array('php_res_dir','html_res_dir');
for ($i=0;$i<count($de_a_const_2);$i++) {
	de($fp,$de_a_const_2[$i],$value['files_const'][$de_b_const_2[$i]]);
}
$des_a_const_3=array('THEME_COLOR_LIGHT','THEME_COLOR_DARK');
$des_b_const_3=array('light','dark');
for ($i=0;$i<count($des_a_const_3);$i++) {
	des($fp,$des_a_const_3[$i],$value['theme_color'][$des_b_const_3[$i]]);
}
$des_a_const_4=array('_INCLUDE_');
$des_b_const_4=array('".pres."/conf/include.php');
for ($i=0;$i<count($des_a_const_4);$i++) {
	des($fp,$des_a_const_4[$i],$des_b_const_4[$i]);
}
$des_a_const_5=array('AVATAR');
$des_b_const_5=array('avatar');
for ($i=0;$i<count($des_a_const_5);$i++) {
	des($fp,$des_a_const_5[$i],$value[$des_b_const_5[$i]]);
}


fwrite($fp,'?>');
fclose($fp);

// pages.php
$fp = fopen("../../res/conf/pages.php", "a");
fwrite($fp,'<?php
');
arrd($fp,'othersite',$value['othersite'],array('flag','name','link'),array('str','str','str'));


fwrite($fp,'?>');
fclose($fp);

// version.php
$fp = fopen("../../res/conf/version.php", "a");
fwrite($fp,'<?php
define("VERSION","'.$VERSION.'");
?>');
fclose($fp);


// stage 2


try {
    $t_value = Yaml::parseFile('../theme-'.$value['theme'].'/yaml/install.yml');
} catch (ParseException $e) {
    echo $e->getMessage();
}

echo 'Stage 2
';

// head.php
$fp = fopen("../../res/conf/head.php", "a");
fwrite($fp,'<?php
');
for ($i=0;$i<count($t_value['head']);$i++) {
	s($fp,$t_value['head'][$i]);
}

fwrite($fp,'?>');
fclose($fp);

// include.php
$fp = fopen("../../res/conf/include.php", "a");
fwrite($fp,'<?php
');
if ($t_value['inc_func'] != NULL) {
	for ($i=0;$i<count($t_value['inc_func']);$i++) {
		ins($fp,$value['php_base'].'/units/theme-blueboard/'.$t_value['inc_func'][$i]);
	}
}

fwrite($fp,'?>');
fclose($fp);


// theme.php
$fp = fopen("../../res/conf/theme.php", "a");
fwrite($fp,'<?php
');
$des_a_theme_1=array('CON_HEAD','CON_FOOT','INDEX_IMG_STYL','INDEX_H1_STYL','INDEX_INTRO_STYL');
$des_b_theme_1=array('head','foot','index_img_styl','index_h1_styl','index_intro_styl');
for ($i=0;$i<count($des_a_theme_1);$i++) {
	des($fp,$des_a_theme_1[$i],$t_value['containers'][$des_b_theme_1[$i]]);
}

fwrite($fp,'?>');
fclose($fp);

?>