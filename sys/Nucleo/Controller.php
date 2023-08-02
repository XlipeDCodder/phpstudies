<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace sys\Nucleo;
use sys\Support\Template;

/**
 * Description of Controller
 *
 * @author felipe.almeida
 */
class Controller {
    
    
    protected Template $template;
    







    public function __construct(string $directories) {
        $this->template = new Template($directories);
        
    }
}
