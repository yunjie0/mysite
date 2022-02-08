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

echo '<link rel="stylesheet" href="'.base.$mysnote['path'].'css/card.css">';
echo '<link rel="stylesheet" href="'.base.$mysnote['path'].'css/hpp_talk.css">';
echo '<link rel="stylesheet" href="'.base.$mysnote['path'].'css/yiyan.css">';

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
            include(pbase.$mysnote['path'].'hppnote.php');

            /* yiyan */
			echo '<div id="yiyan"><p id="hitokoto">获取中...</p></div>';
		EasyHtml::div_end();

        echo '<br>';
	}
}
?>
<script src="https://cdn.jsdelivr.net/npm/bluebird@3/js/browser/bluebird.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/whatwg-fetch@2.0.3/fetch.min.js"></script>
<script>
    fetch('https://v1.hitokoto.cn')
    .then(function (res){      
        return res.json();
    })
    .then(function (data) {      
        var hitokoto = document.getElementById('hitokoto');
        hitokoto.innerText = data.hitokoto; 
    })
    .catch(function (err) {      console.error(err);
    })
</script>
