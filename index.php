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
    include("./res/conf/const.php");
    include(_PAGE_BG_);
	echo '<title>'._SITE_NAME_.'</title>';
?>
</head> 
<body>
<?php
    include(_PAGE_HEADER_);
?>
    <div class="container">
        <center>
            <img style="border-radius:183px;zoom:40%;margin-top:25px;" src="<?php echo _HTML_BASE_;?>/res/joseph.jpg">
            <b style="font-size:200%;"><?php echo _SITE_NAME_;?></b>
            <h3><?php echo _SITE_NAME_H2_;?></h3>
            
            <a href="<?php echo _HTML_BASE_;?>/home" target="_self" rel="noopener">
                <img id="img_r" src="<?php echo _HTML_BASE_;?>/res/icon/site/home.png" alt="小屋" title="Joseph Z.的小屋"/>
            </a>
            <a href="<?php echo _BLOG_;?>" target="_self" rel="noopener">
                <img id="img_r" src="<?php echo _HTML_BASE_;?>/res/icon/site/blog.png" alt="博客" title="Joseph Z.的博客"/>
            </a>
            <a href="<?php echo _HTML_BASE_;?>/goto/" target="_self" rel="noopener">
                <img id="img_r" src="<?php echo _HTML_BASE_;?>/res/icon/site/goto.png" alt="去往" title="去往"/>
            </a>
        </center>
    </div>
<?php
    include(_PAGE_FOOTER_);
?>
</body>
</html>
