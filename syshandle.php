<?php
    session_start(); // 必須啟動 Session 才能讀取 $_SESSION
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票系統</title>
</head>
<body>
    <div class="container">
        <h1 class='text-center'>工作訪投票系統</h1>
        <h3>登入者: <?php echo $_COOKIE["Mna"] ?? "未登入"; ?></h3>
        <table class="table">
            <thead> 
                <tr>
                    <th>編號1</th>
                    <th>編號2</th>
                    <th>編號3</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo "<tr class='text-center'>"; 
                    for ($i = 0; $i < count($_SESSION["fno"]); $i++) {
                        echo "<td><img src='" . $_SESSION["fimg"][$i] . "'><br><h5>票數:" . $_SESSION["fsum"][$i] . "票</h5><a href='sysVote.php?fno=" . $_SESSION["fno"][$i] . "'>請投我一票</a></td>"; // 補上分號
                    }
                    echo "</tr>"; 
                ?>
            </tbody>
        </table>
    </div>    
</body>
</html>