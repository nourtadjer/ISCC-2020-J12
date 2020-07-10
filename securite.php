<?php
include_once("singelton.php");
$pdo= connect_to_database();
session_start();


if(isset($_POST["password"])&&isset($_POST["name"])){
    $klh= $_POST["name"];
    $sql= "SELECT * FROM utilisateurs WHERE Login='$klh'";
    $stmt= $pdo->query($sql);
    $users= $stmt->fetch();
    var_dump($users);
    $_SESSION ["id"] = $_POST["name"];
    setcookie("id",$_SESSION["id"]);
}

else {
    echo "Mauvais couple identifiant / Mot de passe";
    echo "<a href=\"connexion.php\">Page Connexion</a>";

}
?>
    <ul id="nav">
    <li><a href="mini-site-routing.php">Page Accueil</a></li>





