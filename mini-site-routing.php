<!DOCTYPE html>
<html>
    <head>
        <title>Mini Site Routing</title>
    </head>
    

<a href="?Page=1"> page 1 </a>
<a href="?Page=2"> page 2 </a>
<a href="?Page=3"> page 3 </a>

 
<?php
    if(isset($_GET["Page"])){

    if($_GET["Page"]=="1")
{
    include("vitrine-accueil.php");
}
    elseif($_GET["Page"]=="2")
{
    include("vitrine-contacts.php");
}
    elseif($_GET["Page"]=="3")
{
    include("vitrine-programme.php");
}
}
?>
<header>
    <ul id="nav">
     <li><a href="connexion.php">Page Connexion</a></li>
</header>

<?php 
     if(isset($_GET["Page"])){
     if ($_GET ["page"]=="connexion.php")
{
    echo "<nav> page connexion ! </nav>";
}
}
if(!isset($_SESSION["id"])){
    if(isset($_COOKIE["id"])){
        $_SESSION["id"] = $_COOKIE["id"];

    }
    else{
        header("Location: <ital>connexion.php</ital>");
    }
}
?> 
 <body>

     <form action="upload.php" method="post" enctype="multipart/form-data">
         Select image to upload:
     <input type="file" name="fileToUpload" id="fileToUpload">
         <input type="submit" value="Upload Image" name="submit">
 </form>
<a href="insertion.html" >
</body>
</html>