<?php
define('MAX', 8);
$queens = array_fill(0, MAX, '');
global $sum;

function isValid( $n , $queens){
	for($i = 0; $i < $n; $i++){
		if($queens[$i] == $queens[$n]){
			return 0;
		}
		if(abs($queens[$i] - $queens[$n]) == ($n - $i)){
			return 0;
		}
	}
	return 1;
}

function setQueen( $i , $queens){
	for($j = 0; $j < MAX; $j++){
		if($i == MAX){
			system("clear");
			global $sum;
			$sum++;
			echo "\tSolution: ".$sum.PHP_EOL;
			echo "————————————————————————".PHP_EOL;
			printQueens($queens);
			usleep(300000);
			return ;
		}
		$queens[$i] = $j;
		if(isValid( $i, $queens)){
			setQueen($i + 1, $queens);
		}
	}
}

function printQueens($queens){
	for($i = 0; $i < MAX; $i++){
		for($j = 0; $j < MAX; $j++){
			if($j === $queens[$i]){
				echo " ♛ ";
			}else{
				echo " ▢ ";
			}
		}
		echo PHP_EOL;
	}
}

setQueen(0, $queens);
echo PHP_EOL;
?>