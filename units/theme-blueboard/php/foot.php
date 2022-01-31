<?php
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

function foot_container() {
	global $othersite;
	
	EasyHtml::p_start(NULL,NULL);
		echo '(C) 2021-2022 WCC</p><p>MyS ❤ Blueboard';
	EasyHtml::p_end();
	
	EasyHtml::a_start(base.'/','_blank');
		echo '主页';
	EasyHtml::a_end();
	echo ' | ';
	EasyHtml::a_start(base.'/home','_blank');
		echo HOME_NAME;
	EasyHtml::a_end();
	
	for ($i=0; $i<count($othersite); $i++) {echo ' | ';
		EasyHtml::a_start($othersite[$i]['link'],'_blank');
			echo $othersite[$i]['name'];
		EasyHtml::a_end();
	}
	
	EasyHtml::p_start(NULL,NULL);
		echo '本站已勉强存活了<script>
				var urodz = new Date("'.SITE_BIRTHDAY.'");
				var now = new Date();
				var ile = now.getTime() - urodz.getTime();
				var dni = Math.floor(ile / (1000 * 60 * 60 * 24));
				document.write( + dni)
			</script>天';
	EasyHtml::p_end();
}

function foot_init() {
	side_init();
	
	EasyHtml::div_start(CON_FOOT,NULL,NULL);
		foot_container();
	EasyHtml::div_end();
}

?>
