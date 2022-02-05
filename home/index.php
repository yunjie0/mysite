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
echo '<title>'.HOME_NAME.'</title>';
?>
</head>
<body>
<?php
function main_container() {
	EasyHtml::div_start('main_container',NULL,NULL);
		echo '<h1 class="'.INDEX_H1_STYL.'" align="center">'.HOME_NAME.'</h1>';
		HomeIndex::out_markdown();
	EasyHtml::div_end();
}

head_init();
main_container();
foot_init();
?>
</body>
</html>

<?php
class HomeIndex {
	public static function out_markdown() {
		global $parsedown;
		
		require_once pbase.$parsedown['path'].'Parsedown.php';
		$Parsedown = new Parsedown();
		$fp = fopen('./main.md', 'r');
		echo $Parsedown->text(fread($fp,filesize("./main.md")));
	}
}
?>
