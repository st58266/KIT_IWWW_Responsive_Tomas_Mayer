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
        
        <form action="index.php" method="get">
            <input type="hidden" name="page" value="form"/>
            <div class="radek">
                <label for="jmeno">Jméno</label>
                <input name="jmeno" type="text"/>
            </div>
            
            <div class="radek">
                <label for="jmeno">Příjmení</label>
                <input name="prijmeni" type="text"/>
            </div>
            
            <div class="radek">
                <label for="jmeno">Pohlaví</label>
                <select name="pohlavi">
                    <option>Muž</option>
                    <option>Žena</option>
                </select>
            </div>
            
            <div class="radek">
                <label for="jmeno">Tato galerie je dobrá</label>
                <input type="checkbox" checked name="like"/>
            </div>
            
            <div class="radek">
                <label for="jmeno"></label>
                <input type="submit"/>
            </div>  
            
        </form>
        
        <?php
        include 'bot.php';
        ?>
    </body>
</html>
