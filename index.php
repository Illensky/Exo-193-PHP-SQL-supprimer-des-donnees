<?php

/**
 * 1. Importez la table user dans une base de données que vous aurez créée au préalable via PhpMyAdmin
 * 2. En utilisant l'objet de connexion qui a déjà été défini =>
 *    --> Remplacez les informations de connexion ( nom de la base et vérifiez les paramètres d'accès ).
 *    --> Supprimez le dernier utilisateur de la liste, faites une capture d'écran dans PhpMyAdmin pour me montrer que vous avez supprimé l'entrée et pushez la avec votre code.
 *    --> Faites un truncate de la base de données, les auto incréments présents seront remis à 0
 *    --> Insérez un nouvel utilisateur dans la table ( faites un screenshot et ajoutez le au repo )
 *    --> Finalement, vous décidez de supprimer complètement la table
 *    --> Et pour finir, comme vous n'avez plus de table dans la base de données, vous décidez de supprimer aussi la base de données.
 */

require __DIR__ . '/Classes/Config.php';
require __DIR__ . '/Classes/DBSingleton.php';

$pdo = DBSingleton::PDO();
/*
 * 1.Delete last user
$sql = "DELETE FROM user ORDER BY ID DESC LIMIT 1";

$pdo->exec($sql);
*/

/*
 * 2.Trunc table
$sql = "TRUNCATE TABLE user";

$pdo->exec($sql);
*/

/*
 * 3.add one user
$stm = $pdo->prepare("
        INSERT INTO user (nom, prenom, rue, numero, code_postal, ville, pays, mail)
        VALUES (:nom, :prenom, :rue, :numero, :code_postal, :ville, :pays, :mail)
    ");

$nom = 'Laroche';
$prenom = 'Alexis';
$rue = 'Rue d\'hirson';
$numero = 3;
$code_postal = '02830';
$ville = 'Saint-Michel';
$pays = 'France';
$mail = 'alexis.laroche.02240@gmail.com';

$stm->bindParam(':nom', $nom);
$stm->bindParam(':prenom', $prenom);
$stm->bindParam(':rue', $rue);
$stm->bindParam(':numero', $numero);
$stm->bindParam(':code_postal', $code_postal);
$stm->bindParam(':ville', $ville);
$stm->bindParam(':pays', $pays);
$stm->bindParam(':mail', $mail);

$stm->execute();
*/

/*
 * 4. drop a complete table
$sql = "DROP TABLE user";

$pdo->exec($sql);
*/


/*
 * 5. Drop the complete database
$sql = "DROP DATABASE exo_193";

$pdo->exec($sql);
*/
/**
 * Théorie
 * --------
 * Pour obtenir l'ID du dernier élément inséré en base de données, vous pouvez utiliser la méthode: $bdd->lastInsertId()
 *
 * $result = $bdd->execute();
 * if($result) {
 *     $id = $bdd->lastInsertId();
 * }
 */