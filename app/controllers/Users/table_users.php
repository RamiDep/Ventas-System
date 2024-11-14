<?php

$sql = ("SELECT * FROM tb_users");
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO ::FETCH_ASSOC);