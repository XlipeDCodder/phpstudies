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
    
    
    public function countPosts() :string {
        $query = "SELECT COUNT(DISTINCT id) as quantidade FROM `posts` ";
        $stmt = Connector::getInstance()->query($query);
        $result = strval($stmt->fetch()->quantidade);
        
        return $result;
    }
    
        public function countOffPosts() :string {
        $query = "SELECT COUNT(DISTINCT id) as offposts FROM `posts` WHERE status=0 ";
        $stmt = Connector::getInstance()->query($query);
        $result = strval($stmt->fetch()->offposts);
        
        return $result;
    }
    
    
        public function countCat() :string {
        $query = "SELECT COUNT(DISTINCT id) as qtdcat FROM `categorys`";
        $stmt = Connector::getInstance()->query($query);
        $result = strval($stmt->fetch()->qtdcat);
        
        return $result;
    }
    
    
    
    
            public function list(int $id = null) :array {
        
        
        
        
        $query = "SELECT * FROM `categorys`"
                . "ORDER BY id DESC";
        
        $stmt = Connector::getInstance()->query($query);
        
        $result = $stmt->fetchAll();
        return $result;
    }
    //DELETE FROM TABLE WHERE ID IN (ARRAY)
    public function storagepost(array $data) :void {
        $query = "INSERT INTO posts (category_id, title, text, status) VALUES (?, ?, ?, ?) ";
        $stmt = Connector::getInstance()->prepare($query);
        $stmt->execute([ $data['category_id'], $data['title'], $data['text'], $data['status'] ]);
    }
    
}
