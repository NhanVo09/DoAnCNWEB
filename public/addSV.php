<?php
require_once "../bootstrap.php";
use CT275\Labs\information;
$contact = new information($PDO);
$contacts = $contact->all();
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$contact = new information($PDO);
	$contact->fill($_POST);
	if($contact->validate()){
		$contact->save() && redirect(BASE_URL_PATH);
	}

	$errors = $contact->getValidationErrors();
}
?>