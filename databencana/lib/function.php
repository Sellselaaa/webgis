<?php

function get_all_post(){
	$sql = "select * from posts order by post_id desc";
	$query = mysql_query($sql) or die ("Error found<br>reason: ".mysql_error());

	return($query);
}

function get_post_by_id($post_id){
	$sql = "select * from posts where post_id='".$post_id."'";
	$query = mysql_query($sql) or die ("Error found<br>reason: ".mysql_error());

	return($query);
}
?>