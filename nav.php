<?php
$pages = ["index.php" => "Home", "about.php" => "About", "features.php" => "Features", "help.php" => "Tutorials &amp; Help", "purchase.php" => "Get Auxionr"];
function makeNav($selected)
{
	global $pages;
	echo "<nav><ul class=\"nav nav-tabs\">";
	foreach (array_keys($pages) as $file)
	{
		echo "\t<li";
		if ($selected == $file)
		{
			echo " class=\"active\"";
		}
		echo "><a href=\"" . $file . "\">" . $pages[$file] . "</a></li>\n";
	}
	echo "</ul></nav>";
}?>