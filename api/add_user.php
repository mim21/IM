<?php
    session_start();
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            include 'C:\\AppParams\\params.php';

            $user = $_REQUEST["user"];
            $pwd = $_REQUEST["pwd"];
            $hash = hash('sha256',$pwd);
            $conn = mysqli_connect("$DB_URL","$DB_USER","$DB_PWD","$DB_NAME");         
            $sql = "INSERT INTO users (UserName,PwdHash) VALUES('$user', '$hash')";
            echo $sql;

            mysqli_query($conn,$sql);          
            echo(mysqli_error($conn));
            
            mysqli_close($conn);
          
            echo('<meta http-equiv="refresh" content="2; URL=login.php">');
        ?>
    </body>
</html>