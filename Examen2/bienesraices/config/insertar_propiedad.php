<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $direccion = $_POST['direccion'];
    $precio = $_POST['precio'];
    $id_vendedor = $_POST['id_vendedor'];

    $sql = "INSERT INTO propiedades (direccion, precio, id_vendedor) VALUES ('$direccion', '$precio', '$id_vendedor')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva propiedad insertada exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Propiedad</title>
</head>
<body>
    <h2>Insertar Nueva Propiedad</h2>
    <form action="" method="post">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" required><br>
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" required><br>
        <label for="id_vendedor">ID del Vendedor:</label>
        <input type="number" name="id_vendedor" required><br>
        <input type="submit" value="Insertar Propiedad">
    </form>
</body>
</html>
