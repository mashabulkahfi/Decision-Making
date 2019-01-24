<?php 
    include("Template/header.php");
    include("Template/navbar.php");
    include("config.php");


if (isset($_POST['jam']) && ($_POST['jam'] == 'Yes')){
    header("Location: kategori_jam.php");
} else if (isset($_POST['hari']) && ($_POST['hari'] == 'Yes')){
    header("Location: kategori_hari.php");
} else if (isset($_POST['jamhari']) && ($_POST['jamhari'] == 'Yes')){
    header("Location: kategori_jamhari.php");
}
?>

