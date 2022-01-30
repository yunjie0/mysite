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
?>
<!doctype html>
<html>
<head>
<?php
include("./res/conf/const.php");
include(_INCLUDE_);
echo '<title>'.SITE_NAME.'</title>';
define("INDEX_IMG_STRL", 'index_img');
define("INDEX_H1_STRL", 'index_h1');
define("INDEX_INTRO_STRL", 'index_intro');
?>
</head> 
<body>
<?php
function main_container() {
	global $othersite;
	
	echo '<div class="'.INDEX_STYL.'"><div class="'.INFO_BLOCK.'">
	<img class="'.INDEX_IMG_STYL.'" id="img_r"	src='.AVATAR.' /><br>
	<b class="'.INDEX_H1_STYL.'">'.SITE_NAME.'</b>
	<p class="'.INDEX_INTRO_STYL.'">'.INTRO.'</p></div>';
	
	echo '<div class="'.NOTE_BLOCK.'">条子';
	
	echo '</div></div>';
	echo '<div class="main_container" align="center">';
	
	// Home Page
	echo '<a href="'.base.'/home" target="_self" rel="noopener"><div class="button_big"><p style="font-size:15px;">'.HOME_NAME.'</p></div></a>';
	// Other Page
	for ($i=0; $i<count($othersite); $i++) {
		echo '<a href="'.$othersite[$i]['link'].'" target="_self" rel="noopener"><div class="button_big"><p style="font-size:15px;">'.$othersite[$i]['name'].'</p></div></a>';
	}
	echo '</div>';
}

head_init();
main_container();
foot_init();
?>
</body>
</html>
