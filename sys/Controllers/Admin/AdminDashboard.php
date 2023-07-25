<?php

namespace sys\Controllers\Admin;
use sys\Model\PostModel;
use sys\Model\CatModel;


class AdminDashboard extends AdminController {

    public function  dashboard():void {
        $PostModel = new PostModel();
        $variables = [  'quantidade' => $PostModel->countPosts(),
                        'posts'  => $PostModel->search(),
                        'offposts' => $PostModel->countOffPosts(),
                        'qtdcat' => $PostModel->countCat()
                     ];

        
        
        echo $this->template->temp_render('dashboard.html', $variables);
    }
    


    
}
