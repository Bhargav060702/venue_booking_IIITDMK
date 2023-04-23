<?php
    include '../../includes/dbconn.php';

    $sql = "SELECT id from club_members";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $memcount=$query->rowCount();

    echo htmlentities($memcount);
?>