<?php
	$dir = "Images/";
	$src = "";
	$i = 0;
	function endsWith($feed, $srch)
	{
    	$length = strlen($srch);
    	return $length === 0 || (substr($feed, -$length) === $srch);
	}
	
	if(is_dir($dir))
	{
		if($dh = opendir($dir))
		{
			while(($file = readdir($dh)) !== false)
			{
				if(!is_dir($file) && (endsWith($file, ".jpg") || endsWith($file, ".jpeg") || endsWith($file, ".png")))
				{
					$i++;
					switch ($i) {
						case '1':
							$src .= '[{"src": "Images/'.$file.'", "desc1": "", "desc2": "", "desc3": "", "line": "Three people reading and taking notes at an old wooden table outdors"},';
							break;
						
						case '2':
							$src .= '{"src": "Images/'.$file.'", "desc1": "", "desc2": "", "desc3": "", "line": "A boy  holding a book with a surprised expression on his face"},';
							break;
						case '3':
							$src .= '{"src": "Images/'.$file.'", "desc1": "Books", "desc2": "Knee", "desc3": "Legs", "line": ""},';
							break;
						case '4':
							$src .= '{"src": "Images/'.$file.'", "desc1": "Woman", "desc2": "Female", "desc3": "Hat", "line": ""},';
							break;
						case '5':
							$src .= '{"src": "Images/'.$file.'", "desc1": "Books", "desc2": "Hand", "desc3": "Stack", "line": ""},';
							break;
						case '6':
							$src .= '{"src": "Images/'.$file.'", "desc1": "Tea", "desc2": "Read", "desc3": "Book", "line": ""}]';
							break;
					}
				}
			}
			closedir($dh);
		}
	}
	echo $src;
?>