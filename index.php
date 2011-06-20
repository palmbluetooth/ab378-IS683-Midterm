<?php

	$main = array('title' => 'My Article Title', 'body' => 'lorem ipsum');
	$attributes = array("class" => "article");
    art($main);

    function art($main){
	foreach($main as $key => $content) {
	
	switch ($key) {
	case "title":
		$tag = 'h1';
		$attributes = array("class" => "title");
	break;
	case "body":
		$tag = 'p';
		$attributes = array("class" => "content");
	break;
	}

    echo tags($tag, $attributes, $content);
	}}

     function tags($tag, $attributes, $content){
		try{
			if(!is_array($attributes)){
				throw new Exception('Error! Not an Array!', 345);
			}
		$output = '<' . $tag;
		foreach ($attributes as $key=>$value) {
		if(isset($value)){
			$output .=  ' ' . $key . '="' . $value . '"';
		}}
	$output .= '>' . $content .  '</' . $tag . '>';
	return $output; 
		}
	catch(Exception $e){

    echo $e->getMessage(). $e->getCode();
		}}

                

?>
