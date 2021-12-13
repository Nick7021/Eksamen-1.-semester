<?php 
include("./functions.php")
?>
<html>
<head>
<title>Farstrup Furniture</title>
<link rel="stylesheet" href="styles.css"> 
<body>
<img src="Farstrup.png" width="200">
<div class="content">
    <div class="produkt_billede">
    <img src="nobel8900.png" width="500">
</div>
<div class="produkt_info">
<h2>Nobel 8900</h2>
 <h3>Designet af Ole Tornøe Olesen</h3>
    <br>
    <pre>
    Nobels smukke, slanke og ædle udtryk passer til en indretning,
    der værdsætter det enkle udtryk med fokus på materialer,
    i bedste kvalitet.
    Her er der nemlig tale om et produkt,
    hvor der er kælet for detaljen. 
    Træets åre står smukt frem og alle samlinger står snorlige 
    – lavet til at holde i generationer. 
    </pre>
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
    Møbel betræk:
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

    <form method="post">
        <button type="submit" name="kurv">køb</button>
    </form>

    <ul>
        <!-- Her starter jeg mit loop -->
        <?php foreach(getFromFile() as $i => $kurv) { ?>
            <li>
                <?php echo $kurv; ?>
                <a href="?i=<?php echo $i; ?>">Slet</a>
            </li>
        <?php } ?>
    </ul>
  </div>
<div class="produkt_spec">
    <pre>
    <h4>Nobel 8900 med et personligt twist</h4>
Farstrup har over 100 års erfaring med stoleproduktion 
og med sloganet ”Fra stamme til stue”,
 er vi stolte af at skabe lænestole,
der både er dansk højkvalitet og giver komfort i særklasse.
Skal boligindretningen fuldendes kan nyheden Tray Sit®
sætte prikken over i’et med sit smukke enkle design 
og sine mange nyttige funktioner.
Et uundværligt multifunktionsmøbel, 
der både byder på funktioner som bakke,
velpolstret taburet, fodskammel og bord – alt i et møbel.
    </pre>
</div>
</div>
 
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