<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Login extends Controller_Common {
 
    // Главная страница
    public function action_index()
    
    { 
        /* if ($Logged==true)
        {
           HTTP::redirect(URL::site()); 
        }
        else */
            
        $content = View::factory('/login');
        $this->template->content = $content;
    }	
 
}

