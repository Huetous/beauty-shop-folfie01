<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Folfie</title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="images/favicon/favicon-16x16.png" type="image/png">

    <link rel="stylesheet" href="src/css/main.css">
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
    <?php
      include 'app/views/nav_view.php';
      include 'app/views/sections/'.$content_view;
      if($content_view !== "index_view.php")
        include 'app/views/footer_view.php';
    ?>
</body>

<script src="js/scripts.min.js"></script>
<script src="libs/jquery.easing.1.3.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

</html>
