<?php
namespace sys\Controllers;
use sys\Nucleo\Controller;
use sys\Model\PostModel;
use sys\Model\CatModel;


/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of SiteController
 *
 * @author felipe.almeida
 */
class SiteController extends Controller {
    public function __construct() {
       parent::__construct('temps/site/views'); 
    }
    
    
    
    
     public function home() :void {
        
        $posts =(new PostModel())->search();
    echo $this->template->temp_render('index.html', ['posts'=>$posts,
        
                   'categorys'=>(new CatModel())->search(),
        
        ]);
    }
    
    
    public function index() :void {
        
        $posts =(new PostModel())->search();
    echo $this->template->temp_render('index.html', [
        
          'posts'=>$posts,
            
           'categorys'=>(new CatModel())->search(), 
            
            ]);
    

    
    }
    
    public function sobre() :void {
        echo $this->template->temp_render('sobre.html', ['title'=> 'title test about',
        
                   'categorys'=>(new CatModel())->search(),]);
    }
    
    public function contact() :void {
        echo $this->template->temp_render('contact.html', ['title'=> 'title test about',
        
                   'categorys'=>(new CatModel())->search(),]);
    }
    
    public function post(int $id) :void{
       $post = (new PostModel())->searchById($id);
       echo $this->template->temp_render('post.html', ['post'=>$post]);
    }
    
    
       public function category(int $id) :void{

       $posts = (new CatModel()) ->posts($id);
       echo $this->template->temp_render('category.html', ['posts'=>$posts]);
       

    }
    
    
}
