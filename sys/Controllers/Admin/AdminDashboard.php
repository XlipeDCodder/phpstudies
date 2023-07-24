<?php

namespace sys\Controllers\Admin;
use sys\Model\PostModel;


class AdminDashboard extends AdminController {

    public function  dashboard():void {
        $PostModel = new PostModel();
        $variables = [  'quantidade' => $PostModel->countPosts(),
                        'posts'  => $PostModel->search()
                     ];

        echo $this->template->temp_render('dashboard.html', $variables);
    }
    
    
    
    
    
}
