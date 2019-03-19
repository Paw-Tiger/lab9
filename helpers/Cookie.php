<?php

class Cookie{

    public function create($name,$value,$expire,$domain = '/',$security=false){
        setcookie($name,$value,$expire,$domain,$security);
    }

    public function read($name){
        if(isset($_COOKIE[$name])){
            return $_COOKIE[$name];
        }else{
            return null;
        }
    }

    public function update($name,$value,$expire){
        setcookie($name,$value,$expire);
    }

    public function delete($name){
        setcookie($name,'',time()-3600);
    }
}