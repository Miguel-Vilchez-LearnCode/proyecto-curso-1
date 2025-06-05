<?php  

    // iniciar una sesion
    session_start();
 
    // incluir el archivo que contiene la conexion a la base de datos
    include('conn.php');

    // condicional para validar si existen los datos enviados desde el formulario de inicio de sesion
    if (isset($_POST['boton'])) {

        // recibiendo los datos de formulario de inicio de sesion
        $usuario =  $_POST['user'];
        $clave =  $_POST['clave'];

        // consulta sql para seleccionar de la base de datos los datos que coinciden con las credenciales del formulario
        $sql = 'SELECT * FROM user WHERE userName = :user';

        // preparando ejecucion de la consulta sql con la function: -> prepare(aqui va la variable que almacena la consulta);
        $ejecutarSql = $conn->prepare($sql);
        $ejecutarSql->bindParam(':user',$usuario );
        $ejecutarSql->execute();

        // almacenando informacion en una variable (como un array) con la funcion: -> fetch(PDO::ASSOC);
        $array = $ejecutarSql->fetch(PDO::FETCH_ASSOC);

        // condicional para validar si el usuario existe en la base de datos para procesar sus credenciales
        if ($array) {               

            // condicional para validar si las credenciales ingresadas coinciden con las registradas en la base de datos
            if ($array['userName'] == $usuario && $array['pass'] === $clave) {
                session_start();
                $_SESSION['sesion'] = $array['id'];
                header('location:../dashboard.php');
            }
            else{ // si no se cumple la condicional anterior, ejecutamos el siguiente codigo
                session_start();
                $_SESSION['sesion'] = true;
                header('location:../login.php');
            }

        }else{ // si no se cumple la condicional que valida la existencia del usuario, ejecutamos el siguiente codigo
            session_start();
            $_SESSION['noUsuario'] = false;
            header(header: 'location:../login.php');
        } 
                
    }

?>
