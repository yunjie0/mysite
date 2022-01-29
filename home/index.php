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
define("INDEX_IMG_STRL", 'index_img');
define("INDEX_H1_STRL", 'index_h1');
define("INDEX_INTRO_STRL", 'index_intro');
?>
</head> 
<body>
<?php
function main_container() {
	echo '<div class="main_container">';
	echo '<h1>'.HOME_NAME.'</h1>';
	echo '</div>';
}

echo '<div class="'.CON_HEAD.'">';
head_container();
echo '</div>';
echo '<center>';
main_container();
echo '</center>
';
echo '<div class="'.CON_FOOT.'">';
foot_container();
echo '</div>';
?>
</body>
</html>