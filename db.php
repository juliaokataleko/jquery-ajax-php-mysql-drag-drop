<?php
$conn = new mysqli('localhost', 'root', '', 'teste_db');
if($conn->connect_error) {
    die("Error : (" . $conn->connect_errno . ") " . $conn->connect_error);
}

// geting the tasks
$tasks = $conn->query("SELECT id, task FROM tasks ORDER BY list_order");

// updating the tasks order
if(isset($_POST['update'])) {
    $array = $_POST['arrayorder'];
    $count = 1;
    foreach ($array as $key => $idval) {
        $sql = "UPDATE tasks SET list_order = ". $count . " WHERE id = " .$idval;
        if($conn->query($sql)) echo "Record updated successfuully<br/>";
        else echo "Error updating record: " . $conn->error;

        $count ++;
    }
}