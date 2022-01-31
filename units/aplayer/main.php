<?php
class MysAplayer
{
	public static function init() 
	{
		global $aplayer;
		
		echo '<link rel="stylesheet" href="'.base.$aplayer['path'].'css/APlayer.min.css">';
		
		EasyHtml::div_start(NULL,'aplayer',NULL);
		EasyHtml::div_end();
		
		echo '<script src="'.base.$aplayer['path'].'js/APlayer.min.js"></script>';
		echo '<script src="'.base.$aplayer['path'].$aplayer[0]['config'].'"></script>';
	}
}
?>
