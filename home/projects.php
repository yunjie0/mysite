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
<!doctype html>
<html>
<head>
<?php
    include("../res/conf/const.php");
    include($_BASE_."/res/conf/projects.php");
    include(_PAGE_BG_);
	echo '<title>项目 |'._HOME_NAME_.'</title>';
?>
    <link rel="stylesheet" href="<?php echo _HTML_BASE_;?>/res/css/home/project.css" type="text/css"/>
</head> 
<body>
<?php
    include(_PAGE_HEADER_);
?>
    <div class="container">
        <center><h1>项目</h1></center>
        <a href="./" target="_self" rel="noopener">
            <div class="button_small">
                <b style="font-size:15px;">离开</b><br>back
            </div>
        </a>
        
<?php
    for ($i=0; $name[$i] != "___END"; $i++) {
        if ($link[$i] != "disabled")
        {
            echo '<a href='.$link[$i].' target="_blank" rel="noopener">';
        }
        echo '<div class="proj_block"><img src="'.$img[$i].'" width=300px height=240px><span><b style="font-size:15px;">'.$name[$i].'</b><br>'.$intro[$i].'<br>';
        
        if ($opensrc[$i] == "disabled")
        {
            echo '未开源';
        } else
        {
            echo '开源协议: '.$opensrc[$i];
        }
        echo '<br>';
        
        if ($github[$i] != "disabled")
        {
            echo ' | <a href="'.$github[$i].'" target="_blank">Github</a>';
        }
        if ($gitee[$i] != "disabled")
        {
            echo ' | <a href="'.$gitee[$i].'" target="_blank">Gitee</a>';
        }
        if ($download[$i] != "disabled")
        {
            echo ' | <a href="'.$download[$i].'" target="_blank">Download</a>';
        } 
        echo ' |</span></div>';
        echo '</a>';
    }
?>
       <?php
    include(_WALINE_);
?> 
    </div>
<?php
    include(_PAGE_FOOTER_);
?>
</body>
</html>
