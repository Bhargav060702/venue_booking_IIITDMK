<?php
    require('inc/alert.php');
    require('inc/db2.php');
    
   
    
    if(isset($_POST['admin_butt'])) {
            $admin_name=$_POST['admin_name'];
    $admin_pass=($_POST['admin_pass']);
    $sql ="SELECT admin_name,admin_pass FROM admin_login WHERE admin_name=:admin_name and admin_pass=:admin_pass";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':admin_name', $admin_name, PDO::PARAM_STR);
    $query-> bindParam(':admin_pass', $admin_pass, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);

    if($query->rowCount() > 0)
    {
        session_start();
    $_SESSION['alogin'] = true;
    echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    }  else{
        alert('error','Login Failed - Invalid Credentials!');
    }
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" comntent="IE=edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title> IIITDM Kurnool - Admin Login</title>
        <?php require('inc/links.php')?>
        <style>
            div.login-form{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 400px;
            }
        </style>
    </head>
    <body class="bg-light">
        <section style="background: linear-gradient(112.84deg, #FFFFFF 0.33%, #EEDFEF 100%)">
        <div class="login-form text-center rounded bg-white shadow overflow-hidden">
            <form method="POST">
                <h4 class="bg-dark text-white py-3"> Admin Login Panel </h4>
                <div class="p-4">
                    <div class="mb-3">
                        <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                    </div>
                    <div class="mb-3">
                        <input name="admin_pass" required type="password" id="inputPassword5" class="form-control shadow-none text-center" aria-describedby="passwordHelpBlock" placeholder="Password">
                    </div>
                    <button name="admin_butt" type="submit" class="btn text-white custom-bg">Login</button>
                </div>
            </form>
        </div>
       
        <?php require('inc/script.php') ?>
    </body>
</html>