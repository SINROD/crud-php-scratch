<?php

include_once('../includes/conexion.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $params = array(':id' => $id);

    $result = $pdo->prepare('DELETE FROM interior where id = :id');

    $result->execute($params);

    http_response_code( 200 );
      echo json_encode( [ 'msg' => 'Se elimino!!' ] );
    
}