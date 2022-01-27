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

include('func/conf.php');
include('func/refresh.php');
require_once './vendor/autoload.php';
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;


// stage 0
refresh_dir('conf/');


// stage 1


try {
    $value = Yaml::parseFile('./config.yml');
} catch (ParseException $e) {
    echo $e->getMessage();
}
echo '<pre>';
//var_dump($value);
echo 'Stage 1
';

// include.php
$fp = fopen("conf/include.php", "a");
fwrite($fp,'<?php
');
$in_include_1=array('_RES_.\'/conf/head.php\'',
'_RES_.\'/conf/pages.php\'',
'_RES_.\'/web/version.php\''
);
for ($i=0;$i<count($in_include_1);$i++) {
	in($fp,$in_include_1[$i]);
}
if ($value['include_func'] != NULL) {
	for ($i=0;$i<count($value['include_func']);$i++) {
		s($fp,$value['include_func'][$i]);
	}
}
fwrite($fp,'?>');
fclose($fp);

// head.php
$fp = fopen("conf/head.php", "a");
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
$fp = fopen("conf/const.php", "a");
fwrite($fp,'<?php
');
$des_a_const_1=array('pbase','base','SITE_NAME','MASTER_NAME','INTRO','HOME_NAME','AVATAR','SITE_BIRTHDAY','COMMENT');
$des_b_const_1=array('php_base','html_base','site_name','master_name','intro','home_name','avatar','site_birthday','comment');
for ($i=0;$i<count($des_a_const_1);$i++) {
	des($fp,$des_a_const_1[$i],$value[$des_b_const_1[$i]]);
}
$des_a_const_2=array('pres','res');
$des_b_const_2=array('php_res_dir','html_res_dir');
for ($i=0;$i<count($des_a_const_2);$i++) {
	de($fp,$des_a_const_2[$i],$value['files_const'][$des_b_const_2[$i]]);
}
$des_a_const_3=array('THEME_COLOR_LIGHT','THEME_COLOR_DARK');
$des_b_const_3=array('light','dark');
for ($i=0;$i<count($des_a_const_3);$i++) {
	des($fp,$des_a_const_3[$i],$value['theme_color'][$des_b_const_3[$i]]);
}
fwrite($fp,'?>');
fclose($fp);

// pages.php
$fp = fopen("conf/pages.php", "a");
fwrite($fp,'<?php
');
arrd($fp,'othersite',$value['othersite'],array('name','link'),array('str','str'));
fwrite($fp,'?>');
fclose($fp);


// stage 2


try {
    $t_value = Yaml::parseFile('../theme-'.$value['theme'].'/yaml/install.yml');
} catch (ParseException $e) {
    echo $e->getMessage();
}

echo 'Stage 2
';

$fp = fopen("conf/head.php", "a");
fwrite($fp,'<?php
');
for ($i=0;$i<count($t_value['head']);$i++) {
	s($fp,$t_value['head'][$i]);
}
fwrite($fp,'?>');
fclose($fp);
?>
