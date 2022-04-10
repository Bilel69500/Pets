<?php
include 'include/function.php';
include 'include/table.php';

$action = $_GET["action"];

if ($action == "DELETE") {
    $id = $_GET["id"];
} else {
    $id = $_GET["id"];
    $name = $_GET['name'];
    $race = $_GET['race'];
    $age  =  $_GET['age'];
    $soin = $_GET['soin'];

}


if ($action == "CREATE") {
    createPets($name, $race, $age, $soin);

    echo "animaux cree <br>";
    echo "<a href='tableau.php'>Liste des animaux</a>";

}

if ($action == "UPDATE") {
    updatePets($id, $name, $race, $age, $soin);
    echo "animal à jour <br>";
    echo "<a href='tableau.php'>Liste des animaux</a>";
}
if ($action == "DELETE") {
    deletePets($id);
    echo "animal supprimer<br>";
    echo "<a href='tableau.php'>Liste des animaux</a>";
}



?>
