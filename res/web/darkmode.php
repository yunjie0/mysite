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
	/* enable dark mode or not */
	$_ENABLE_DARK_MODE_ = false;
	$dark='';
	if ($_ENABLE_DARK_MODE_ == true) {
		$dark='_dark';
		echo '<style>a{
	color: #6666ee ;		
}</style>'; 	
	}
	else {
		echo '<style>a{
	color: #0000ff ;
}</style>';
	}
		
	$styl_container='container'.$dark;
	$styl_header='header'.$dark;
	$styl_header_card='header_card'.$dark;
	$styl_footer='footer'.$dark;
	$styl_button_small='button_small'.$dark;
	$styl_button_big='button_big'.$dark;
	$styl_button_huge='button_huge'.$dark;
?>
