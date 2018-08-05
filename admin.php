<?php

if(isset($_POST['submit']) && isset($_FILES)) {
    $dest = __DIR__.'/test'.'/test'.$_FILES['test']['name'];
    if (move_uploaded_file($_FILES['test']['tmp_name'], $dest)) {
        if(isset($_POST['submit'])){
            header('Location: list.php');
            exit;
        }
    } else {
        echo "Файл не загружен";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    Отправить: <input name="test" type="file">
    </br>
    <input type="submit" name="submit" value="Отправить файл">
</form>
</body>
</html>
