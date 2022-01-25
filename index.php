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
    include(_INCLUDE_);
	echo '<title>'._SITE_NAME_.'</title>';
?>
</head> 
<body>
<?php
    include(_PAGE_HEADER_);
?>
    <div class="container">
        <center>
            <img style="border-radius:183px;zoom:40%;margin-top:25px;" src=<?php echo _AVATAR_;?> />
            <b style="font-size:200%;"><?php echo _SITE_NAME_;?></b>
            <p style="font-size:20px;"><?php echo _SITE_NAME_H2_;?></p>
            
<?php
	for ($i=0; $local_pages[$i] != "___END"; $i++) {
		echo '<a href='._HTML_BASE_.$local_pages[$i].' target="_self" rel="noopener"><img id="img_r" src='.$local_pages_img[$i].' alt='.$local_pages_title[$i].' title='.$local_pages_title[$i].' /></a>';
	}
	for ($i=0; $other_pages[$i] != "___END"; $i++) {
		echo '<a href='.$other_pages[$i].' target="_self" rel="noopener"><img id="img_r" src='.$other_pages_img[$i].' alt='.$other_pages_title[$i].' title='.$other_pages_title[$i].' /></a>';
	}
?>
        </center>
    </div>
<?php
    include(_PAGE_FOOTER_);
?>
</body>
</html>
