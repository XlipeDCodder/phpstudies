<?php



namespace sys\Controllers\Admin;
use sys\Nucleo\Controller;

 
class AdminLogin extends Controller {
    public function __construct() {
        parent::__construct('temps/dashboard/views');
        
   
        }
        
        public function login(): void{
            echo $this->template->temp_render('adminlogin.html',[]); 
        }
        
        public function admregister(): void{
            echo $this->template->temp_render('adminregister.html',[]); 
        }   
    }

