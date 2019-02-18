<?php 

//水仙花
// shui(100,999);
// function shui($a,$m){
// 	for ($n=$a; $n <$m ; $n++) { 
// 		if (strlen($n)!=3) {
// 			continue;
// 		}
// 		$a=floor($n/100);
// 		$b=floor(($n%100)/10);
// 		$c=$n%10;
// 		// echo $c;echo "/";
// 		$sum=three($a)+three($b)+three($c);
// 		if ($sum==$n) {
// 			echo $sum;
// 			echo "/";
// 		}
// 	}
// }
// // echo three(4);
// function three($m){
// 	$sum=1;
// 	for ($i=0; $i <3 ; $i++) { 
// 		$sum*=$m;
// 	}
// 	return $sum;
// }


//三次的那个英文字符
// function san($c){
// 	$arr=array();
// 	for ($i=0; $i <strlen($c) ; $i++) { 
// 		@$arr[$c[$i]]+=1;
// 		if ($arr[$c[$i]]==3) {
// 			var_dump($arr);
// 		}
// 	}
// 	// var_dump($arr);
	
// }
// san('aaabc');

//回文

// function hui($a){
// 	$hui='';
// 	for ($i=strlen($a)-1; $i >=0 ; $i--) { 
// 		$hui.=$a[$i];
// 	}
// 	// var_dump($hui);
// 	for ($i=0; $i <strlen($a) ; $i++) { 
// 		if ($a[$i]!=$hui[$i]) {
// 			echo "不是回文字符串";die;
// 		}
// 	}
// 	echo "回文字符串";
// }
// hui('abcba');


//斐波那契

// function fei($a){
// 	if ($a<=2) {
// 		echo "array(['1'=>1,'2'=>2])";
// 	}
// 	$arr=['1','1'];
// 	for ($i=2; $i < $a; $i++) { 
// 		$arr[]=$arr[$i-1]+$arr[$i-2];
// 	}
// 	var_dump($arr);
// }
// fei(8);


//十进制


// function shi($a,$chuan=''){
// 	if ($a<=26) {
// 		$chuan.=chr($a+64);
// 		echo $chuan;
// 		die;
// 	}
// 	$b=floor($a/26);
// 	$c=$a%26;
// 	$chuan.=chr($b+64);
// 	if ($b>26) {
// 		shi($b+$c,$chuan);
// 	}else if($c==0){
// 		shi(26,$chuan);
// 	}else{
// 		shi($c,$chuan);
// 	}
// }

// shi(51);

//阶梯

// function fei($a){
// 	if ($a<=2) {
// 		echo "array(['1'=>1,'2'=>2])";
// 	}
// 	$arr=['1','1'];
// 	for ($i=2; $i < $a; $i++) { 
// 		$arr[]=$arr[$i-1]+$arr[$i-2];
// 	}
// 	var_dump($arr);
// }
// fei(8);


 ?>