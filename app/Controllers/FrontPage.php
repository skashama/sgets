<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function get_details()
    {
        $fieldText = get_field('page_title'); 
        
        return  $fieldText;
    }
}
