<?php

namespace sys\Controllers\Admin;
use sys\Model\PostModel;
use sys\Model\CatModel;

class AdminPosts extends AdminController {

    public function  list():void {
        $PostModel = new PostModel();
        $variables = [  'posts'  => $PostModel->search()
                     ];
        
        echo $this->template->temp_render('posts/list.html', $variables);
    }
    
    
        public function  register():void {
         
        $PostModel = new PostModel();
        $variables = [  'list'  => $PostModel->list()
                     ];
        
            
          echo $this->template->temp_render('posts/form.html', $variables);
        
    }
    
    
}
