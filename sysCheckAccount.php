<?php
    session_start();

    $Mno = $_POST["Mno"] ?? "";
    $Mpwd = $_POST["Mpwd"] ?? "";

    for ($i = 0; $i < count($_SESSION["Mno"]); $i++) {
        if ($Mno == $_SESSION["Mno"][$i] && $Mpwd == $_SESSION["Mpwd"][$i]) {
            setcookie("Mna", $_SESSION["mna"][$i]); 
            header("location:syshandle.php");
            exit; 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <script>
        alert('登入帳號/密碼錯誤;');
        history.go(-1);
    </script>
</body>
</html>