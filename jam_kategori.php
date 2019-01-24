<?php 
    include("Template/header.php");
    include("Template/navbar.php");
    include("config.php");
?>

<link rel="stylesheet" href="style.css">

<body background="back2.jpg">

<div class="row " style="margin-top:100px">
        <div class="col-4">
        </div>
        <div class="col-4">
            <div class="card text-center">
                <div class=" card-header bg-info" >
                    <h5 style="margin-bottom:-0px" class="text-white" > Masukkan Kategori </h5>
                </div>
                <div class="card-body text-left">
                <form action="jam_kategori_final.php" method="POST">
                    <select name="kategori_input">
                        <option value="comedy">Comedy</option>
                        <option value="sports">Sports</option>
                        <option value="Film and Animation">Film and Animation</option>
                        <option value="Howto and Style">Howto and Style</option>
                        <option value="People and Blogs">People and Blogs</option>
                        <option value="Science and Technology">Science and Technology</option>
                    <!-- <div class="form-group">
                        <input type="text" class="form-control" name="kategori_input" placeholder="kategori">
                    </div> -->
                    <div class="text-right">
                        <input type="submit" name="submit" value="Submit" />
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>