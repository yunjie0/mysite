<?php
/***
    The Source Code of JOSEPHZ.TOP
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
<!DOCTYPE html>
<html lang="cn">
<head>
<?php
    include("../res/conf/const.php");
    include(_INCLUDE_);
	echo '<title>视频 | '._HOME_NAME_.'</title>';
?>
    <link rel="stylesheet" href="<?php echo _HTML_BASE_;?>/res/css/home/video.css" type="text/css"/>
</head>
<body>
<?php
    include(_PAGE_HEADER_);
?>
    <div class=<?php echo $styl_container;?>>
    <center><h1>视频</h1></center>
    <a href="./" target="_self" rel="noopener">
        <div class=<?php echo $styl_button_small;?>>
            <b style="font-size:15px;">离开</b><br>back
        </div>
    </a>
    <center><div>
<?php
    for ($i=0; $v_title[$i] != "___END"; $i++) {
        echo '<a href="videos-u.php?id='.$i.'" target="_parent" rel="noopener"><div class="v_block"><img src="';
        if ($v_img[$i] == "default")
        {
            echo _HTML_BASE_.'/res/img/videos/'.$i.'.jpg"';
        } elseif ($v_img[$i] == "none")
        {
            echo _HTML_BASE_.'/res/img/videos/none.png"';
        } else
        {
            echo $v_img[$i];
        }
        echo 'width=128 height=80 style="vertical-align:middle;"><br><b style="font-size:15px;">'.$v_title[$i].'</b></div></a>';
    }
?>
    </div></center>
<?php
    include(_COMMENT_);
?>    
</div>
<?php
    include(_PAGE_FOOTER_);
?>
</body>
</html>