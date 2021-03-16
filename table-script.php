<?php 

$pdo = new PDO('mysql:host=localhost;dbname=megapushkonk2019;charset=utf8', 'megapushkonk2019', 'Gfw!j@i8c0Hd5Wa4HF&$#fcQ1!JH');

if(count($_POST)>0){
    $email = $_POST['email'];

    //Поиск имени зашедшего пользователя в базе зарегистрированных пользователей
    $sql = "SELECT * FROM users WHERE email=:email";
    $query = $pdo->prepare($sql);
    $query->execute([
        'email'=>$email
    ]);
    $result_name = $query->fetch(PDO::FETCH_ASSOC);
    $name = $result_name['name'];
    
    //Проверка на наличие в базе вводивших пин код данного пользователя
    $sql = "SELECT * FROM gives_users WHERE email=:email";
    $query = $pdo->prepare($sql);
    $query->execute([
        'email'=>$email
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    
    //Если пользователь еще не вводил пин код, то добавить его в базу вводивших пин код
    if($result == '') {
        $sql = "INSERT INTO gives_users (email, name) VALUES (:e, :n)";
        $query = $pdo->prepare($sql);   //Подготовка запроса
        $query->execute([
            'e'=>$email,
            'n'=>$name
        ]);
    }

    echo $email;
}

?>