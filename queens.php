<?php




$board = [];

for($x=0; $x < 8; $x++) {
    for($y=0; $y < 8; $y++) {
        $board[$x][$y] = null;
    }
}


var_dump($board);

//function($board, $propsedX, $proposedY);