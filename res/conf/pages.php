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

/*****
Config File
*****/

/* in this website */
$local_pages = array(/* v0.0.2 */
	"/home",	/* home */
	"/goto",		/* goto */
"___END");

$local_pages_img = array(/* v0.0.2 */
	_HTML_RES_.'/icon/site/home.png',
	_HTML_RES_.'/icon/site/goto.png'
);

$local_pages_title = array(/* v0.0.2 */
	_HOME_NAME_,
	'去往'
);

/* not in the website */
$other_pages = array(/* v0.0.2 */
	_BLOG_,		/* blog */
//	_DOCS_,		/* document site */
"___END");

$other_pages_img = array(/* v0.0.2 */
	_HTML_RES_.'/icon/site/blog.png'
);

$other_pages_title = array(/* v0.0.2 */
	'博客'
);

$home_pages_local = array(/* v0.0.2 */
	"search","time","projects","videos",
"___END");

$home_pages_local_title = array(/* v0.0.2 */
	"搜索","时间","项目","视频"
);

$home_pages_local_intro = array(/* v0.0.2 */
	"search","time","projects","videos"
);

$home_pages_other = array(/* v0.0.2 */
	_DOCS_,_RELAX_,
"___END");

$home_pages_other_title = array(/* v0.0.2 */
	"文档","休闲"
);

$home_pages_other_intro = array(/* v0.0.2 */
	"docs","relax"
);

?>
