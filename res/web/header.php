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

<div class=<?php echo $styl_header;?>>
    <a href="<?php echo _HTML_BASE_;?>/" target="_parent" rel="noopener">
        <img style="border-radius:200px;zoom:20%;" src="<?php echo _AVATAR_;?>">
        <b style="font-size:25px;color:<?php 
				if ($_ENABLE_DARK_MODE_ == true) echo '#dddddd';
				else echo '#000000';?>;"><?php echo _MASTER_NAME_;?></b>
    </a>
    <a href="<?php echo _HTML_BASE_;?>/home" target="_parent" rel="noopener">
        <div class=<?php echo $styl_header_card;?>>
            <p style="font-size:20px;">小屋</p>
        </div>
    </a>
    <a href="<?php echo _BLOG_;?>" target="_parent" rel="noopener">
        <div class=<?php echo $styl_header_card;?>>
            <p style="font-size:20px;">博客</p>
        </div>
    </a>
    <a href="<?php echo _HTML_BASE_;?>/goto/" target="_parent" rel="noopener">
        <div class=<?php echo $styl_header_card;?>>
            <p style="font-size:20px;">去往</p>
        </div>
    </a>
<?php
if (_TRAVELLING_ENABLE_ == true){
	echo '
    <a href="https://travellings.link" target="_blank" rel="noopener">
        <div class='.$styl_header_card.'>
            <p style="font-size:20px;">🚇开往</p>
        </div>
    </a>';
}
?>
</div>
