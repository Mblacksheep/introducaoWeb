<?php
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    if($request->login == "admin" || $request->password == "admin"){
        return true;
    } else {
        return false;
    }
?>
