<?php 
    include("Template/header.php");
    include("Template/navbar.php");
    include("config.php");


if (isset($_POST['view']) && ($_POST['view'] == 'Yes')){
    header("Location: hari_viewer.php");
} else if (isset($_POST['kategori']) && ($_POST['kategori'] == 'Yes')){
    header("Location: hari_kategori.php");
}
?>

