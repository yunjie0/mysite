<?php
/***
    The Source Code of mysnote
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

EasyHtml::include_css(base.$mysnote['path'].'css/card.css');
EasyHtml::include_css(base.$mysnote['path'].'css/hpp_talk.css');
EasyHtml::include_css(base.$mysnote['path'].'css/yiyan.css');

class MysNote
{
	public static function init()   // front
	{
        global $mysnote;
		EasyHtml::div_start(NULL,'notecard',NULL);
            /* Webclock */
            global $webclock;
            $dir=base.$webclock['path'];
            $hide_title=true;
            $hide_bgcolor=true;
            include(pbase.$webclock['path'].'index.php');

            /* Hexo++ Talk */
            if ($mysnote[0]['hpptalk'][0]['enable'])
                include(pbase.$mysnote['path'].'hppnote.php');

            /* Artitalk */
            if ($mysnote[0]['artitalk'][0]['enable'])
                include(pbase.$mysnote['path'].'artitalk.php');

            /* yiyan */
			echo '<div id="yiyan" onclick="get_yiyan()"><p id="yiyan_text">获取中...</p></div>';
		EasyHtml::div_end();

        echo '<br>';
	}
}
?>

<?php
function get_yiyan_json($filename) {
    $fp = fopen($filename, 'r');
    echo fread($fp, filesize($filename));
}
?>

<script>
var yiyan_json = <?php get_yiyan_json(pbase.$mysnote['path'].$mysnote[0]['yiyan_json'])?>;
</script>
<?php
EasyHtml::include_js(base.$mysnote['path'].'js/yiyan.js');
?>
