<?php 
session_start();


$con = mysqli_connect("localhost", "root", "", "reservationsalles", 3307);
//$con = mysqli_connect($database_Host, $database_User, $database_Pass, $database_Name, 3307);
$request = $con->query('SELECT * FROM reservations');
$data = $request->fetch_All();

$message = "";

        if ( isset($_POST['submit']) ) {

            if ( $_POST['titre'] && $_POST['debut'] && $_POST['fin'] && $_POST['date'] && $_POST['description']) {
                
                $titre = $_POST['titre'];
                $debut = $_POST['debut'];
                $fin   = $_POST['fin'];
                $date  = $_POST['date'];
                $description = $_POST['description'];
            
            }


        }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            
            <form method="post">
            <h2>Formulaire de réservation</h2>
            
            <label for="">Titre</label>
            <input type="text" name="titre" placeholder="titre de l'évenement" required>
            <label for="">Heure de debut :</label>
            <input type="time" name="debut">
            <label for="">Heure de fin :</label>
            <input type="time" name="fin">
            <label for="">Description :</label>
            <textarea name="description" id="" cols="30" rows="10" ></textarea>
            <input type="submit" name="submit" value="soumettre ma réservation">
            </form>
        </section>
    </main>
</body>
</html>
