<?php
    $pdo = new PDO('mysql:host=localhost;dbname=megapushkonk2019;charset=utf8', 'megapushkonk2019', 'Gfw!j@i8c0Hd5Wa4HF&$#fcQ1!JH');

    if( count($_POST) > 0 ) {
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        
            $sql = "SELECT * FROM users WHERE tel=:tel OR email=:email";
            $query = $pdo->prepare($sql);
            $query->execute([
                'tel'=>$tel,
                'email'=>$email
            ]);
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if($result == '') {
                $sql = "INSERT INTO users (name, tel, email) VALUES (:n, :t, :e)";
                $query = $pdo->prepare($sql);   //Подготовка запроса
                if($query->execute([
                'n'=>$name,
                't'=>$tel,
                'e'=>$email
            ])) {
                echo 'sent';
            }
            } else {
                echo 'failed';
            }
        
    }
?>