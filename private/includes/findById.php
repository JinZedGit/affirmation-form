<?php
function idToName($id, $table){
    global $mysqli;
    $query = "SELECT `name` FROM $table WHERE `id` = $id";
    $result = $mysqli->query($query);
    print_r(mysqli_fetch_array($result)['name']);
}

/* example for the function <?php idToName($_POST['faculty'], 'faculty'); ?> */
?>

