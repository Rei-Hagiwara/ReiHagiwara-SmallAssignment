<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    
    //果物出力用～～～～～～～

        //価格設定に基づいて、15個分の価格を出す関数
        function generatePrices( $count, $min, $max ){
            $prices = [];
            for( $i = 1; $i <= 15; $i++ ){
                $prices[$i] = random_int( $min, $max );
            }
            return $prices;
        }
    
        //桃とイチゴを15個作る
        $peach = generatePrices( 15, 200, 300 );
        $strawberry = generatePrices( 15, 400, 500 );
    
        //配列の平均、最大、最低を連想配列で出す関数
        function getNumbers( $arr ){
            return [
               'avg' => floor(array_sum( $arr ) / count( $arr )),
               'max' => max( $arr ),
               'min' => min( $arr ),
            ];
        }
    
        $peachNums = getNumbers( $peach );
        $strawNums = getNumbers( $strawberry );

    //果物出力用～～～～～ここまで

    //選ばれたほうと果物をつなげる
    if($_SESSION["fruit"] === "1"){
        
    }

?>
    
</body>
</html>