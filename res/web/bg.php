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
<?php
echo '
<style>:root{
   --bg-color: '._BG_COLOR_.';
   --theme-color: rgba( 200, 210, 240, 0.75 );
   --theme-color-hover: rgba( 255, 255, 255, 0.85 );
   --theme-card-hover: #dbdbdb;
   --theme-card-a: 5px 5px 10px #c9c9c9, -5px -5px 10px #ededed;
   --theme-card-s: inset 5px 5px 10px #c9c9c9, inset -5px -5px 10px #ededed;
   --theme-card-b: rgba( 255, 255, 255, 0.18 );
   --font-color: #000000;
   --filter: 100%;
}
img {
	-webkit-filter: brightness(var(--filter));
	filter: brightness(var(--filter));
}
body {
	background-color: var(--bg-color);
';
	
if (_SUPPORT_BG_) {
	echo '
	background:url('._HTML_BASE_.'/res/img/pictures/'._BG_GROUP_.'/'.rand(0,_PICTURES_NUM_).'.jpg);
	background-attachment:fixed;
	background-position: center top;
	background-position: right bottom;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment:fixed;
';
}
echo '};
</style>';
?>