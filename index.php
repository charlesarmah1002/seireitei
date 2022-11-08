<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="shortcut icon" href="media/The-Akatsuki.jpg" type="image/jpg">
    <title>Akatsuki</title>
</head>
<body>
<!--header.php for the navigation bar-->
<?php 
    include "header.php";
?>
    <main onclick="item()">
        <div class="headliner">
            <div class="content">
                <div class="image">
                    <!-- going to be a video montage of akatsuki
                    would have the cloud and the text playing around in there -->
                    <img src="media/Bleach-TYBW-1024x576.jpg" alt="Bleach-TYBW">
                </div>
                <?php 
                    include "headliner-sidebar.php"
                ?>
            </div>
        </div>
        <div class="featured-section">
            <!-- my hero academia -->
            <?php 
                    include "mha.php"
                ?>
            <br>
            <br>
            <!-- bleach tybw -->
            <?php 
                    include "bleach-tybw.php"
                ?>
            <br>
            <br>
            <!-- spy x family -->
            <?php 
                include "spy-x-family.php"
            ?>
        </div>
    </main>
    <footer>
        <div class="container">
            <h3 class="logo-mini">Akatsuki</h3>
            <!-- socials -->
            <div class="socials">
                <a href="#" class="social-link">facebook</a>
                <a href="#" class="social-link">instagram</a>
                <a href="https://t.me/akatsukihideout" class="social-link">telegram</a>
            </div>
        </div>
    </footer>


    <script src="assets/js/dropdown.js"></script>
</body>
</html>