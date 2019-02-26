<?php 
// n~m参数

// function chuan($n,$m){
// 	$arr=[];
// 	for ($i=1; $i <=$n ; $i++) { 
// 		$arr[]=$i;
// 	}
// 	$array=[];
// 	// var_dump($arr);
// 	$k=0;
// 	$y=0;
// 	// var_dump($arr);
// 	// echo count($arr);die;
// 	while (count($arr) > 1) {
// 		if (!isset($arr[$y])) {
// 			$arr=$array;
// 			$array=[];
// 			// var_dump($arr);die;
// 			$y=0;
// 		}
// 		$k++;
// 		if ($k==$m) {
// 			unset($arr[$y]);
// 			// var_dump($arr)
// 			$k=0;
// 		}else{
// 			$array[]=$arr[$y];
// 			// var_dump($array);
// 		}
// 		$y++;
// 		echo $y;
// 		// var_dump($arr);
// 	}
// 	var_dump($arr);
// }
// chuan(7,3);

// function san($arr){
// 	rsort($arr);
// 	$array=[
// 		[array_shift($arr)],
// 		[array_shift($arr)],
// 		[array_shift($arr)],
// 	];
// 	$count=count($arr);
// 	for ($i=0; $i < $count; $i++) { 
// 		$array[2][]=array_shift($arr);
// 		$sum=array_sum($array[2]);
// 		if ($sum>array_sum($array[0]) ){
// 			$array=[
// 				$array[2],
// 				$array[0],
// 				$array[1],
// 			];
// 		}elseif ($sum>array_sum($array[1])) {
// 			$array=[
// 				$array[0],
// 				$array[2],
// 				$array[1],
// 			];
// 		}
// 	}
// 	// var_dump($array);
// 	$a=array_sum($array[0]);
// 	echo $a.' / ';
// 	$b=array_sum($array[1]);
// 	echo $b.' / ';
// 	$c=array_sum($array[2]);
// 	echo $c.' / ';
// }

// san([12,5,3,63,74,23,23,62]);

// function tong($arr,$pow=0){
// 	static $return=[];
// 	$t=[];
// 	for ($i=0; $i <10 ; $i++) { 
// 		$t[]=[];
// 	}
// 	$count=count($arr);
// 	for ($j=0; $j <$count ; $j++) { 
// 		$index=(string)$arr[$j];
// 		if (isset($index[$pow])) {
// 			$t[$index[$pow]][]=$arr[$j];
// 		}else{
// 			array_unshift($return,$arr[$j]);
// 		}
// 	}
// 	for ($i=0; $i <10 ; $i++) { 
// 		if (count($t[$i])==1) {
// 			array_unshift($return,array_pop($t[$i]));
// 		}elseif (count($t[$i])>1) {
// 			tong($t[$i],$pow+1);
// 		}
// 	}
// 	var_dump($return) ;
// }

// tong([1,25,16,61,3,62]);


//银行


// function bank($a,$b){
// 	$arr=[];
// 	for ($i=0; $i <4 ; $i++) { 
// 		$arr[]=$a[$i]+$b[$i];
// 	}
// 	$sum=0;
// 	$count=count($a);
// 	for ($j=4; $j < $count; $j++) { 
// 		sort($arr);
// 		if ($a[$j]>$arr[1]) {
// 			array_unshift($arr,$a[$j]);
// 		}else{
// 			$sum+=$arr[1]-$a[$j];
// 			$str=$arr[1]+$b[$j];
// 			array_unshift($arr,$str);
// 		}
// 	}
// 	echo $sum;
// }

// bank([9.01, 9.10, 9.20, 9.21, 9.22,9.23],[0.30, 0.18, 0.22, 0.47, 0.11,.10]);

// class DB{
// 	private $a;
// 	private $b;
// 	private function __construct(...$list){
// 		list($ip,$username,$user,$pwd)=$list;
// 		self::DB=new PDO("mysql:host=$ip;charset=utf-8",$user,$pwd);
// 	}

// 	private function __clone(){

// 	}

// 	public function db(){

// 	}

// 	public function create(...$list){
// 		self::DB->query($sql)-exec();
// 	}

// 	public function select($list){
// 		self::DB->query($sql)-exec();
// 	}

// 	public function del($list){
// 		self::DB->query($sql)-exec();
// 	}
// 	$list=['127.0.0.1','username','root','root'];
// }


 ?>