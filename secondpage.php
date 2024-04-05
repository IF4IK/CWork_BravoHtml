<html>
<head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Заявка</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="v.ico" />
        <script src="https://kit.fontawesome.com/e29265e664.js" crossorigin="anonymous"></script>
    </head>
</head>
<body>

<section class="header">
    <nav>
        <div class="nav-links">
            <ul>
                <li><a href="index.php">ВЕРНУТЬСЯ НАЗАД</a></li>
            </ul>
        </div>
    </nav>
    <div class="join">
        <h1>Оставьте свою заявку</h1>
        <h1>Заполните все поля и максимально подробно<br>опишите свою проблему</h1>
        <form action="" method="POST" class="center">
            <h2>Введите ваше имя</h2>
            <input type="name" name="name"  required >
            <h2>Введите вашу фамилию</h2>
            <input type="secondname" name="secondname"  required >
            <h2>Введите ваш адресс электронной почты</h2>
            <input type="email" name="email"  required >
            <h2>Введите ваш номер телефона</h2>
            <input type="telnum" name="telnum" required>
            <h2>Опишите свою проблему</h2>
            <textarea type="text" name="text" cols="180" rows="10" required></textarea>
            <input type="submit" class="hero-btn-contact" value="Отправить" >
        </form>
    </div>
</section>
</body>
</html>

<?php

// формы
$name = $_POST['name'];
$secondname = $_POST['secondname'];
$email = $_POST['email'];
$telnum = $_POST['telnum'];
$text = $_POST['text'];


$db_host = "localhost";
$db_user = "root"; 
$db_password = ""; 
$db_base = 'Bravo'; 
$db_table = "Contacts"; 

try {
    // Бд коннект
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    // Менендез ты покойник!
    $db->exec("set name utf8");

    $data = array('name' => $name, 'secondname' => $secondname, 'email' => $email, 'telnum' => $telnum, 'text' => $text );
    // Zapros
    $query = $db->prepare("INSERT INTO $db_table (name, secondname, email, telnum, text) values (:name, :secondname, :email, :telnum, :text)");
    // work zaprosa
    $query->execute($data);
    // Херня?
    $result = true;
} catch (PDOException $e) {
    // Если есть ошибка
    print "Ошибка!: <br/>";
}

if ($result) {
    echo "Успех. Информация занесена в базу данных";

}
?>
