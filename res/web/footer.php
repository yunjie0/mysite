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
<center><div class=<?php echo $styl_footer;?>>
    <p>(C) 2021-2022 Joseph Z.</p>
    <p><?php
    for ($i=0; $links[$i] != '___END'; $i++) {
		if ($links[$i] != 'no')
			echo '<a href='.$links[$i].' target="_blank" rel="noopener"><img id="img_r" src='.$link_logos[$i].' height=20 width=20></a>';
	}
	echo '</p>
    <p><a href='._HTML_BASE_.'/ target="_blank">主页</a> | <a href='._HTML_BASE_.'/home/ target="_blank">小屋</a> | <a href='._BLOG_.' target="_blank">博客</a></p>
    <p><a href="'._HTML_BASE_.'/goto/" target="_blank">去往</a></p>
    <p>本站已勉强存活了<script language = "JavaScript"type = "text/javascript" >var urodz = new Date("'._SITE_BIRTHDAY_.'");var now = new Date();var ile = now.getTime() - urodz.getTime();var dni = Math.floor(ile / (1000 * 60 * 60 * 24));document.write( + dni)</script>天</p>';
	?>
</div></center>