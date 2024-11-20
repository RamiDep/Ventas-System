<?php

$sql_select = ("SELECT * FROM tb_users");
$query = $pdo->prepare($sql_select);
$query->execute();

$usuarios = $query->fetchAll(PDO ::FETCH_ASSOC);