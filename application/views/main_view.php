<?php 	function get_content($data)	{		$feature = file_get_contents('application/views/templates/feature_content.html');		foreach($data as $item)		{ 			$photo=Model_Main::get_photo($item['id']);			$tovar = str_replace("##srcimg##", $photo ,$feature);			$tovar = str_replace("##title##", $item['title'],$tovar);			$tovar = str_replace("##href##", baseaddress."/tovar/details/##id##/##titlealias##",$tovar);			$tovar = str_replace("##titlealias##", str_replace(" ","-",$item['title']),$tovar);			$tovar = str_replace("##id##", $item['id'],$tovar);					//##titlealias##			$tovar = str_replace("##price##", "$".$item['price'],$tovar);			echo $tovar;		}	}		function buttons_content()	{		$button = file_get_contents('application/views/templates/button.html');		$button=str_replace("##title##","See all tovar", $button);		$button=str_replace("##href##",baseaddress."/tovar/", $button);		echo $button;	}	function get_title()	{		return "Featured";	}?>