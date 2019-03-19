<?php
require_once(__DIR__ . '/Session.php');

$session = new Session();

foreach ($_GET as $key => $value) {
    if ($session->read($key)) {
        $session->update($key, $value);
    }else{
        $session->create($key,$value);
    }
}


//var_dump($_GET,$_SESSION);

header('Location: /?page=view');
//header('Location: /lab9/?page=view');