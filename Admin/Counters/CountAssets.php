<?php
    include '../../Systemconnection/Databaseconnection.php';

    $sql = "SELECT id from tblassets";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?>