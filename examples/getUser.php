<?php

include_once("../src/SteamAPI.php");

$steam = new SteamAPI("STEAMKEY");


$steam->getUser("76561198003098616");

echo "<img src='$steam->avatarmedium'><br>";
echo "Username: <b>" . $steam->personaname . "</b><br>";
echo "Real Name: <b>" . $steam->realname . "</b><br>";
echo "Country: <b>" . $steam->loccountrycode . "</b><br><br>";


$steam->getUser("76561197995483913");

echo "<img src='$steam->avatarmedium'><br>";
echo "Username: <b>" . $steam->personaname . "</b><br>";
echo "Real Name: <b>" . $steam->realname . "</b><br>";
echo "Country: <b>" . $steam->loccountrycode . "</b><br>";
?>