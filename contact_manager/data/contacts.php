<?php
	require("../codebase/connector/grid_connector.php");
	require_once("../codebase/connector/db_pdo.php");
	$DB_USER="root";
	$DB_PASS="";
	
	$DB_HANDLER = new PDO('mysql:host=localhost;dbname=dhtmlx_tutorial', $DB_USER, $DB_PASS);

	$conn = new GridConnector($DB_HANDLER,"PDO");
	$conn->render_table("contacts","contact_id","fname,lname,email");
?>