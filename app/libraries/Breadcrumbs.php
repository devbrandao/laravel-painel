<?php
/**
 * @author Edjo Brandão <edjobrandao@gmail.com>
 */
class Breadcrumbs 
{
	/**
	 * @var array
	 */
	private static $items = [];

	/**
	 * Retorna o breadcrumb
	 * @return string
	 */
	public static function get()
	{
		if(empty(self::$items) || !is_array(self::$items))
			return NULL;

		$struct = "<ul class=\"breadcrumb\">";
	        
	    foreach (self::$items as $url => $label) 
	   	{
	    	if(trim($url) == "#" || trim($url) == "")
	    		$struct .= "<li class=\"active\">{$label} </li>";
	    	else
	    		$struct .= "<li><a href=\"{$url}\">{$label} </a></li>";
	    }

	    $struct .= "</ul>";

	    return $struct;
	}

	/**
	 * Seta os itens do breadcrumb
	 * @param array
	 */
	public static function set(Array $data)
	{
		self::$items = $data;
	}
}