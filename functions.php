<?php
function onSave(){
    //print_r($_POST["note"]);
    saveToFile($_POST['note']);
}

function saveToFile($note){
    $notesArray = []; //skal bruges til næste gang (Get from fil, return json?)
    $notesArray[] = $note; //appender/pusher vores noter til en array
    $jsonNotes = json_encode($notesArray); //encoder det til en json
    
    file_put_contents(".//notes.json", $jsonNotes); //Putter det i en json fil
}
?>