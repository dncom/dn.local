
<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Wall extends Controller {
 
    // Главная страница
    public function action_index()
    {
        $id = $this->request->param('id');
        
        $content = View::factory('/wall')
                ->bind('posts', $posts);
         
      
       
        
        
         if($_POST)
        {
 
 $post = ORM::factory('post');
$post->post = Arr::get($_POST, 'post');
$post->id = $id;
$post->save();

        }
          $posts = ORM::factory('post')
                ->where('id', '=', $id)
                ->find_all()
                ->as_array(); 
          
         
       $this->response->body($content);
      
    }
}

