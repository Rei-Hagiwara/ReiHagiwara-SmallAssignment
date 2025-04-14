<?php
    session_start();
    
    //セッションから情報受け取り＆初期値用変数に入れ込み
    $name = "";
    $seibetu = "2";
    $fruit = "2";

    if( isset($_SESSION["name"])){
        $name = $_SESSION["name"];
    }
    if( isset($_SESSION["seibetu"])){
        $seibetu = $_SESSION["seibetu"];
    }
    if( isset($_SESSION["fruit"])){
        $fruit = $_SESSION["fruit"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
</head>
<body>

    <!--エラーメッセージがあったら表示-->
    <?php
    if( isset($_POST["errormsg"])){
        echo $_POST["errormsg"]; ?>
    <?php } ?>

    <from action="control.php" method="post">
        お名前：<input type="text" name="name" value="<?=$name ?>" />
        性別：<input type="radio" name="seibetu" value="1"<?php if($seibetu === "1"){ echo "checked"; } ?>>男性　
             <input type="radio" name="seibetu" value="2"<?php if($seibetu === "2"){ echo "checked"; } ?>>女性
        <br>
        <select name="fruit">
            <option value="1"<?= $fruit === "1" ? 'selected' : ''?>>桃</option>
            <option value="2"<?= $fruit === "2" ? 'selected' : ''?>>イチゴ</option>
        </select>
        <br><br>
        <input type="submit" name="next" value="見てみる" />
    </from>
</body>
</html>