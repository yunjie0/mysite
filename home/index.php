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
<?php
	for ($i=0; $home_pages_local[$i] != "___END"; $i++) {
		echo '<a href="'._HTML_BASE_.'/home/'.$home_pages_local[$i].'.php" target="_self" rel="noopener"><div class='.$styl_button_big.'><b style="font-size:15px;">'.$home_pages_local_title[$i].'</b><br>'.$home_pages_local_intro[$i].'</div></a>';
	}
	for ($i=0; $home_pages_other[$i] != "___END"; $i++) {
		echo '<a href='.$home_pages_other[$i].' target="_self" rel="noopener"><div class='.$styl_button_big.'><b style="font-size:15px;">'.$home_pages_other_title[$i].'</b><br>'.$home_pages_other_intro[$i].'</div></a>';
	}
?>
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
