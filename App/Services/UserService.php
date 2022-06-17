<?php
namespace App\Services;

class UserService{

    
    public function createUser($data){
        $result = addUser($data);
        return $result;
    }
   
        
}