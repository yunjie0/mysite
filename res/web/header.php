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

<div class="header">
    <a href="<?php echo _HTML_BASE_;?>/" target="_parent" rel="noopener">
        <img style="border-radius:200px;zoom:20%;" src="<?php echo _AVATAR_;?>">
        <b style="font-size:25px;color:var(--font-color)"><?php echo _MASTER_NAME_;?></b>
    </a>
<?php
for ($i=0; $local_pages[$i] != "___END"; $i++) {
	echo '<a href='._HTML_BASE_.$local_pages[$i].' target="_self" rel="noopener"><div class="header_card"><p style="font-size:20px;">'.$local_pages_title[$i].'</p></div></a>
';
}
for ($i=0; $other_pages[$i] != "___END"; $i++) {
	echo '<a href='.$other_pages[$i].' target="_self" rel="noopener"><div class="header_card"><p style="font-size:20px;">'.$other_pages_title[$i].'</p></div></a>
';
}
?>
<?php
if (_TRAVELLING_ENABLE_ == true){
	echo '
<a href="https://travellings.link" target="_blank" rel="noopener">
	<div class="header_card">
		<p style="font-size:20px;">🚇开往</p>
	</div>
</a>
';
}
echo '</div>';
include(_PAGE_APLAYER_);
include(_PAGE_SIDE_);
?>
