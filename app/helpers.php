<?php 

if(! function_exists('page_title')){
	function page_title($title){
		$value='Laracarte-List of artisans';
		if($title==''){
			return $value;
		}
		else{
			return $title .' | '.$value;
		}
	}
}