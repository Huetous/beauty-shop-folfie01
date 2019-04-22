<?php
class View
{
    //public $template_view; // здесь можно указать общий вид по умолчанию.
    function generate($content_view, $template_view, $data = null)
    {
        if(is_array($data)) extract($data);
        include 'app/views/'.$template_view;
    }
}
