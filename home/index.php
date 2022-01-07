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
    include(_INCLUDE_);
	echo '<title>'._HOME_NAME_.'</title>';
?>
</head> 
<body>
<?php
    include(_PAGE_HEADER_);
?>
    <div class=<?php echo $styl_container;?>>
        <center>
			<h1>小屋</h1>
            <h3><?php echo _HOME_NAME_;?></h3>
            <div>
                <a href="search.php" target="_self" rel="noopener">
                    <div class=<?php echo $styl_button_big;?>>
                        <b style="font-size:15px;">搜索</b><br>search
                    </div>
                </a>
                <a href="time.php" target="_self" rel="noopener">
                    <div class=<?php echo $styl_button_big;?>>
                        <b style="font-size:15px;">时间</b><br>time
                    </div>
                </a>
                <a href="projects.php" target="_self" rel="noopener">
                    <div class=<?php echo $styl_button_big;?>>
                        <b style="font-size:15px;">项目</b><br>projects
                    </div>
                </a>
                <a href="videos.php" target="_self" rel="noopener">
                    <div class=<?php echo $styl_button_big;?>>
                        <b style="font-size:15px;">视频</b><br>video
                    </div>
                </a>
                
                <a href="<?php echo _DOCS_;?>" target="_self" rel="noopener">
                    <div class=<?php echo $styl_button_big;?>>
                        <b style="font-size:15px;">文档</b><br>doc
                    </div>
                </a>
                <a href="<?php echo _RELAX_;?>" target="_self" rel="noopener">
                    <div class=<?php echo $styl_button_big;?>>
                        <b style="font-size:15px;">休闲</b><br>relax
                    </div>
                </a>
            </div>
        </center>
<?php
    include(_COMMENT_);
?>
    </div>
<?php
    include(_PAGE_FOOTER_);
?>
</body>
</html>
