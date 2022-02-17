<?php
require_once("../model/friend.php");
require_once("../model/dataAccess.php");

session_start();

$results = $_SESSION["myinvites"];

require_once("../view/invite_view.php");
?>