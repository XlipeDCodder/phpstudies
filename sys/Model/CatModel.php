<?php

namespace sys\Model;
use sys\Nucleo\Connector;

/**
 * Description of CatModel
 *
 * @author felipe.almeida
 */
class CatModel {
    
        public function search(int $id = null) :array {
        
        
        
        
        $query = "SELECT * FROM `categorys`"
                . "ORDER BY id DESC";
        
        $stmt = Connector::getInstance()->query($query);
        
        $result = $stmt->fetchAll();
        


        return $result;
    }
    
    
    
    
       public function searchById(int $id) :bool|object {
        
        
        $query = "SELECT * FROM `categorys` WHERE id = {$id}";
        
        $stmt = Connector::getInstance()->query($query);
        
        $result = $stmt->fetch();
        


        return $result;
    
}


        public function posts(int $id = null) :array {
        
        
        
        
        $query = "SELECT * FROM `posts` WHERE category_id = {$id}  ORDER BY id ";
                
        
        $stmt = Connector::getInstance()->query($query);
        
        $result = $stmt->fetchAll();
        


        return $result;
    }



    
}
