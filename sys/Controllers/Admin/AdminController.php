<?php



namespace sys\Controllers\Admin;
use sys\Nucleo\Controller;

 
class AdminController extends Controller {
    public function __construct() {
        parent::__construct('temps/dashboard/views');
        
        $user = false;
        
        if(!$user){
           echo'Faça login com usuário administrativo para acessar essa página!'; 
           
             header('Location: /index.php/admin/login');
             exit;
        }
    }
}
