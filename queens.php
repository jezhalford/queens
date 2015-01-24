<?php

$board = [];

for($x=0; $x < 8; $x++) {
    for($y=0; $y < 8; $y++) {
        $board[$x][$y] = null;
    }
}





function drawBoard($board) {
    for($x=0; $x < 8; $x++) {
        for($y=0; $y < 8; $y++) {
            echo $board[$x][$y] ?: ' ';
            echo "|";
        }
        echo PHP_EOL;
    }
}


drawBoard($board);

//function($board, $propsedX, $proposedY);