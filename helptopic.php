<?php
class HelpTopic
{
	private $m_Key;
	private $m_Title;
	private $m_Text;
//	private $m_Tags;
	
	function __construct($xmlNode)
	{
		$this->m_Key = (string) $xmlNode->Key;
		$this->m_Title = (string) $xmlNode->Title;
		if (strpos((string) $xmlNode->Text, '<') > -1)
		{
			$this->m_Text = (string) $xmlNode->Text;
		}
		else
		{
			$this->m_Text = "";
			foreach ($xmlNode->Text->children() as $child)
			{
				$this->m_Text .= $child->asXML();
			}
		}
	}
	
	function getKey()
	{
		return $this->m_Key;
	}
	
	function getTitle()
	{
		return $this->m_Title;
	}
	
	function getText()
	{
		return $this->m_Text;
	}
	
	function printHeader()
	{
			echo "\r<h2><a class=\"tutheader\" name=\"" . $this->getKey() . "\">" . $this->getTitle() . "</a></h2>";
	}
	
	function printHelp($withHeader = true)
	{
		if ($withHeader)
			$this->printHeader();
		echo $this->getText();
	}
	
	function printHelpShort($length)
	{
		$this->printHeader();
		$text = $this->getText();
		$text = preg_replace("<<\/?p>>", "", $text);
		$text = preg_replace("<<img.*\/?>>", "", $text);
		if (strlen($text) > $length)
		{
			$text = substr($text, 0, $length);
			$text = trim($text);
			$text = $text . "...";
		}
		$text .= "<br>";
		$text .= "<a href=\"helppage.php?key=" . $this->getKey() ."\">Read More</a>";
		echo $text;
	}
}
?>