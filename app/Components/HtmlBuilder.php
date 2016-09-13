<?php

namespace TeachMe\Components;

use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

	
class HtmlBuilder extends CollectiveHtmlBuilder{

	public function menu($items)
	{

	    if ( ! is_array($items))
        {
            $items = config($items, array());
        }
		return view('partials/menu', compact('items'));

	}

    public function classes(array $classes)
    {
        $html = '';

        foreach ($classes as $name => $bool){
            if (is_int($name)){
                $name = $bool;
                $bool = true;
            }
            if ($bool){
                $html .= $name.' ';
            }
        }

        if (! empty($html)){
            return ' class="'.trim($html).'"';
        }
        return '';
    }
}


?>