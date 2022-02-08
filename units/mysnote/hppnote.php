<?php
/***
    The Source Code of mysnote
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/HexoPlusPlus/HexoPlusPlus@1.2.0/talk.css" /> 
<script src="https://cdn.jsdelivr.net/gh/HexoPlusPlus/HexoPlusPlus@1.2.0/talk_user.js"></script>
<!-- create the container of Hexo++ Talk -->
<div id="hpp_talk"></div>

<script>
new hpp_talk({
    id: "hpp_talk",      // container ID
    domain: "<?php echo $mysnote[0]['hpptalk'][0]['domain']?>",
    limit: 2,
    start: 0,
    themecss: "<?php echo $mysnote[0]['hpptalk'][1]['theme']?>"
});
</script>
