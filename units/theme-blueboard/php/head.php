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
	echo '<img style="border-radius:200px;zoom:20%;" src="'.AVATAR.'">';
	echo '<a href='.base.'/ target="_self" rel="noopener"><font><div class="head_card">主页</font></div></a>
	<a href='.base.'/home target="_self" rel="noopener"><font><div class="head_card">'.HOME_NAME.'</font></div></a>';
	for ($i=0; $i<count($othersite); $i++) {
		echo '<a href='.$othersite[$i]['link'].' target="_self" rel="noopener"><font><div class="head_card">'.$othersite[$i]['name'].'</font></div></a>';
	}
}

function back_init() {
	echo '<div class="back"></div>';
}

function head_init() {
	back_init();
	echo '<div class="'.CON_HEAD.'">';
	head_container();
	echo '</div>';
}

?>
