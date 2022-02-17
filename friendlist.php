<?php
require_once("../model/friend.php");
require_once("../model/dataAccess.php");

session_start();

// if session doesn't exist, set it up to be an empty array
if (!isset($_SESSION["myinvites"]))
{
  $_SESSION["myinvites"] = [];
}

// if they clicked the invite button...
if (isset($_REQUEST["inviteId"]))
{
  $inviteId = $_REQUEST["inviteId"];
  $friend = getFriendById($inviteId);
  $_SESSION["myinvites"][] = $friend;
}

// check to see if they've done a search by given name
if (isset($_REQUEST["searchgn"]) && $_REQUEST["searchgn"] != "")
{
    $friends = getFriendsByGivenName($_REQUEST["searchgn"]);
}
// check to see if they've done a search by surname
elseif (isset($_REQUEST["searchsn"]) && $_REQUEST["searchsn"] != "")
{
    $friends = getFriendsBySurname($_REQUEST["searchsn"]);
}
// check to see if they've done a search by grade
elseif (isset($_REQUEST["searchgrade"]) && $_REQUEST["searchgrade"] != "")
{
    $friends = getFriendsByGrade($_REQUEST["searchgrade"]);
}
else
{
    // otherwise, no search done, or search for empty string done, so we want to see everyone
    $friends = getAllFriends();
}

$numberOfInvites = sizeof($_SESSION["myinvites"]);

require_once("../view/friendlist_view.php");
?>