<?php

namespace sys\Controllers\Admin;


class AdminDashboard extends AdminController {

    public function  dashboard():void {
        
        
        echo $this->template->temp_render('dashboard.html', []);
        
    }
    
    
    
    
    
}
