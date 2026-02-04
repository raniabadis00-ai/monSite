<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>


<h1><?= $title ?></h1>

<h2>Liste d'user</h2>
<?php foreach ($users as $user): ?>
    <p><?= $user['username'] ?></p>
<?php endforeach; ?>





<img src="images/img.jpg" alt="" width="200">



<script src="assets/js/script.js"></script>
</body>
</html>

