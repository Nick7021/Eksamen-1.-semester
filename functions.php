<?php include 'designcosts.php';
function addCost(int $a, $b) {
    return $a + $b;
}
?>
<?php
if(isset($_POST["kurv"])) {
    gemMøbel();
}

if(isset($_GET['i'])) {
    sletMøbel($_GET['i']);
}
?>
<?php
function gemMøbel() {
    gemTilKurv($_POST['kurv']);
}

function gemTilKurv($kurv) {
    $listeKurv = hentFraKurv();
    $listeKurv[] = $kurv;
    $kurvJson = json_encode($listeKurv);

    file_put_contents("./kurv.json", $kurvJson);
}

function hentFraKurv() {
    $kurvJson = file_get_contents("./kurv.json");
    $listeKurv = json_decode($kurvJson, true);
    return $listeKurv;
}

function sletMøbel($index) {
    $listeKurv = hentFraKurv();
    unset($listeKurv[$index]);

    $kurvJson = json_encode($listeKurv);

    file_put_contents("./kurv.json", $kurvJson);
    header("Location: index.php");
}
?>