<?php
include '../clases/ConexionDatabase.php';

session_start();

//Ve si estamos ya "logueados"
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../public/login.php");
    exit;
}
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    //Comprueba que el usuario no este vacio
    if(empty(trim($_POST["username"]))){
        $username_err = "Introduzca el nombre de usuario.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    //Comprueba que la contraseña no este vacia
    if(empty(trim($_POST["password"]))){
        $password_err = "Introduzca la contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    //Si no hay errores, continua
    if(empty($username_err) && empty($password_err)){
        //Busca al usuario por nombre
        $sql = "SELECT id, username, password FROM users WHERE username = :username";
        
        if($stmt = $conn->prepare($sql)){
            // Asocia el parametro :username
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            //Asigna el valor real
            $param_username = trim($_POST["username"]);
            
            if($stmt->execute()){
                // Si existe el usuario, verifica la contraseña
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // Si la contraseña es correcta, empieza una nueva sesion
                            session_start();
                            
                            //Guarda al usuario que esta logueado
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: ../admin/admin.php");
                        } else{
                            $login_err = "Nombre/contraseña invalida";
                        }
                    }
                } else{
                    $login_err = "Nombre/contraseña invalida";
                }
            } else{
                echo "Algo ha salido mal, intentalo mas tarde";
            }
            unset($stmt);
        }
    }
        unset($conn);
}
?>