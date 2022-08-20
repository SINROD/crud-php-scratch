<?php

include_once('../includes/conexion.php');

if(isset($_POST['objeto'])){

    $objeto = $_POST['objeto'];



    if(empty($objeto)){
        // echo 2;
        http_response_code( 406 ); 
        echo json_encode( [ 'msg' => "ERROR" ] );
    }else{

        $params = array(':objeto' => $objeto, ':user_id' => 1, ':estado' => 1);



        $result = $pdo->prepare('INSERT INTO interior (objeto, user_id, estado) VALUES (:objeto, :user_id, :estado)');
    

        $result->execute($params);
    
        http_response_code( 200 );
      echo json_encode( [ 'msg' => 'Registro Exitoso!!' ] );
 
        // echo "success";
    }


}else{
    // echo 1;
    http_response_code( 406 ); 
        echo json_encode( [ 'msg' => "ERROR" ] );
}