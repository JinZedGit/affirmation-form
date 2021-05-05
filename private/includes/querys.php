<?php
    $query1 = "SELECT name, id FROM faculty";
    $options1 = $mysqli->query($query1);

    $query2 = "SELECT name, id FROM recorded";
    $options2 = $mysqli->query($query2);

    $query3 = "SELECT name, id FROM semester";
    $options3 = $mysqli->query($query3);

    $query4 = "SELECT name, id FROM course";
    $options4 = $mysqli->query($query4);

    $query5 = "SELECT name, id FROM oks";
    $options5 = $mysqli->query($query5);

    $query6 = "SELECT name, id FROM specialties";
    $options6 = $mysqli->query($query6);
?>