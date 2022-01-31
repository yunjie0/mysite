<?php
/***
    The Source Code of mbase
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
class EasyHtml
{
	// EasyHtml::div_start
	// arg1: class=''
	// arg2: id=''
	// arg3: align=''
	// If have not, use NULL.
	public static function div_start($d_class,$d_id,$d_align)
	{
		echo '<div';
		if ($d_class != NULL) {
			echo ' class='.$d_class;
		}
		if ($d_id != NULL) {
			echo ' id='.$d_id;
		}
		if ($d_align != NULL ) {
			echo ' align='.$d_align;
		}
		echo '>';
	}
	
	// EasyHtml::p_start
	// arg1: class=''
	// arg2: id=''
	// If have not, use NULL.
	public static function p_start($d_class,$d_id)
	{
		echo '<p';
		if ($d_class != NULL) {
			echo ' class='.$d_class;
		}
		if ($d_id != NULL) {
			echo ' id='.$d_id;
		}
		echo '>';
	}
	
	// EasyHtml::a_start
	// arg1: href=''
	// arg2: target=''
	// If have not, use NULL.
	public static function a_start($a_href,$a_target)
	{
		echo '<a';
		if ($a_href != NULL) {
			echo ' href='.$a_href;
		}
		if ($a_target != NULL) {
			echo ' target='.$a_target;
		}
		echo '>';
	}
	
	// EasyHtml::div_end
	public static function div_end()
	{
		echo '</div>';
	}
	
	// EasyHtml::p_end
	public static function p_end()
	{
		echo '</p>';
	}
	// EasyHtml::a_end
	public static function a_end()
	{
		echo '</a>';
	}
}

?>
