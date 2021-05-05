<?php
    $query1 = "SELECT name, value FROM faculty";
    $options1 = $mysqli->query($query1);

    $query2 = "SELECT name, value FROM recorded";
    $options2 = $mysqli->query($query2);

    $query3 = "SELECT name, value FROM semester";
    $options3 = $mysqli->query($query3);

    $query4 = "SELECT name, value FROM course";
    $options4 = $mysqli->query($query4);

    $query5 = "SELECT name, value FROM oks";
    $options5 = $mysqli->query($query5);

    $query6 = "SELECT name, value FROM specialties";
    $options6 = $mysqli->query($query6);
?>