<?php 
    include 'includes/connect.php';
    include 'includes/auth.php';
?>
<?php
    $id = $_GET['id'];
    $friendUsername = str_replace($username, "", $id);
    $ifExists = $username.$friendUsername;
    if($friendUsername != $username && $friendUsername != 'bot')
    { 
        // $findTable = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'epiz_27865341_user' AND TABLE_NAME = '$ifExists'";
        $findTable = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'user' AND TABLE_NAME = '$ifExists'";
        $findResult = mysqli_query($con, $findTable);
        if(mysqli_num_rows($findResult)>0)
        {
            $id = $ifExists;
        } 
    }
    // $sql = "CREATE TABLE `epiz_27865341_user`.`$id` ( `sn` INT(128) NOT NULL AUTO_INCREMENT , `username` VARCHAR(128) NOT NULL , `dp` VARCHAR(128) NOT NULL, `msg` VARCHAR(128) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sn`)) ENGINE = MyISAM;";
    $sql = "CREATE TABLE `food`.`$id` ( `sn` INT(128) NOT NULL AUTO_INCREMENT , `username` VARCHAR(128) NOT NULL , `dp` VARCHAR(128) NOT NULL,  `msg` VARCHAR(128) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sn`)) ENGINE = InnoDB;";
    try {
        $result = mysqli_query($con, $sql);
    }
    catch (Exception $e) {}
    $_SESSION['room'] = $id;
    header("Location: hatDisplay.php");

    // $result = mysqli_query($con, $sql);
    // if($result){
    //     $_SESSION['room'] = $id;
    //     header("Location: hatDisplay.php");
    // }
    // else{
    //     $_SESSION['room'] = $id;
    //     header("Location: hatDisplay.php");
    // }



?>
