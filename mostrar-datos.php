<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "futbol";
//crear conexion
$conexion = new mysqli($servername,$username,$password,$database);
//Verificar la conexion
if ($conexion->connect_error){
    die("conexion fallida: ". $conexion->connect_error);
}
$sql = "SELECT * FROM jugadores";
$resultado = $conexion->query($sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar la base de datos</title>
</head>
<body>
    <style>
        body{
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: aquamarine;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }
        h1{
            text-align: center;
            color: blueviolet;
            margin-bottom: 20px;
        }
        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
        }
        th, td{
            padding: 10px;
            text-align:left;
            border-bottom:1px solid #ddd;
        }
        trinth-child(even){
            background-color: #4A5859;
            color:#fff;
        }
        trinth-child(od){
            background-color: #4A5859;
            color:#fff;
        }
        th{
        background-color: #4A5859;
        color:#fff;
        }
    </style>
    <div class="container">
        <h1>Mostrar daos del jugador de la liga mx</h1>
        <?php
        if($resultado->num_rows >0):?>

        <table>
            <tr>
                <th>Nombre</th>
                <th>Apodo</th>
                <th>Equipo</th>
                <th>Posicion</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Numero</th>
                <th>Edad</th>
                <th>Nacionalidad</th>
                <th>Trofeos</th>
            </tr>
            <?php while ($fila = $resultado->fetch_assoc()):?>
                <tr>
                    <td><?php echo $fila['nombre'];?></td>
                    <td><?php echo $fila['apodo'];?></td>
                    <td><?php echo $fila['equipo'];?></td>
                    <td><?php echo $fila['posicion'];?></td>
                    <td><?php echo $fila['altura'];?></td>
                    <td><?php echo $fila['numero'];?></td>
                    <td><?php echo $fila['edad'];?></td>
                    <td><?php echo $fila['nacionalidad'];?></td>
                    <td><?php echo $fila['trofeos'];?></td>                  

                </tr>
                <?php endwhile; ?>
        </table>
        <?php else: ?>
            <p>No se encontraron jugadores</p>
            <?php endif; ?>
    </div>
</body>
</html>