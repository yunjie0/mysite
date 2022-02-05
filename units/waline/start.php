<script src="//cdn.jsdelivr.net/npm/@waline/client"></script>
<br>
<div id="waline"></div>
<?php
get_url();
?>

<?php
function get_url() {
	global $waline;
	if ($waline[0]['url']==NULL)
		echo '<p align="center"><b>ERROR: </b>Waline url is <b>not</b> defined.</p>';
	else {
		echo "<script>
Waline({
  el: '#waline',
  serverURL: '".$waline[0]['url']."',
});
</script>
";
	}
}
?>
