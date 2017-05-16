<?php
function getRows($sql) {
	$rs = execute($sql);

	$rows = [];

	while ( $row = mysqli_fetch_assoc($rs) ) {
		$rows[] = $row;
	}

	return $rows;
}

function getRow($sql) {
	$row = null;

	$rows = getRows($sql);

	if ( isset($rows[0]) ) {
		$row = $rows[0];
	}

	return $row;
}

function execute($sql) {
	global $dbLink;

	return mysqli_query($dbLink, $sql);
}

function getLastId() {
	global $dbLink;

	return mysqli_insert_id($dbLink);
}

function jsAlert($msg) {
	echo "<script>";
	echo "alert('{$msg}')";
	echo "</script>";
}

function jsMove($link) {
	echo "<script>";
	echo "location.replace('{$link}')";
	echo "</script>";
	exit;
}
