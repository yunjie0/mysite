<?php
/***
    The Source Code of mysinstall
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

function des($fp,$a,$b) {
	fwrite($fp, 'define("'.$a.'","'.$b.'");
');
}

function de($fp,$a,$b) {
	fwrite($fp, 'define("'.$a.'",'.$b.');
');
}

function arr($fp,$a,$p) {
	fwrite($fp, '$'.$a.'=array("');
	for ($i=0;$i<count($p);$i++) {
		fwrite($fp, $p[$i]);
		if (count($p)-$i <= 1) {
			fwrite($fp, ');');
		}
		else fwrite($fp, ',');
	}
}

function arrd($fp,$a,$p,$t,$type) {
	fwrite($fp, '$'.$a.'=[
');
	for ($i=0;$i<count($p);$i++) {
		fwrite($fp, $i.'=>[
');
		for ($j=0;$j<count($t);$j++) {
			fwrite($fp, '"'.$t[$j].'"=>');
			if ($type[$j] == 'str') fwrite($fp, '"'.$p[$i][$t[$j]].'",
');
		}
		fwrite($fp, '],
');
	}
	fwrite($fp, '];
');
}

function in($fp,$str) {
	fwrite($fp, 'include('.$str.');
');
}

function ins($fp,$str) {
	fwrite($fp, 'include("'.$str.'");
');
}

function s($fp,$str) {
	fwrite($fp, 'echo \''.$str.'\';
');
}


?>