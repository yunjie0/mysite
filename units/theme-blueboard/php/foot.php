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
	
	echo '<p>(C) 2021-2022 WCC</p><p>MyS ❤ Blueboard</p><a href='.base.'/ target="_blank">主页</a> | <a href='.base.'/home target="_blank">'.HOME_NAME.'</a>';
	for ($i=0; $i<count($othersite); $i++) {
		echo ' | <a href='.$othersite[$i]['link'].' target="_blank">'.$othersite[$i]['name'].'</a>';
	}
	echo '</p><p>本站已勉强存活了<script language = "JavaScript"type = "text/javascript" >var urodz = new Date("'.SITE_BIRTHDAY.'");var now = new Date();var ile = now.getTime() - urodz.getTime();var dni = Math.floor(ile / (1000 * 60 * 60 * 24));document.write( + dni)</script>天</p>';
}

function foot_init() {
	side_init();
	
	echo '<div class="'.CON_FOOT.'">';
	foot_container();
	echo '</div>';
}

?>
