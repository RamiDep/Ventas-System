<?php
include("../../config.php");
    if(isset($_POST)){
       
        $password = $_POST['txt_password'];
        $password_conf = $_POST['txt_password_conf'];
      
        
        if ($password === $password_conf)
        {
            $insertSQL = $pdo->prepare("INSERT INTO tb_users(names, email, password_user, date_create) 
                                            VALUES (:names, :email, :password_user, :date_create)");
            $insertSQL->bindParam(':names', $name);
            $insertSQL->bindParam(':email', $email);
            $insertSQL->bindParam(':password_user', $password);
            $insertSQL->bindParam(':date_create', $date_create_);

            $name = $_POST['txt_name'];
            $email = $_POST['txt_email'];
            $password = password_hash($_POST['txt_password'], PASSWORD_DEFAULT); 
            $date_create_ = $date_create;
            $insertSQL->execute();

            session_start();
            $msj = "Usuario creado satisfactoriamente.";
            $_SESSION['msj'] = $msj;
            header('Location: '.$url);

            // insert a row
            //   $firstname = "John";
            //   $lastname = "Doe";
            //   $email = "john@example.com";
            //   $stmt->execute();
        }else
            echo "La contraseña no coincide";
    }else 
        echo "No existen valores";

   

    
    