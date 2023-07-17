<?php

namespace sys\Model;
use sys\Nucleo\Connector;

/**
 * Description of PostModel
 *
 * @author felipe.almeida
 */
class PostModel {
    public function search(int $id = null) :array {
        
        
        
        
        $query = "SELECT * FROM `posts`";
        
        $stmt = Connector::getInstance()->query($query);
        
        $result = $stmt->fetchAll();
        


        return $result;
    }
    
    
    public function searchById(int $id) :bool|object {
        
        
        $query = "SELECT * FROM `posts` WHERE id = {$id}";
        
        $stmt = Connector::getInstance()->query($query);
        
        $result = $stmt->fetch();
        


        return $result;
    }



    public function searchf(string $words) :array {
        
        
        
        
        $query = "SELECT * FROM `posts` WHERE title LIKE '%{$words}%'";
        
        $stmt = Connector::getInstance()->query($query);
        
        $result = $stmt->fetchAll();
        


        return $result;
    }
}
