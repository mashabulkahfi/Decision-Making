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
                <h5 style="margin-bottom:-0px" class="text-white" > Pilihan </h5>
            </div>
            <div class="card-body text-left">
            <form method="post" action="kategori_lanjut.php">
                <div> 
                    <input type="checkbox" name ="jam" value ="Yes" ><label for="checkbox">Berdasarkan Jam</label>
                </div>
                <div> 
                    <input type="checkbox" name ="hari" value ="Yes" ><label for="checkbox">Berdasarkan Hari</label>
                </div>
                <div> 
                    <input type="checkbox" name ="jamhari" value ="Yes" ><label for="checkbox">Berdasarkan Hari dan Jam</label>
                </div>
                <div> 
                    <input type="submit" value="submit" class="tombol">
                </div>
            </form>
                </div>
        </div>
    </div>
        <div class="col-4">
        </div>
    </div>