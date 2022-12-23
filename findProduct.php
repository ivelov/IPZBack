<?php
require_once 'env.php';

if(!isset($_POST['keyword'])){
    http_response_code(400);
    exit;
}

$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);
$result = $mysqli->query("SELECT * FROM products WHERE name LIKE '%{$_POST['keyword']}%'");

if($result){
    if(mysqli_num_rows($result) > 0){
        $product = $result->fetch_assoc();
       
        echo json_encode([
            'id' => $product['id'],
            'name' => $product['name'],
            'price' => $product['price'],
            'image' => isset($product['image_link']) ? $product['image_link'] : 'img/home-cat__img.jpg'
        ]);
    }else{
        http_response_code(422);
    }
}else{
    http_response_code(500);
    echo mysqli_error($mysqli);
}

?>