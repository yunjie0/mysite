<?php
/***
    The Source Code of mys
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
?><!doctype html>
<html>
<head>
<?php
include("../res/conf/const.php");
include(_INCLUDE_);
echo '<title>去往 | '.HOME_NAME.'</title>';
?>
</head>
<body>
<?php
head_init();
EasyHtml::div_start('main_container',NULL,NULL);
	echo '<h1 class="'.INDEX_H1_STYL.'" align="center">去往</h1>';

	require_once './vendor/autoload.php';
	use Symfony\Component\Yaml\Exception\ParseException;
	use Symfony\Component\Yaml\Yaml;
	try {
		$value = Yaml::parseFile('./data.yml');
	} catch (ParseException $e) {
		echo $e->getMessage();
	}
//	var_dump($value);

	EasyHtml::div_start(NULL,NULL,'center');

	for ($i=0;$i<count($value);$i++) {
		EasyHtml::a_start($value[$i]['link'],'_blank');
			echo '<div id="card" align="center" style="width:40%">
			<img style="width:18px;height:18px" src='.get_ico($value[$i]['link']).' />
			<b style="font-size:18px">'.$value[$i]['name'].'</b>
			<br>'.$value[$i]['desc'].'</div>';
		EasyHtml::a_end();
	}

	EasyHtml::div_end();
EasyHtml::div_end();
foot_init();
?>
</body>
</html>

<?php
function get_ico($site) {
	if (file_exists(pbase.'/res/img/favicon'.$site.'.ico')) {
		return pbase.'/res/img/favicon'.$site.'.ico';
	}
	else {
		return $site.'/favicon.ico';
	}
}
?>
