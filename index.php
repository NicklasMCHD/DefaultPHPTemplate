<?php
ob_start();
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'includes/functions.php';

$pages = array(
"home",
);

$page = isset($_GET['page']) ? trim($_GET['page']) : "home";

if (!in_array($page, $pages))
	$page = "404";

require_once 'includes/header.php';
include 'pages/'.$page.'.php';
require_once 'includes/footer.php';
?>
