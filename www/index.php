<?php

$db = new mysqli("db", "db", "db", "db");

if ($db->connect_error) {
	echo "db connection failed";
	die;
}

echo "connected";