<?php

class Session{

    public function __construct()
    {
        if(!session_id()){
            session_start();
        }
    }

    public function create($name,$value){
        $_SESSION[$name]=$value;
    }

    public function read($name){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }else{
            return NULL;
        }
    }

    public function update($name,$value){
        $_SESSION[$name]=$value;
    }

    public function delete($name){
        unset($_SESSION[$name]);
    }

    public function destroy(){
        session_destroy();
    }
}