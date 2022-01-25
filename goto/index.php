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
    <title>去往 ...</title>
<?php
    include("../res/conf/const.php");
    include(_INCLUDE_);
?>
    <link rel="stylesheet" href="<?php echo _HTML_BASE_;?>/res/css/goto.css" type="text/css"/>
</head>
<body>
<?php
    include(_PAGE_HEADER_);
?>
    <div class="container">
    <center><h1>去往</h1><div>
<?php
    for ($i=0; $goto_title[$i] != "___END"; $i++) {
        echo '<a href='.$goto_link[$i].' target="_blank" rel="noopener"><div class="gt_button_l"><img src="https://image.thum.io/get/width/1280/crop/800/'.$goto_link[$i].'" width=160px height=120px><br><b style="font-size:15px;">'.$goto_title[$i].'</b><br>'.$goto_intro[$i].'</div></a>';
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
