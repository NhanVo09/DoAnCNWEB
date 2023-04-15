<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=doancnweb', 'root', 'k8E8f3@HU5');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	$error_message = 'Không thể kết nối đến CSDL';
	$reason = $e->getMessage();

	exit();
}