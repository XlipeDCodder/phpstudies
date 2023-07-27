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
         
         $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
         if(isset($data)){
             (new PostModel())->storagepost($data);
             header('Location: /index.php/admin/posts/list');
             exit;
             
         }
            
        $PostModel = new PostModel();
        $variables = [  'list'  => $PostModel->list()
                     ];
        
            
          echo $this->template->temp_render('posts/form.html', $variables);
        
    }
    
    
    
    
            public function  delete():void {
         
         $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
         if(isset($data)){

             
         }
            
        $PostModel = new PostModel();
         $variables = [  'posts'  => $PostModel->search()
                     ];
            
          echo $this->template->temp_render('posts/listtodel.html', $variables);
        
    }
    
    
}
