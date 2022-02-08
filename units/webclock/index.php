<?php
/***
    The Source Code of WEB CLOCK
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
$enable_mys_unit = true;


if (!$enable_mys_unit) {
$dir = './';		// if do not want to use, input './'
$hide_title = false;
$hide_bgcolor = false;
}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Webclock</title>
    <script src="<?php echo $dir;?>js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $dir;?>js/solarterms.js" type="text/javascript"></script>
    <script src="<?php echo $dir;?>js/webclock.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo $dir;?>css/main.css" type="text/css"/>
</head> 
<body>
<?php
if ($hide_bgcolor) 
    echo '<div id="div1">';
else 
    echo '<div class="webclock_maincard" id="div1">';

if (!$hide_title)
    echo '<center><h1>Web Clock</h1></center><hr>';
?>
        <div id="time_card"></div>
        <div id="bl"></div>
        <div id='bl_p'></div>
		<center>
            <iframe style="padding: 0;background-color: #bababa;border-radius: 20px" 
                width=250 height=90
                src="https://i.tianqi.com/?c=code&a=getcode&id=7&num=3&icon=1&py=shinan"
                frameborder="0"></iframe>
		</center>
    </div>
</body>
</html>
