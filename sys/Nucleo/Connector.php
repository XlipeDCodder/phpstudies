<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace sys\Nucleo;
use PDO;
use PDOException;
/**
 * Description of Connector
 *
 * @author felipe.almeida
 */
class Connector {
    private static $instance;
    
    
    public static function getInstance() :PDO {
        if (empty(self::$instance)){
           
            try{
                
                self :: $instance = new PDO ('mysql:host=localhost;port=3312;dbname=test', 'root', '',[
                   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                   PDO::ATTR_CASE => PDO::CASE_NATURAL 
                ]);
                
                
                
            } catch (PDOException $err){
                
                die("Connection error, closing connection port. ".$err->getMessage());
                
            }
            
            
            
            
            
            
            
        }
        return self::$instance;
    }
    
    
    protected function __construct() {
        
    }
    
    
    
    private function __clone() :void {
        
    }
    
    
    
}
