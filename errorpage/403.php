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
<?php
    include("../res/conf/const.php");
	include(_INCLUDE_);
    echo '<title>403 | '._SITE_NAME_.'</title>';
?>
</head> 
<body>
    <div class=<?php echo $styl_container;?>>
        <center>
			<img src="<?php echo _HTML_BASE_;?>/res/img/errorpage/403.png"/>
        </center>
            <br><a href="<?php echo _HTML_BASE_;?>" target="_self" rel="noopener">
                <div class=<?php echo $styl_button_small;?>>
                    <b style="font-size:15px;">主页</b><br>Index
                </div>
            </a>
    </div>
<?php
    include(_PAGE_FOOTER_);
?>
</body>
</html>
