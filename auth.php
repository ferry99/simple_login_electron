<?php
if(isset($_POST)){
    // if($_POST['username'])
    //print_r($_POST);
    if($_POST['username'] == 'root' && $_POST['password'] == 'root'){
        $result = array('success'=>'true');
    }else{
        $result = array('success'=>'false');        
    }
    $result = json_encode($result);
    print_r($result);
}

?>