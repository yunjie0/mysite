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

/* the location of your website in your server (php) */
$_BASE_ = '';

/* the location of your website in your server (html) */
define("_HTML_BASE_", "");

/* the name of your website*/
define("_SITE_NAME_", "mysite");

/* your name */
define("_MASTER_NAME_", "MySite");
define("_SITE_NAME_H2_", "mysite");

/* the name of your home */
define("_HOME_NAME_", "My Home");

/* your avatar */
define("_AVATAR_", _HTML_BASE_."/res/joseph.jpg");

/* your blog */
define("_BLOG_", "");

/* your document site */
define("_DOCS_", "");

/* your site which is used to play or relax */
define("_RELAX_", "");

/* your comment system */
/* 
   supported:
   waline
   
   format: '_COMMENT_xxx', like '_COMMENT_waline'
 */
define("_COMMENT_", "_COMMENT_xxx");

/* do not change */
define("_PAGE_HEADER_", $_BASE_."/res/web/header.php");
define("_PAGE_FOOTER_", $_BASE_."/res/web/footer.php");
define("_PAGE_BG_", $_BASE_."/res/web/bg.php");
define("_COMMENT_xxx", "");
define("_COMMENT_waline", $_BASE_."/res/web/waline.php");
?>
