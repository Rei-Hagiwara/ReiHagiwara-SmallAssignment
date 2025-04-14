<?php
    session_start();

    //セッション変数にinputからポストされた変数を入れ込む
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["seibetu"] = $_POST["seibetu"];
    $_SESSION["fruit"] = $_POST["fruit"];

    //名前が入ってなければエラーメッセージ入れて戻す
    //入ってれば結果に移る
        $errormsg = "";
        if( isset($_SESSION["name"]) == ""){
            $errormsg = "名前を入力してください";
            require_once("input.php");
            return;
       } else {
            require_once("result.php");
            return;
       } 
?>