<?php


    namespace sys\Nucleo;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Messages
 *
 * @author felipe.almeida
 */
class Messages {
    private $text;
    private $css;
    
    

    
    
        public function rendertext() :string {
            
            return $this->text;
            
        }
        
        private function filter(string $message) :string {
            
            return filter_var($message,FILTER_DEFAULT);
            
        }
        
        
        public function inserttext(string $message): Messages {
            
            $this->text = $this->filter($message);
            return $this;
            
        }
        

}
