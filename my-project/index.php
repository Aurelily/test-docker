<?php

/* La methode ci dessous vous permet d'avoir une visualisation de tous ce qui est installé dans votre environnement Docker pour ce projet  */
/* phpinfo();  */

require_once "connect.php";


$sql = 'SELECT * FROM clients';
$query = $db->query($sql);
$clients = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des clients</title>
</head>
<body>

<table border="1">
        <thead>
            <tr>
                <?php
                // Affichage des noms des colonnes
                if (!empty($clients)) {
                    foreach (array_keys($clients[0]) as $colonne) {
                        echo '<th>' . $colonne . '</th>';
                    }
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Affichage des données des clients
            foreach ($clients as $client) {
                echo '<tr>';
                foreach ($client as $value) {
                    echo '<td>' . htmlspecialchars($value) . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>