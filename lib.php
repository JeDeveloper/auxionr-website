<?php
include_once("helptopic.php");
$HelpData;
function start()
{
	$XML = simplexml_load_file("helpdata.xml");
	global $HelpData;
	$HelpData = array();	
	foreach ($XML->children() as $child)
	{
		$dat = new HelpTopic($child);
		$HelpData[$dat->getKey()] = $dat;
	}
}

function getHelpData($key)
{
	global $HelpData;
	return $HelpData[$key];
}

function topicExists($key)
{
	global $HelpData;
	return array_key_exists($key, $HelpData);
}

function printHelp($key)
{
	getHelpData($key)->printHelp();
}

function printHelpShort($key)
{
	getHelpData($key)->printHelpShort(128);
}
?>