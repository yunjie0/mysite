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
<script>
var mode;

var date = new Date();  
var h = date.getHours();          // 获取小时
if (h <= 6 || h >= 18) {
//	console.log('It is night now!');
	mode == true;
	enable_darkmode();
}

function enable_darkmode() {
	var styles = getComputedStyle(document.documentElement);

	if (mode == false) {		// light
		document.documentElement.style.setProperty("--bg-color","<?php echo _BG_COLOR_;?>");
		document.documentElement.style.setProperty("--theme-color","rgba( 200, 210, 240, 0.75 )");
		document.documentElement.style.setProperty("--theme-color-hover","rgba( 255, 255, 255, 0.85 )");
		document.documentElement.style.setProperty("--theme-card-hover","#dbdbdb");
		document.documentElement.style.setProperty("--theme-card-a","5px 5px 10px #c9c9c9, -5px -5px 10px #ededed");
		document.documentElement.style.setProperty("--theme-card-s","inset 5px 5px 10px #c9c9c9,inset -5px -5px 10px #ededed");
		document.documentElement.style.setProperty("--theme-card-b","rgba( 255, 255, 255, 0.18 )");
		document.documentElement.style.setProperty("--font-color","#000000");
		document.documentElement.style.setProperty("--filter","100%");
	}
	else {					// dark
		document.documentElement.style.setProperty("--bg-color","<?php echo _BG_COLOR_DARK_?>");
		document.documentElement.style.setProperty("--theme-color","rgba( 20, 20, 20, 0.75 )");
		document.documentElement.style.setProperty("--theme-color-hover","#000000");
		document.documentElement.style.setProperty("--theme-card-hover","#222222");
		document.documentElement.style.setProperty("--theme-card-a","5px 5px 10px #3b3b3b,-5px -5px 10px #4f4f4f");
		document.documentElement.style.setProperty("--theme-card-s"," inset 5px 5px 10px #3b3b3b, inset -5px -5px 10px #4f4f4f");
		document.documentElement.style.setProperty("--theme-card-b","rgba( 0, 0, 0, 0.18 )");
		document.documentElement.style.setProperty("--font-color","#aaaaaa");
		document.documentElement.style.setProperty("--filter","50%");
		
	}
//	console.log('enable dark mode:',mode);
}

function d_click() {
	if (mode == false)	mode = true;
	else 				mode = false;
	enable_darkmode();
};

function up_click() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    document.documentElement.scrollTop = 0;
};
</script>
<div class="side_buttons">
	<div class="side_button_0" onclick="d_click()">
		<img src="<?php echo _HTML_RES_?>/icon/side/darkmode.png">
	</div>
	<div class="side_button_0" onclick="up_click()">
		<img src="<?php echo _HTML_RES_?>/icon/side/up.png">
	</div>
</div>