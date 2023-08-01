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
    
    
    
    
        public function delete():void {
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $PostModel = new PostModel();

        if(isset($data)){
        $size_arr = count($data['chk']);
        $arr = '(';
        for($i = 0; $i < $size_arr; $i++){
            $arr .= $i==$size_arr-1 ? $data['chk'][$i] : $data['chk'][$i].',';
        }
        $arr .= ')';
        
        $variables = [  'posts'  => $PostModel->deletepost($arr)
                     ];
             header('Location: /index.php/admin/posts/list');
             exit;
        
       }    
        
        
        $variables = [  'posts'  => $PostModel->search()
                     ];
            
        echo $this->template->temp_render('posts/listtodel.html', $variables);
        
    }
    
    public function edit(int $id): void {
       $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($data)){
          (new PostModel())->updatepost($data, $id);   
             header('Location: /index.php/admin/posts/list');
             exit;  
         } 
       
       
       
       
       
       
       $PostModel = new PostModel();
       $variables =[
           'id' => $id,
           'posts' => $PostModel->searchById($id),
           'list' => $PostModel->list(),
                   ];
       
       echo $this->template->temp_render('posts/form.html', $variables);
    }
    
}
