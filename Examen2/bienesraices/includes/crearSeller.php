<?php
    // Incluye el archivo header.php, que puede tener elementos comunes de la página (como el encabezado HTML)
    include "includes/header.php";
    
    // Importa el archivo de configuración y conexión a la base de datos
    require "../bienesraices/includes/config/connectbd.php";

    // Llama a la función connectbd() para establecer la conexión con la base de datos y la guarda en $bd
    $bd = connectbd();

    // Imprime el contenido de $_POST (los datos enviados por el formulario) para depurar
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    // Asigna las variables recibidas del formulario a las variables PHP
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Crea la consulta SQL para insertar un nuevo registro en la tabla 'sellers'
    $query = "insert into sellers (name, email, phone) values('$name', '$email', '$phone');";

    // Ejecuta la consulta en la base de datos
    $response = mysqli_query($db, $query);

    // Verifica si la consulta se ejecutó correctamente
    if ($response){
        // Mensaje de éxito si el registro fue agregado
        echo "Se agregó un registro";
    } else {
        // Mensaje de error si la consulta falló
        echo "Falló el registro";
    }
?>

<section>
    <h2>Crear Seller</h2>
    <div>
        <form action="crearSeller.php" method="$POST">
            <fieldset>
                    <legend>Fill all Form Fields to create a New Seller</legend>
                    <div>
                        <label for="id">ID</label>
                        <input type="number" id="id" name="id">
                    </div>
                    <div>
                        <label for="name">NAme</label>
                        <input type="text" id="name" name="name" placeholder="Your Name">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="your@email.com">
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="555 5 5555 55">
                    </div>
                    <div>
                        <button type="submit">Create a New Seller</button>
                    </div>
            </fieldset>
        </form>
    </div>
    </section>

<?php
    include "includes/footer.php";
?>