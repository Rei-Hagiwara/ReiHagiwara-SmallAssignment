<?php
        //価格設定に基づいて、15個分の価格を出すクラス
        class GenePrice{
            function generatePrices( $count, $min, $max ){
                $prices = [];
                for( $i = 1; $i <= 15; $i++ ){
                    $prices[$i] = random_int( $min, $max );
                }
                return $prices;
                }
            }
?>