<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
        session_status();
        $Mno= $_POST["Mno"];
        $Mpwd = $_POST["Mpwd"];

        for($i=0 ; $i<count($_SESSION["Mno"]) ; $i++){
            if($Mno == $_SESSION["Mno"][$i] && $Mpwd == $_SESSION["Mpwd"][$i]){
                ob_start();
                setcookie("Mna",$_SESSION["Mno"][$i]);
                header("location:syshandle.php");
            }
        }
        echo "<script>alert('登入帳號/密碼錯誤;');history.go(-1);</script>";
        

     ?>
</body>
</html>