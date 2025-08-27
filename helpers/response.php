<?php

function jsonResponse($data, $status=200){
    http_response_code($status); 
    header("content-type: application/json; charset=urf-8;");
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
}


?>