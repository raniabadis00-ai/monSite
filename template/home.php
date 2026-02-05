<h1><?= $title ?></h1>

<h2>Liste d'user</h2>
<?php foreach ($users as $user): ?>
    <p><?= $user['username'] ?></p>
<?php endforeach; ?>

<img src="images/img.jpg" alt="" width="200">

