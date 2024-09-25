<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo</title>
</head>
<body>
    <style>
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: red;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
        }
        .container{
            background-color: skyblue;
            padding: 200px;
            border-radius: 8px ;
            box-shadow: 0 0 10px beige;
        }
        h1{
            text-align: center;
            color: black;
            margin-bottom: 20px;
            text-shadow: 0px 2px 0px greenyellow;
        }
        label{
            font-weight: bold;
            color: black;
            margin-bottom: 5px;
            display: block;
        }
        input{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            width: 100%;
            color: black;
        }
    </style>
    
    <div class="container">
        <h1>Introducir los jugadores de la liga mx</h1>
        <form action="guardar-datos.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="apodo">Apodo:</label>
            <input type="text" id="apodo" name="apodo" required>

            <label for="equipo">Equipo.:</label>
            <input type="text" id="equipo" name="equipo" required>

            <label for="posicion">Posicion:</label>
            <input type="text" id="posicion" name="posicion" required>

            <label for="altura">Altura:</label>
            <input type="text" id="altura" name="altura" required>

            <label for="peso">Peso:</label>
            <input type="text" id="peso" name="peso" required>

            <label for="numero">Numero:</label>
            <input type="text" id="numero" name="numero" required>
            
            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad" required>

            <label for="nacionalidad">Nacionalidad:</label>
            <input type="text" id="nacionalidad" name="nacionalidad" required>

            <label for="puntos">Trofeos:</label>
            <input type="text" id="trofeos" name="trofeos" required>
<div class="button">
    <button type="submit">Guardar</button>
    <button type="reset">Limpiar</button>
</div>
</form>
    </div>
</body>
</html>