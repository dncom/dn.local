<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Registration extends Controller_Common {
 

// Страница о сайте
    public function action_step1()
    {
        
        $content = View::factory('/registration/step1');
        $this->template->content = $content;
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/registration/step2");
        }
    }
    
    public function action_step2()
    {
      $content = View::factory('/registration/step2');
        $this->template->content = $content;  
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/registration/step3");
        }
    }
    
     public function action_step3()
    {
      $content = View::factory('/registration/step3');
        $this->template->content = $content;  
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/registration/step4");
        }
    }
    
     public function action_step4()
    {
       $content = View::factory('/registration/step4');
        $this->template->content = $content; 
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/registration/step5");
        }
    }
    
    public function action_step5()
    {
       $content = View::factory('/registration/step5');
        $this->template->content = $content; 
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/registration/step6");
        }
    }
    
    public function action_step6()
    {
       $content = View::factory('/registration/succes');
        $this->template->content = $content; 
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/user/".$id); //Редирект на страницу пользователя
        }
    }

}