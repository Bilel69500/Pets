<?php

    function getDbConnection()
    {
        try {
            $user = "root";
            $pass = "root";
            $pdo = new PDO('mysql:host=localhost; dbname=pets', $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch (PDOException $e){
            print "Error !:" . $e->getMessage(). "<br/>";
            die();
        }
    }

    function getAllPets()
    {
        $con = getDbConnection();
        $requete = 'SELECT * FROM pets_list';
        $rows = $con->query($requete);
        return $rows;
    }

    function readPet($id)
    {
        $con = getDbConnection();
        $requete = "SELECT * FROM pets_list WHERE id = '$id' ";
        $stmt = $con->query($requete);
        $row = $stmt->fetchAll();
        if(!empty($row)){
            return $row[0];
        }
    }

    function createPets($name,$race,$age,$soin)
    {
            try{
                $con = getDbConnection();
                $sql = "INSERT INTO pets_list (name, race, age, soin)
                        VALUES('$name', '$race', '$age' ,'$soin')";
                $con->exec($sql);
            }
            catch(PDOException $e){
                echo $sql ."<br>" . $e->getMessage();
            }
    }

    function updatePets($id, $name, $race, $age, $soin){
        try{
            $con = getDbConnection();
            $request = "UPDATE pets_list set 
                    name = '$name',
                    race = '$race',
                    age  =  '$age',
                    soin = '$soin'
                    where id = '$id' ";
            $stmt =  $con->query($request);
        }
        catch(PDOException $e){

            echo $sql . "<br>" . $e->getMessage();
        }
    }

    function deletePets($id)
    {
        try{
            $con = getDbConnection();
            $request = "DELETE from pets_list where id = '$id'";
            $stmt = $con->query($request);
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }


        function getNewUser() {
            $user['id'] = "";
            $user['name'] = "";
            $user['race'] = "";
            $user['age'] = "";
            $user['soin'] = "";



    }




?>