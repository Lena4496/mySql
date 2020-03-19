<?php  

try
{
    // On se connecte à MySQL
    $answer = new PDO('mysql:host=localhost;dbname=projet_chat;charset=utf8', 'user', 'user');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
// variable  data = requete à MySql (answer) et ici on veux les colonnes message et mail de la table chat, dans l'ordre descendant (3,2,1,...) et on ne veux que 10 éléments
$datas = $answer->query('SELECT message, mail FROM chat ORDER BY ID DESC LIMIT 0, 10');
 

 
while ($data = $datas->fetch())
//temps que t'as les données que t'as été chercher dans la db, affiche les dans ces éléments html là"
{
    echo '<div style ="border: 1px solid black;">';
    echO '<p>  Message :' .$data['message']. '</p>';
    echo '<p> Mail : '  .$data['mail'].'</p>';
    echo '</div>'; 
}
?> 