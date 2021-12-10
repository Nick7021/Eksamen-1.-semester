<?php 
include("./functions.php")
?>
<html>
<head>
<img src="Farstrup.png" width="200">
<title>Farstrup Furniture</title>
<link rel="stylesheet" href="styles.css"> 
<body> 
 <h1>Nobel 8900</h1>
 <h2> Designet af Ole Tornøe Olesen</h2>
<p>
    <img src="nobel8900.png" width="300">   
    <br>
    <br>
    Vejledende pris - <?php echo $a ?>
    <br>
    <?php
        if(isset($_POST['læder'])) {
            echo 'Pris med læder betræk - ';
            echo addCost($a,$betrækLæder);
        }
        if(isset($_POST['kvadrat'])) {
            echo "Pris med betræk fra Kvadrat - ";
            echo addCost($a,$betrækKvadrat);
        }
    ?>
   <form method="post">
        <input type="submit" name="læder"
                value="Læderbetræk"/>
          
        <input type="submit" name="kvadrat"
                value="Kvadrat"/>
    </form>

    <br>
    Efter valgt betræk vælg nu stel
    <br>
    <?php
        if(isset($_POST['natur'])) {
            echo 'Ny pris med naturstel - ';
            echo addCost($a,$stelNatur);
        }
        if(isset($_POST['lysnet'])) {
            echo "Pris med Lysnet stel - ";
            echo addCost($a,$stelLysnet);
        }
    ?>
   <form method="post">
        <input type="submit" name="natur"
                value="natur stel"/>
          
        <input type="submit" name="lysnet"
                value="lysnet stel"/>
    </form>
    <br>
    Størrelse
    <pre>
    Standard mål m.m.
    Bredde: 69 cm
    Dybde: 72 cm
    Højde: 116 cm

    Ændrer hvert mål med max 1-10cm
    </pre>
    <?php
        if(isset($_POST['størrelse'])) {
            echo "Pris med ændret mål - ";
            echo addCost($a,$ændretMål);
        }
    ?>
    
   <form method="post">
        <input type="text" name="størrelse"
                value="(Skriv her)"/>
        <input type="submit">
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</p>
</body>
</html>
<?