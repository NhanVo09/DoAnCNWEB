<?php
function is_administrator($username = 'admin') {
	return (isset($_SESSION['username']) && ($_SESSION['username'] === $username));
}