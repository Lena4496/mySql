<?php 

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'Root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête touts
        die('Erreur : '.$e->getMessage());
}

$resultat = $bdd->query('SELECT * FROM students'); // ou $bd ???
$datas = $resultat->fetch();

while ($datas = $resultat->fetch())
{
    echo $datas ['lastname'];  
}
$resultat->closeCursor(); 
// $pdo = new PDO ('mysql:host=localhost;dbname=becode','root', '');

// try { 

//     $dhb = new PDO ('mysql:host=localhost;dbname=becode', $root, '');
//     foreach ($dbh->query('SELECT * from FOO') as $row) {

//        print_r($row);
//     }
 

// } catch (PDOException $e){

//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die ();
// }

try {
    $strConnection = 'mysql:host=localhost;dbname=becode'; //Ligne 1
    $arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $pdo = new PDO($connStr, 'Utilisateur', 'Mot de passe', $arrExtraParam); // Instancie la connexion
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Ligne 4
}
catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}

?>