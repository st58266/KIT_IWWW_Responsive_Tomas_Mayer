<html>

    <?php
    include 'top.php';
    ?>
    <body>
        <?php
        include 'menu.php';
        ?>

        <div id="block"></div>


        <div id="content">
            <?php
                    for ($i = 1; $i < 11; $i++){
                        echo "<a href='img.php?img=$i'>";
                        echo "<img src='img/img$i.png'" ;
                        echo "</a>";
                    }
        ?>
<!--            <img src='img/img1.png'>
            <img src="img/img2.png">
            <img src="img/img3.png">
            <img src="img/img4.png">
            <img src="img/img5.png">
            <img src="img/img6.png">
            <img src="img/img7.png">
            <img src="img/img8.png">
            <img src="img/img9.png">
            <img src="img/img10.png">-->
        </div>
        <?php
        include 'bot.php';
        ?>
    </body>
</html>
