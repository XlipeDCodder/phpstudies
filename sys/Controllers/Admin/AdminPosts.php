<?php

namespace sys\Controllers\Admin;
use sys\Model\PostModel;

class AdminPosts extends AdminController {

    public function  list():void {
        $PostModel = new PostModel();
        $variables = [  'posts'  => $PostModel->search()
                     ];
        
        echo $this->template->temp_render('posts/list.html', $variables);
    }
    
    
        public function  register():void {
        
        
          echo $this->template->temp_render('posts/form.html', [
          
        ]);
        
    }
    
    
}
