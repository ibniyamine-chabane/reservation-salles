<?php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
</head>
<body>
    <table border>
    <?php $days = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
          $hour = ['8:00','9:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00'] ?>
    <?php for ($row=0; $row < 10  ; $row++):  ?>
        <tr>   
            <td><?= $hour[$row]; ?></td>       
            <?php for ($col=0; $col < 7 ; $col++): ?>
                    <td><?= $days[$col].' '.$hour[$row]; ?></td>
            <?php endfor; ?>        
        </tr>
    <?php endfor; ?>    
    </table>
</body>
</html>