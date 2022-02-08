/***
    The Source Code of WEB CLOCK
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

function padding(num, length) 
{
	for(var len = (num + "").length; len < length; len = num.length) {
		num = "0" + num;            
	}
	return num;
}

setInterval(function()
{   
	var date = new Date();   
	var year = date.getFullYear();    //获取当前年份   
	var mon = date.getMonth()+1;      //获取当前月份   
	var da = date.getDate();          //获取当前日   
	var day = date.getDay();          //获取当前星期几   

	var day_s;
	
	if (day==1)day_s='一';
	else if (day==2)day_s='二';
	else if (day==3)day_s='三';
	else if (day==4)day_s='四';
	else if (day==5)day_s='五';
	else if (day==6)day_s='六';
	else if (day==0)day_s='日';

	var h = date.getHours();          //获取小时   
	var m = date.getMinutes();        //获取分钟
	var s = date.getSeconds();        //获取秒
	var hist = '';
	var str = subtitle();
	var d = document.getElementById('time_card');    
	d.innerHTML='<div align="center">'+
		'<font size=160px>'+
		padding(h,2)+':'+padding(m,2)+'</font><br><font>'
		+year+'年'+mon+'月'+da+'日 星期'+day_s+'<br>'+str+'<br></div>';  

	var content = document.getElementById('div1');
	var width = content.offsetWidth * 0.7;
	var bl_j = document.getElementById('bl');    

	bl_j.innerHTML='<aside id="aside" align="left" style="width:' +((60*60*h+60*m)/86400*width)+'px;"></aside>'
	
	var blp_j = document.getElementById('bl_p');    
	blp_j.innerHTML='今日已过去'
		+((60*60*h+60*m+s)/864).toFixed(4)+'%<br>';
},1000)