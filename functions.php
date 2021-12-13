<?php include 'designcosts.php';
function addCost(int $a, $b) {
    return $a + $b;
}
?>
<?php
if(isset($_POST["kurv"])) {
    onSave();
}

if(isset($_GET['i'])) {
    deleteItem($_GET['i']);
}
?>
<?php
function onSave() {
    //print_r($_POST["note"]);
    saveToFile($_POST['kurv']);
}

function saveToFile($kurv) {
    $notesArray = getFromFile();
    $notesArray[] = $kurv;
    $jsonNotes = json_encode($notesArray);

    file_put_contents("./notes.json", $jsonNotes);
}

function getFromFile() {
    $jsonNotes = file_get_contents("./notes.json");
    $notesArray = json_decode($jsonNotes, true);
    return $notesArray;
}

function deleteItem($index) {
    $notesArray = getFromFile();
    unset($notesArray[$index]);

    $jsonNotes = json_encode($notesArray);

    file_put_contents("./notes.json", $jsonNotes);
    header("Location: index.php");
}
?>