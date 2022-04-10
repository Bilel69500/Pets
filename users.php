<?php
include 'include/header.php';
include 'include/function.php';
include 'include/table.php';

$id = $_GET["id"];
if ($id == 0) {
    $user = getNewUser();
    $action = "CREATE";
    $libelle = "Creer";
} else {
    $user = readPet($id);
    $action = "UPDATE";
    $libelle = "Mettre a jour";
}

?>


<form action="createUpdate.php" method="get">

        <input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
        <input type="hidden" name="action" value="<?php echo $action;  ?>"/>
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']?>">

    </div>



    <div class="form-group">
        <label for="race">race</label>
        <input type="text" class="form-control"  name="race" id="race" value="<?php echo $user['race']?>">
    </div>

    <div class="form-group">
        <label for="age">age</label>
        <input type="text" class="form-control" name="age" id="age" value="<?php echo $user['age']?>">
    </div>

    <div class="form-group">
        <label for="soin">soin</label>
        <input type="text" class="form-control" name="soin" id="soin" value="<?php echo $user['soin']?>">
    </div>

    <div class="button">
        <button type="submit"><?php echo $libelle;  ?></button>
    </div>

</form>

<?php if ($action!="CREATE") { ?>
    <form action="createUpdate.php" method="get">
        <input type="hidden" name="action" value="DELETE"/>
        <input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
        <p>
        <div class="button">
            <button type="submit">Supprimer</button>
        </div>
        </p>
    </form>
<?php } ?>

</body>
</html>