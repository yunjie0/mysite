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

function head_container() {
	global $othersite;
	
	EasyHtml::a_start(base.'/','_self');
		echo '<img style="border-radius:200px" width=48px height=48px id="img_r" src="'.AVATAR.'">';
	EasyHtml::a_end();
	
	EasyHtml::a_start(base.'/','_self');
		EasyHtml::div_start('head_card',NULL,NULL);
			echo '主页';
		EasyHtml::div_end();
	EasyHtml::a_end();
	
	EasyHtml::a_start(base.'/home','_self');
		EasyHtml::div_start('head_card',NULL,NULL);
			echo HOME_NAME;
		EasyHtml::div_end();
	EasyHtml::a_end();
	
	for ($i=0; $i<count($othersite); $i++) {
		EasyHtml::a_start($othersite[$i]['link'],'_self');
			EasyHtml::div_start('head_card',NULL,NULL);
				echo $othersite[$i]['name'];
			EasyHtml::div_end();
		EasyHtml::a_end();
	}
}

function back_init() {
	EasyHtml::div_start('back',NULL,NULL);
	EasyHtml::div_end();
}

function head_init() {
	back_init();
	EasyHtml::div_start(CON_HEAD,NULL,NULL);
		head_container();
	EasyHtml::div_end();
	
	otherdiv_head();
}

?>
