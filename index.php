<!DOCPYPE HTML>
<H1></H1>
<?php
	$str_browser_language = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
	$str_browser_language = !empty($_GET['language']) ? $_GET['language'] : $str_browser_language;
	switch (substr($str_browser_language, 0,2))
	{
	
		case 'de':
			$str_language = 'de';
			break;
	
			 RG $str_language = 'en';
			break;
		default:
			$str_language = 'en';
	}
    
