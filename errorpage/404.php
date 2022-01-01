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
    <title>404 | Joseph Z.的小站</title>
<?php
    include("../res/conf/const.php");
    include(_PAGE_BG_);
?>
</head> 
<body>
<?php
    include(_PAGE_HEADER_);
?>
    <div class="container">
        <center>
            <h1>404</h1>
            <h3>抱歉，找不到请求的文件</h3>
            
            <a href="/" target="_self" rel="noopener">
                <div class="button_big">
                    <b style="font-size:15px;">回到主页</b><br>Site
                </div>
            </a>
            <a href="/goto/" target="_self" rel="noopener">
                <div class="button_big">
                    <b style="font-size:15px;">去往</b><br>Go to
                </div>
            </a>
        </center>
    </div>
<?php
    include(_PAGE_FOOTER_);
?>
</body>
</html>
