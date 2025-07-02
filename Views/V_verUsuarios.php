<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Usuarios</title>
</head>
<body>
    
<table>
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Nombre Real</th>
        </tr>
    </thead>
    <tbody>

        <?php
       foreach ($usuarios as $user) {
            echo "<tr>";
            echo "<td>" . $user['username'] . "</td>";
            echo "<td>" . $user['password'] . "</td>";
            echo "<td>" . $user['nombre'] . "</td>";
            echo "</tr>";
        }
        ?>
</table>


</body>
</html>