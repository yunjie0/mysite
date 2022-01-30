/***
    The Source Code of mys
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

function enable_darkmode() {
	var styles = getComputedStyle(document.documentElement);

	if (mode == false) {		// light
		document.documentElement.style.setProperty("--bg-color","#cccccc");
		document.documentElement.style.setProperty("--theme-color","rgba( 255, 255, 255, 0.75 )");
		document.documentElement.style.setProperty("--theme-card-hover","#dbdbdb");
		document.documentElement.style.setProperty("--theme-card-a","5px 5px 10px #c9c9c9, -5px -5px 10px #ededed");
		document.documentElement.style.setProperty("--theme-card-s","inset 5px 5px 10px #c9c9c9,inset -5px -5px 10px #ededed");
		document.documentElement.style.setProperty("--theme-card-b","rgba( 255, 255, 255, 0.18 )");
		document.documentElement.style.setProperty("--font-color","#000000");
		document.documentElement.style.setProperty("--bg-c","0");
		document.documentElement.style.setProperty("--a-color","#0000ff");
	}
	else {					// dark
		document.documentElement.style.setProperty("--bg-color","#3c3c3c");
		document.documentElement.style.setProperty("--theme-color","rgba( 3, 3, 3, 0.75 )");
		document.documentElement.style.setProperty("--theme-card-hover","#222222");
		document.documentElement.style.setProperty("--theme-card-a","5px 5px 10px #3b3b3b,-5px -5px 10px #4f4f4f");
		document.documentElement.style.setProperty("--theme-card-s"," inset 5px 5px 10px #3b3b3b, inset -5px -5px 10px #4f4f4f");
		document.documentElement.style.setProperty("--theme-card-b","rgba( 0, 0, 0, 0.18 )");
		document.documentElement.style.setProperty("--font-color","#aaaaaa");
		document.documentElement.style.setProperty("--bg-c","0.6");
		document.documentElement.style.setProperty("--a-color","#8888ff");
	}
//	console.log('enable dark mode:',mode);
}

var mode;
var date = new Date();  
var h = date.getHours();          // 获取小时
if (h <= 6 || h >= 18) {
//	console.log('It is night now!');
	mode == true;
	enable_darkmode();
}
