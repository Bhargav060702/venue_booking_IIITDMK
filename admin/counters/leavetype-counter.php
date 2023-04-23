<?php
    include '../../includes/dbconn.php';

    $sql = "SELECT id from  club_type";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $clubtypcount=$query->rowCount();

    echo htmlentities($clubtypcount);

?>   