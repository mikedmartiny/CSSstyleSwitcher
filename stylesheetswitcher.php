<?php 
function style_switch(){
	//get the name of the page without the .php extensions
	$path = pathinfo($_SERVER['REQUEST_URI']);
	$pageName = $path['filename'];
	
	//pages that use different style sheets
	$stylesheet = array( "registration", "class-print", "stylesheetswitcher", "search", "index-items");
	
	//check if the page is in the array	
	if(in_array($pageName, $stylesheet)){
		
	  switch($pageName) {
			case 'registration':
				$style = '/css/stylesheetsmall.css';
				break;
			case 'class-print':
				$style = '/css/stylesheetbig.css';
				break;
			case 'stylesheetswitcher':
				$style = '/css/stylesheet.css';
				break;
			case 'search':
				  $style = '/css/search.css';
				  break;
			case 'index-items':
				  $style = '/css/index.css';
				  break;
	  }
	  
	} else {
		$style = "/css/default.css";
	}
	
	return $style;
}

echo style_switch();
?>