<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    include 'top.php';
    ?>
    <body>
        <?php
        include 'menu.php';
        ?>
        <div class='zoomedIMG'>
            <?php
            echo '<img src="img/img';
            echo $_GET['img'];
            echo '.png"/>'
            ?>
        </div>
        <?php
        include 'bot.php';
        ?>
    </body>
</html>
