<?php
$pdo = new PDO('mysql:host=localhost;dbname=megapushkonk2019;charset=utf8', 'megapushkonk2019', 'Gfw!j@i8c0Hd5Wa4HF&$#fcQ1!JH');
$email = $_POST['email'];
$pin = md5($_POST['pin']);
$sql = "SELECT * FROM pin where id=1";
$query = $pdo->prepare($sql);
$query->execute();
$arr = $query->fetch(PDO::FETCH_ASSOC);


$sql = "SELECT * FROM users WHERE email=:email";
$query = $pdo->prepare($sql);
$query->execute([
    'email'=>$email
]);
$result = $query->fetch(PDO::FETCH_ASSOC);
if($result == '') {
    echo "email_not_exist";
} else if($result != '' && $pin == $arr['pincode']) {
    echo "all_right";
} else if($pin != $arr['pincode']) {
    echo "wrong_pin";
}



?>