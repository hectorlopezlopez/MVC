<?php 
class User{
    private $username="hector";
    private $password="1234";
    public function authenticate($username,$password){
        return $username === $this->username && $password === $this->password;
    }
}
?>