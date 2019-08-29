<?php
	$id = $_REQUEST['id'];
	$user_id = $_REQUEST['user_id'];
	echo "$id";
	echo "$user_id";

	$sql = "insert into eventos_participantes(evento_id, part_id) values('{$id},' '{$user_id}');";
?>