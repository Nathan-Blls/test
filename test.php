<?php
echo "<p> Fichier Test.php </p>";

include("part1.php");

echo "<p>Toujours test.php</p>";

include("part2.php");

require("part1.php");

echo "<p>Toujours test.php</p>";

include "part2.php";

echo "<p> Fichier test</p>";

require("part1.php");
require_once "part1.php";

include_once("part2.php");
include "part2.php";