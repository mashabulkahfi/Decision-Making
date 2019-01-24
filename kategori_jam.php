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
                    <h5 style="margin-bottom:-0px" class="text-white" > Masukkan Jam </h5>
                </div>
                <div class="card-body text-left">
                <form action="kategori_jam_final.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="jam_input" placeholder="jam">
                    </div>
                    <div class="text-right">
                        <input type="submit" name="submit" value="Submit" />
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>