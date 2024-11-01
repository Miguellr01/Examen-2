<?php
    // Define una función llamada connectbd que establece una conexión a MySQL y devuelve un objeto mysqli
    function connectbd() :mysqli {
        
        // Conecta a la base de datos MySQL en localhost con usuario 'root' y sin contraseña, usando la base de datos 'bienesraices'
        $bd = mysqli_connect("localhost", "root", "", "bienesraices");

        // Verifica si la conexión fue exitosa
        if ($bd) {
            // Muestra mensaje de éxito si la conexión fue establecida
            echo "Conectado";
        } else {
            // Muestra mensaje de error si no se pudo conectar
            echo "No conectado";
        }
        
        // Retorna el objeto de conexión, ya sea exitoso o fallido
        return $bd;
    }
?>
