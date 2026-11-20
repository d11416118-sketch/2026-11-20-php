<?php
    session_start();
    $_SESSION["fno"] = array(1,2,3);
    $_SESSION["fimg"] = array("https://picsum.photos/id/684/600/400","https://picsum.photos/id/685/600/400" ,"https://picsum.photos/id/686/600/400");
    
    if( !isset($_SESSION["fsum"])){
        $_SESSION["fsum"] = array(0,0,0);
    }
    
    $_SESSION["mno"] = array("D123","D456","D789");
    $_SESSION["mna"] = array("周行一","王偉民","李佳慧");
    $_SESSION["Mpwd"] = array(123,456,789);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="sysCheckAccount.php">
        <p>帳號:<input type="text" name="Mno"></p>
        <p>密碼:<input type="text" name="Mpwd"></p>
        <input type="button" value="登入" onclick="checkNO();"> <input type="reset" value="取消">

    </form>
    <script>
        function checkNO(){
            let inputs = document.querySelectorAll("input");
            let act = inputs[0].value ;
            let pwd = inputs[1].value ;
            if(!act || !pwd){
                alert("帳/密 必須有值!!");
                return false ;
            }
            form1.submit();

        }
    </script>
</body>
</html>