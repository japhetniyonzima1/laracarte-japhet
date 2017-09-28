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
if(! function_exists('set_active_route')){
	function set_active_route($route){
			return Route::is($route) ? 'active' : '';
	}
}