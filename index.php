<?php include('includes/conexion.php'); 

$query = $pdo->query("SELECT id, objeto FROM interior ORDER BY id desc");

?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include_once 'includes/header.php'; ?>

</head>
<body class="has-background-success-dark">

<div class="container pt-5">
    <div class="card card__border">
        <div class="card-content">
            <div class="content">
                <p class="title">
                    Lista de herramientas de mi mochila
                </p>

                <hr>

                <a href="javascript: AbrirAgregar();" class="button is-info mb-5">Agrega un nuevo objeto en tu mochila!!</a>

                <table class="table is-bordered" id="lista-objetos">
                    <thead>
                        <tr>
                            <th>Objeto</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        foreach($query as $objeto){

                        
                    ?>
                        <tr>
                            <td class="objeto--width__80">
                                <p><?= $objeto["objeto"]; ?></p>
                            </td>
                            <td>
                                <a href="" class="button is-warning">Editar</a>
                                <a href="javascript: EliminarObjeto(<?= $objeto["id"]; ?>);" class="button is-danger">X</a>
                            </td>
                        </tr>
                    <?php 
                        }
                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>   
</div>

<?php include_once 'components/agregar.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/scripts.js"></script>

    
</body>
</html>