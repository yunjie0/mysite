<!--
    The Source Code of JOSEPHZ.TOP
    (C) 2021 Joseph Z.
    All rights reserved.
    license: BSD 3-Clause 
-->
<!--
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
-->

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Joseph Z.的小站</title>
    <link rel="stylesheet" href="/res/css/img.css" type="text/css"/>
    <link rel="stylesheet" href="/res/css/style.css" type="text/css"/>
<?php
    include("./res/conf/const.php");
    include(_PAGE_BG_);
?>
</head> 
<body>
<?php
    include(_PAGE_HEADER_);
?>
    <div class="container">
        <center>
            <img style="border-radius:183px;zoom:40%;margin-top:25px;" src="/res/joseph.jpg">
            <b style="font-size:200%;">Joseph Zhang - 小站</b>
            <h3>Joseph Z.'s Website</h3>
            
            <a href="/home" target="_self" rel="noopener">
                <img id="img_r" src="/res/icon/site/home.png" alt="小屋" title="Joseph Z.的小屋"/>
            </a>
            <a href="http://blog.josephz.top" target="_self" rel="noopener">
                <img id="img_r" src="/res/icon/site/blog.png" alt="博客" title="Joseph Z.的博客"/>
            </a>
            <a href="/goto/" target="_self" rel="noopener">
                <img id="img_r" src="/res/icon/site/goto.png" alt="去往" title="去往"/>
            </a>
        </center>
    </div>
<?php
    include(_PAGE_FOOTER_);
?>
</body>
</html>
