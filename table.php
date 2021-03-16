<?php
$pdo = new PDO('mysql:host=localhost;dbname=megapushkonk2019;charset=utf8', 'megapushkonk2019', 'Gfw!j@i8c0Hd5Wa4HF&$#fcQ1!JH');

if(count($_GET)>0){
    $email = $_GET['email'];
    
    //Проверка наличия email в базе вводивших пин код, для исключения ввода значения email в адресной строке
    $sql = "SELECT * FROM gives_users WHERE email=:email";
    $query = $pdo->prepare($sql);
    $query->execute([
        'email'=>$email
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if($result == '') {
        die('Что-то пошло не так :(');
    }

    //Извлечение полей базы вводивших пин код для отображения их на странице
    $sql = "SELECT * FROM gives_users";
    $query = $pdo->prepare($sql);
    $query->execute();
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    
    //Показать каким по счету является пользователь
    $sql = "SELECT * FROM gives_users WHERE email=:email";
    $query = $pdo->prepare($sql);
    $query->execute([
        'email'=>$email
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $numb = $result['id'];

    
    if($result['id'] != 20) {
           $msg = 'К сожалению Вы на '.$result['id'].' месте.<br class="lg-none"> Напоминаем, что призовое место - 20. <br> В следующий раз Вам обязательно повезет!';
    } else if($result['id'] == 20) {
        $msg = 'Поздравляем! Вы победитель! В ближайше время мы с Вами свяжемся.';
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мегаконкурс от Мегапуш - 2019</title>
    <link rel="stylesheet" href="css/slicknav.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-table.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="menu">
        <a href="index.php" class="logo"><img src="img/logo.png" alt=""></a>

        <ul id="menu">
            <li><a class="link" href="index.php">Главная</a></li>
        </ul>

        <span id="table-people">Табло участников</span>
        <p id="tel">+998 (78) 148 28 28</p>

    </div>

    <div class="table">
        <div class="box">
            <h3>Участники розыгрыша</h3>
            <p id='message' class="<?php if($result['id'] == 20) echo "win" ?>"><?= $msg ?></p> 
            <?php foreach ($users as $user) : ?>
            
            <div class="item">
                <div class="items">
                    <span id="numb" <?php if($user['id'] == 20) echo "class='win'" ?>><?php echo $user['id']; ?></span>
                    <span id="name" <?php if($user['id'] == 20) echo "class='win'" ?>><?php echo $user['name']; ?></span>
                </div>
                <span id="email" <?php if($user['id'] == 20) echo "class='win'" ?>><?php echo $user['email']; ?></span>
            </div>

            <?php endforeach; ?>

        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.0.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/script-table.js"></script>

</body>

</html>