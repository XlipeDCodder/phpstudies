<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace sys\Nucleo;

/**

 */
class Session {
    public function __construct() {
        if(!session_id()){
            session_start();
        }
    }
    
    public function creatsession(string $key, mixed $value): Session {
       $_SESSION[$key] = (is_array($value) ? (object) $value : $value);
       return $this;
    }
    
    public function loadsession() : ?object {
        return (object) $_SESSION;
    }

    public function checksession(string $key) :bool {
        return isset($_SESSION[$key]);
    }    
    
    
    public function wipesession(string $key) : Session {
        unset($_SESSION[$key]);
        return $this;
    }
    

    public function deletesession() : Session {
        session_destroy();
        return $this;
    }    
    
    
    public function __get($atribute) {
        if(!empty($_SESSION[$atribute])){
            return $_SESSION[$atribute]; 
        }
    }
    
    

    
    
}
