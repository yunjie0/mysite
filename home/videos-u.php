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
    $id=$_REQUEST['id'];
    echo '<title>'.$v_title[$id].'- 视频 | '._HOME_NAME_.'</title>';
?>
    <link rel="stylesheet" href="<?php echo _HTML_BASE_;?>/res/css/home/video.css" type="text/css"/>
</head>
<body>
<?php
    include(_PAGE_HEADER_);
?>
    <div class=<?php echo $styl_container;?>>
    <center><h1>视频</h1>
<?php
    echo '<h2>'.$v_title[$id].'</h2>';
    if ($v_videolink[$id] != "disabled")
    {
        echo '<video width="640" height="480" controls="controls">
        <source src="'.$v_videolink[$id].'" type="video/mp4" />
        <source src="'.$v_videolink[$id].'" type="video/ogg" />
        <source src="'.$v_videolink[$id].'" type="video/webm" />
        <object data="'.$v_videolink[$id].'" width="640" height="480">
        <embed src="'.$v_videolink[$id].'" width="640" height="480" />
        </object>
        </video>';
    } elseif ($v_bilibili[$id] != "disabled")
    {
        echo '<iframe src="//player.bilibili.com/player.html?'.$v_bilibili[$id].'&page=1" scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="true" width=640 height=480></iframe>';
    } else
    {
        echo '<p>The video is not found.</p>';
    }
?>
    </center>
    <a href="<?php echo _HTML_BASE_?>/home/videos.php" target="_self" rel="noopener">
        <div class=<?php echo $styl_button_small;?>>
            <b style="font-size:15px;">离开</b><br>back
        </div>
    </a>
<?php
    echo '<p>'.$v_intro[$id].'</p>';
?><?php
    include(_COMMENT_);
?>
    </div>
<?php
    include(_PAGE_FOOTER_);
?>
</body>
</html>