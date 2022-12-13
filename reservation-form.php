<?php 
session_start();


$con = mysqli_connect("localhost", "root", "", "reservationsalles", 3307);
//$con = mysqli_connect($database_Host, $database_User, $database_Pass, $database_Name, 3307);
$request = $con->query('SELECT * FROM reservations');
$data = $request->fetch_All();

$message = "";

        if ( isset($_POST['submit']) ) {

            if ( $_POST['titre'] && $_POST['debut'] && $_POST['fin'] && $_POST['description']) {
                
                $titre = $_POST['titre'];
                $debut = $_POST['debut'];
                $fin   = $_POST['fin'];
                $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                $userId = $_SESSION['id'];

                if ($debut != $fin && $debut < $fin) {

                    $request = $con->query("INSERT INTO reservations(titre, description, debut, fin, id_utilisateur ) VALUES ('$titre','$description','$debut','$fin', '$userId')");

                }

                
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
            <input type="datetime-local" name="debut" id="">
            <!--<select type="datetime-local" name="debut" id="">
                <option value="09:00">08h00</option>
                <option value="10:00">09h00</option>
                <option value="11:00">10h00</option>
                <option value="12:00">11h00</option>
                <option value="13:00">12h00</option>
                <option value="08:00">13h00</option>
                <option value="14:00">14h00</option>
                <option value="15:00">15h00</option>
            </select>-->
            <label for="">Heure de fin :</label>
            <input type="datetime-local" name="fin" id="">
            <!--<select type="datetime-local" name="fin" id="">
                <option value="09:00">08h00</option>
                <option value="10:00">09h00</option>
                <option value="11:00">10h00</option>
                <option value="12:00">11h00</option>
                <option value="13:00">12h00</option>
                <option value="08:00">13h00</option>
                <option value="14:00">14h00</option>
                <option value="15:00">15h00</option>
            </select>-->
            <label for="">Description :</label>
            <textarea name="description" id="" cols="30" rows="10" ></textarea>
            <input type="submit" name="submit" value="soumettre ma réservation">
            </form>
        </section>
    </main>
</body>
</html>
