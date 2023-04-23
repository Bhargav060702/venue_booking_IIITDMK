<?php
    include '../includes/dbconn.php';
    $id=$_SESSION['alogin'];
                                    $sql = "SELECT UserName from  admin where UserName='$id'";
                                    // $res = mysqli_query($db, $sql);
                                    $query = $dbh -> prepare($sql);
                                    $query->execute();
                                    $results=$query->fetch(PDO::FETCH_OBJ);
                                    $name=$results->UserName;
                                    // console.log("res", results);
                                    ?> 
                                    <span> <?php echo htmlentities($name); echo" (Admin)"?></span>