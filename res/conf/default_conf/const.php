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

/* the location of your website in your server (php) *//* v0.0.1 */
$_BASE_ = 'C:/hexo/joseph/mysite';

/* the location of your website in your server (html) *//* v0.0.1 */
define("_HTML_BASE_", "/t/mysite");

/* the name of your website*//* v0.0.1 */
define("_SITE_NAME_", "mysite");

/* your name *//* v0.0.1 */
define("_MASTER_NAME_", "MySite");
define("_SITE_NAME_H2_", "mysite");

/* the name of your home *//* v0.0.1 */
define("_HOME_NAME_", "小屋");

/* your avatar *//* v0.0.1 */
define("_AVATAR_", _HTML_BASE_."/res/avatar.png");

/* your blog *//* v0.0.1 */
define("_BLOG_", "");

/* your document site *//* v0.0.1 */
define("_DOCS_", "");

/* your site which is used to play or relax *//* v0.0.1 */
define("_RELAX_", "");

/* support background or not (true or false) *//* v0.0.1 */
define("_SUPPORT_BG_", false);

/* main color *//* v0.0.1 */
define("_MAIN_COLOR_", "#95afff");			// light
define("_MAIN_COLOR_DARK_", "#051f7f");		// dark

/* your site's birthday *//* v0.0.2 */
define("_SITE_BIRTHDAY_", "07/31/2021");

/* enable aplayer *//* v0.0.2 */
define("_ENABLE_APLAYER_", true);

// ------------------------------------------------------------

/* Files and functions. Do not change unless you know what you will do! *//* v0.0.2 */
define("_RES_", $_BASE_."/res");
define("_HTML_RES_", _HTML_BASE_."/res");
define("_INCLUDE_", _RES_."/conf/include.php");
define("_PAGE_HEADER_", _RES_."/web/header.php");
define("_PAGE_FOOTER_", _RES_."/web/footer.php");
define("_PAGE_BG_", _RES_."/web/bg.php");
define("_PAGE_APLAYER_", _RES_."/web/aplayer.php");
define("_DARKMODE_", _RES_."/web/darkmode.php");
define("_COMMENT_xxx", _RES_."/web/comment_none.php");
define("_PAGE_SIDE_", _RES_."/web/side.php");
define("_COMMENT_waline", _RES_."/web/waline.php");

// ------------------------------------------------------------

/* your comment system *//* v0.0.1 */
/* 
   supported:
   waline
   
   format: '_COMMENT_xxx', like '_COMMENT_waline'
 */
define("_COMMENT_", _COMMENT_xxx);

/* enable travelling or not *//* v0.0.2 */
define("_TRAVELLING_ENABLE_", true);

?>
