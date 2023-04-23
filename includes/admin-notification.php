<link rel="stylesheet" href="../assets/css/styles.css">

<?php 
    include 'dbconn.php';
    $isread=0;
    $sql = "SELECT id from requests where IsRead=:isread";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':isread',$isread,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $unreadcount=$query->rowCount();

?>
    
    <li class="dropdown">
        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
            <span><?php echo htmlentities($unreadcount);?></span>
            </i>
            <div class="dropdown-menu bell-notify-box notify-box">
            <span class="notify-title">You have <?php echo htmlentities($unreadcount);?> <b>unread</b> notifications!</span>

            <div class="notify-list">
            <?php 
                $isread=0;
                $sql = "SELECT requests.id as lid,club_members.FirstName,club_members.LastName,club_members.EmpId,requests.PostingDate from requests join club_members on requests.empid=club_members.id where requests.IsRead=:isread";
                $query = $dbh -> prepare($sql);
                $query->bindParam(':isread',$isread,PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {               ?>  
                    
                     
                     <a href="employeeLeave-details.php?leaveid=<?php echo htmlentities($result->lid);?>" class="notify-item">
                       <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                       <div class="notify-text">
                       <p><b><?php echo htmlentities($result->FirstName." ".$result->LastName);?>
                                            <br />(<?php echo htmlentities($result->EmpId);?>)
                                            </b> has recently applied for a leave.</p>
                            <span>at <?php echo htmlentities($result->PostingDate);?></b</span>
                        </div>
                      </a>
                                        
                      <?php }} ?> 
                     </div>
                            
                        
                     
                      </div>
                      
     </li>

     