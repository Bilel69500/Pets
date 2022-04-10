<!doctype html>
<html lang="fr">
<head>
    <?php
    include 'include/header.php';
    include 'include/function.php';
    include 'include/table.php';

    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste d'animaux</title>
</head>
<body>
<?php
$rows = getAllPets();
$headers = getHeaderTable();
showTable($rows, $headers);
function getHeaderTable() {
    $headers = array();
    $headers[] = "ID";
    $headers[] = "name";
    $headers[] = "race";
    $headers[] = "age";
    $headers[] = "soin";
    return $headers;
}
?>
</body>
</html>